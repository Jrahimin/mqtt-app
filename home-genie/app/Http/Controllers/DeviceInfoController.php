<?php

namespace App\Http\Controllers;

use App\Models\DeviceInfo;
use App\Models\DeviceState;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DeviceInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dashboard(Request $request)
    {
            return view('dashboard.switch');
    }

    public function index(Request $request)
    {
        if(!$request->wantsJson())
            return view('iot');

        $deviceInfo = DeviceInfo::all();

        return response()->json($deviceInfo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            Log::debug("DeviceInfo store req : ".json_encode($request->all()));

            $deviceName = config('device_map.'.$request->device_name);

            Log::debug("Device name : {$deviceName}");

            DeviceInfo::create([
                'device_name' => $deviceName,
                'device_type' => $request->device_type,
                'status' => !!$request->status,
                'instr_from' => $request->instr_from,
                'topic' => $request->topic,
                'message' => $request->message,
            ]);

            $deviceState = DeviceState::where('device_name', $deviceName)->first();

            Log::debug("Device state : ".json_encode($deviceState));

            if($deviceState->status){
                if(!$request->status){
                    $onTime = Carbon::parse($deviceState->updated_at);
                    $nowTime = Carbon::parse(Carbon::now()->format('Y-m-d H:i:s'));
                    $timeOn = $nowTime->diffInSeconds($onTime);

                    Log::debug("Time on : {$timeOn}");

                    $totalTimeOn = $deviceState->active_time_sec + $timeOn;

                    $deviceState->update(['status' => !!$request->status, 'active_time_sec' => $totalTimeOn]);
                }
            } else{
                if($request->status){
                    $deviceState->update(['status' => !!$request->status]);
                }
            }
        }
        catch (\Exception $e){
            Log::error($e->getMessage().' '.$e->getLine().' '.$e->getFile());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
