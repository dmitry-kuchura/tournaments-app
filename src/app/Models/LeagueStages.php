<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property int $season_id
 * @property string $circuit_name
 * @property string $laps
 * @property string $track_image
 * @property string $flag_image
 *
 * @property string $created_at
 * @property string $updated_at
 */
class LeagueStages extends Model
{
    /**
     * Database table name
     *
     * @var string
     */
    protected $table = 'league_stages';

    /**
     * Using timestamp
     *
     * @var bool
     */
    public $timestamps = true;

    protected $fillable = ['name', 'season_id', 'circuit_name', 'laps', 'track_image', 'flag_image', 'created_at', 'updated_at'];
}
