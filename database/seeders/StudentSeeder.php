<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path: "database/json/data.json");
        $array = collect(json_decode($json));

        $array->each(function ($student) {
            student::create([
                'name' => $student->name,
                'email' => $student->email,
                'role' => $student->role,
                'age' => $student->age,
                'city' => $student->city
            ]);
        });
    }
}
