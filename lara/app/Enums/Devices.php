<?php


namespace App\Enums;


class Devices
{
    const LEDR  = 'led-right';
    const LEDG  = 'led-green';
    const LEDB  = 'led-blue';
    const LIGHT = 'light';
    const FAN   = 'fan';

    const TEMPSENSOR   = 'temperature-sensor';
    const MOTIONSENSOR = 'motion-sensor';

    const DEVICES = [Devices::LEDR, Devices::LEDG, Devices::LEDB, Devices::LIGHT, Devices::FAN, Devices::TEMPSENSOR, Devices::MOTIONSENSOR];
}