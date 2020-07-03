<?php

use Illuminate\Database\Seeder;

class DeviceStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $devices = \App\Enums\Devices::DEVICES;

        foreach ($devices as $device)
        {
            \App\Models\DeviceState::create([
                'device_name' => $device
            ]);
        }
    }
}
