<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("marques")->insert([
            ["nom"=>"Alfatron","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"condor","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"hp","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"fujitsu","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"compaq","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"dell","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"acer","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"samsung","created_at"=>"2021-08-25 13:08:13"],

        ]);
    }
}
