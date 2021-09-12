<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModeleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("modeles")->insert([
            ["nom"=>"esprimo e21","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"display 21","created_at"=>"2021-08-25 13:08:13"],
           

        ]);
    }
}
