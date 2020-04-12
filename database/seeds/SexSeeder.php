<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sexes')->insert([
            'kind' => "M",
        ]);
        DB::table('sexes')->insert([
            'kind' => "F",
        ]);
    }
}
