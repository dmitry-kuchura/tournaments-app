<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $content
 * @property int $league_id
 * @property string $settings
 * @property string $status
 *
 * @property string $created_at
 * @property string $updated_at
 *
 * @property LeagueStages $stages
 */
class LeagueSeasons extends Model
{
    /**
     * Database table name
     *
     * @var string
     */
    protected $table = 'league_seasons';

    /**
     * Using timestamp
     *
     * @var bool
     */
    public $timestamps = true;

    protected $fillable = ['name', 'content', 'league_id', 'settings', 'status', 'created_at', 'updated_at'];

    public function stages()
    {
        return $this->hasMany('App\Models\LeagueStages', 'season_id', 'id');
    }
}
