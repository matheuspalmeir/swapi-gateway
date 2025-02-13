<?php

namespace App\Services;

class SwapiFactory
{
    public static function create(): SwapiService
    {
        return new SwapiService();
    }
}
