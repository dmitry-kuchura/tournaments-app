<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LeaguePlayersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('league_players')->insert([
            'name' => Str::random(10),
            'psn_nickname' => Str::random(15),
            'team_id' => 1,
            'league_id' => 1,
            'status' => 'created',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('league_players')->insert([
            'name' => Str::random(10),
            'psn_nickname' => Str::random(15),
            'team_id' => 1,
            'league_id' => 1,
            'status' => 'created',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('league_players')->insert([
            'name' => Str::random(10),
            'psn_nickname' => Str::random(15),
            'team_id' => 2,
            'league_id' => 1,
            'status' => 'created',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('league_players')->insert([
            'name' => Str::random(10),
            'psn_nickname' => Str::random(15),
            'team_id' => 2,
            'league_id' => 1,
            'status' => 'created',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
