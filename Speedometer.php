<?php

class Speedometer
{
    public const RATIO_MILES_TO_KM = 1.61;

    public static function convertKmToMiles(int $km)
    {
        return round($km * self::RATIO_MILES_TO_KM, 2);
    }

    public static function convertMilesTokm(int $miles)
    {
        return round($miles / self::RATIO_MILES_TO_KM, 2);
    }
}
