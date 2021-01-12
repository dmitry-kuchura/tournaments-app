<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LeagueStagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('league_stages')->insert([
            'name' => Str::random(10),
            'season_id' => 1,
            'circuit_name' => Str::random(10),
            'laps' => 15,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('league_stages')->insert([
            'name' => Str::random(10),
            'season_id' => 1,
            'circuit_name' => Str::random(10),
            'laps' => 19,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('league_stages')->insert([
            'name' => Str::random(10),
            'season_id' => 1,
            'circuit_name' => Str::random(10),
            'laps' => 29,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('league_stages')->insert([
            'name' => Str::random(10),
            'season_id' => 1,
            'circuit_name' => Str::random(10),
            'laps' => 10,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
