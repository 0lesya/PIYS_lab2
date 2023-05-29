<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class TagSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('tags')->insert([
                'tag title' => Str::random(20),
                'code' => Str::snake(Str::random(20)),
            ]);
        }
    }
}
