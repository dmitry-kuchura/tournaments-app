<?php

namespace App\Models\Enum;

class LeaguesStatus
{
    const CREATED = 'created';
    const ACTIVE = 'active';
    const ENDED = 'ended';
    const ARCHIVED = 'archived';

    public static function map(): array
    {
        return [
            static::CREATED => 'Created',
            static::ACTIVE => 'Active',
            static::ENDED => 'Ended',
            static::ARCHIVED => 'Archived',
        ];
    }
}
