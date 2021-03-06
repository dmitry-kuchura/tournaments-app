<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $content
 * @property int $admin_id
 * @property string $platform
 * @property string $status
 * @property string $game
 *
 * @property string $created_at
 * @property string $updated_at
 *
 * @property LeagueSeasons $seasons
 */
class Leagues extends Model
{
    /**
     * Database table name
     *
     * @var string
     */
    protected $table = 'leagues';

    /**
     * Using timestamp
     *
     * @var bool
     */
    public $timestamps = true;

    protected $fillable = ['name', 'content', 'admin_id', 'platform', 'status', 'game', 'created_at', 'updated_at'];

    public function seasons()
    {
        return $this->hasMany('App\Models\LeagueSeasons', 'league_id', 'id')->with('stages');
    }
}
