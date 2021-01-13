<?php

namespace App\Models\Enum;

class LeaguesGame
{
    const F12020 = 'f1_2020';
    const F12021 = 'f1_2021';
    const DIRT_2 = 'dirt_2';
    const GRAN_TURISMO_SPORT = 'gran_turismo_sport';
    const ASSETTO_CORSA = 'assetto_corsa';
    const OTHER = 'other';

    public static function map(): array
    {
        return [
            static::F12020 => 'F1 2020',
            static::F12021 => 'F1 2021',
            static::DIRT_2 => 'Dirt 2.0',
            static::GRAN_TURISMO_SPORT => 'Gran Turismo Sport',
            static::ASSETTO_CORSA => 'Assetto corsa',
            static::OTHER => 'Other',
        ];
    }
}
