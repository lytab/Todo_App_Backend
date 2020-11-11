<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {for ($i=0; $i < 10; $i++) {
        # code...
        DB::table('todos')->insert([
            'text' => Str::random(10)
        ]);
    }
    }
}
