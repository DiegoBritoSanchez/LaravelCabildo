<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Knowledge;
class KnowledgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Knowledge::Create([
            'title' => 'Java',
        ]);
        Knowledge::Create([
            'title' => 'PHP',
        ]);
        Knowledge::Create([
            'title' => 'Laravel',
        ]);
        Knowledge::Create([
            'title' => 'Python',
        ]);
        Knowledge::Create([
            'title' => 'JavaScript',
        ]);
        Knowledge::Create([
            'title' => 'MySql',
        ]);
    }
}
