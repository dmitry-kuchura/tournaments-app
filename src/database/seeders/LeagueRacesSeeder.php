<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LeagueRacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('league_races')->insert([
            'stage_id' => 1,
            'player_id' => 1,
            'qualification_position' => 4,
            'finish_position' => 4,
            'pits' => 2,
            'is_finished' => false,
            'points' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('league_races')->insert([
            'stage_id' => 1,
            'player_id' => 2,
            'qualification_position' => 3,
            'finish_position' => 2,
            'pits' => 2,
            'is_finished' => true,
            'points' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('league_races')->insert([
            'stage_id' => 1,
            'player_id' => 3,
            'qualification_position' => 2,
            'finish_position' => 3,
            'pits' => 2,
            'is_finished' => true,
            'points' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('league_races')->insert([
            'stage_id' => 1,
            'player_id' => 4,
            'qualification_position' => 1,
            'finish_position' => 1,
            'pits' => 1,
            'is_finished' => true,
            'points' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
