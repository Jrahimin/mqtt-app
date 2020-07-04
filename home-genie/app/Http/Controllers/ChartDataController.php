<?php

namespace App\Http\Controllers;

use App\Enums\Devices;
use App\Enums\TransactionStatus;
use App\Enums\TransactionTypesDisplayNameCode;
use App\Http\Controllers\Controller;
use App\Models\DeviceInfo;
use App\Models\DeviceState;
use App\Models\Logs\UserActivityTrack;
use App\Models\Transaction\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ChartDataController extends Controller
{
    public function getTrxTypeData(Request $request)
    {
        $today = Carbon::now()->format('Y-m-d');
        //$selectStr = $request->count ? "count(transaction_type_id) as trxTypeCount, transaction_type_id" : "sum(amount) as trxTypeAmount, transaction_type_id";

        $devices = Devices::DEVICES;
        $trxTypeNames = [];
        $trxTypeCount = [];
        $trxTypeColor = [];
        foreach ($devices as $deviceName)
        {
            if($deviceName == Devices::MOTIONSENSOR || $deviceName == Devices::TEMPSENSOR)
                continue;

            if($request->count)
                $count = DeviceInfo::where('device_name', $deviceName)->where('status', 1)->whereDate('created_at', $today)->count();
            else{
                $countSec = (DeviceState::where('device_name', $deviceName)->first()->active_time_sec)/60.0;
                $count = (double) str_replace(',','', number_format($countSec,2));
            }

            $trxTypeNames[] = $deviceName;
            $trxTypeCount[] = $count;
            $trxTypeColor[] = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
        }
        //Log::debug("chart data select query str : {$selectStr} for RequestCount : {$request->count}");

        /*$trxTypeCountData = Transaction::selectRaw($selectStr)
            ->whereDate('created_at', $today)
            ->whereIn('status', [TransactionStatus::SUCCESSFUL, TransactionStatus::PENDING])
            ->groupBy('transaction_type_id')->get();

        $trxTypeNames = [];
        $trxTypeCount = [];
        $trxTypeColor = [];
        foreach ($trxTypeCountData as $trxType)
        {
            $trxTypeNames[] = array_search($trxType->transaction_type_id, TransactionTypesDisplayNameCode::Codes);
            $trxTypeCount[] = $request->count ? $trxType->trxTypeCount : (double) str_replace(',','', number_format($trxType->trxTypeAmount,2));
            $trxTypeColor[] = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
        }*/

        $trxTypeData['typeNames'] = $trxTypeNames ? $trxTypeNames : ['No Data'];
        $trxTypeData['typeCount'] = $trxTypeCount ? $trxTypeCount : [0];
        $trxTypeData['typeColor'] = $trxTypeColor ? $trxTypeColor : [sprintf('#%06X', mt_rand(0, 0xFFFFFF))];

        return response()->json($trxTypeData);
    }

    public function getBackendHitData()
    {
        $todayInit = Carbon::now()->format('Y-m-d').' 00:00:00';
        $todayEnd = Carbon::now()->format('Y-m-d').' 23:59:59';

        $hourlyHits = UserActivityTrack::whereBetween('created_at', [$todayInit, $todayEnd])->get()->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('h');
        });

        $hourLimit = Carbon::now()->format('h');
        $allHours = [];
        for($i=$hourLimit; $i>=0; $i--)
        {
            $allHours[] = sprintf("%02d", $i);
        }

        $allHours = array_reverse($allHours);
        $hours = [];
        $hitCount = [];

        foreach ($allHours as $hour)
        {
            $count = 0;
            foreach ($hourlyHits as $dataHour=>$rows)
            {
                if($hour == $dataHour){
                    $count = $rows->count();
                    break;
                }
            }

            $hours[] = $hour.':00';
            $hitCount[] = $count;
        }

        $data['hours'] = $hours;
        $data['hitCount'] = $hitCount;

        return response()->json($data);
    }
}
