<?php

namespace Database\Seeders;

use App\Models\info;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;


class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path: "database/json/data-info.json");
        $array = collect(json_decode($json));

        $array->each(function ($student_city) {
            info::create([
                'city' => $student_city->city
            ]);
        });
    }
}
