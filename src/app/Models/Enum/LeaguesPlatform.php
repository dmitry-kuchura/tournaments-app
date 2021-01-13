<?php

namespace App\Models\Enum;

class LeaguesPlatform
{
    const PS4 = 'ps4';
    const XBOX = 'xbox';
    const PS5 = 'ps5';
    const PC = 'pc';

    public static function map(): array
    {
        return [
            static::PS4 => 'PlayStation 4',
            static::XBOX => 'Xbox',
            static::PS5 => 'PlayStation 5',
            static::PC => 'PC',
        ];
    }
}
