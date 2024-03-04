<?php

namespace Database\Seeders;

use App\Models\WorkingSkills;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WorkingSkills::Create([
            'title' => 'Database Administrator',
            'percentage' => 73
        ]);
        WorkingSkills::Create([
            'title' => 'Back-end',
            'percentage' => 65
        ]);
        WorkingSkills::Create([
            'title' => 'Web design',
            'percentage' => 33
        ]);
        WorkingSkills::Create([
            'title' => 'Web developer',
            'percentage' => 50
        ]);
    }
}
