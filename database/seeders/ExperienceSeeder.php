<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Experience::Create([
            'title' => 'Desarrollador en el Cabildo Insular de La Palma',
            'description' => 'Proyecto becado',
            'dates' => '2024',
            'color_hex' => '#fcf4ff'
        ]);
        Experience::Create([
            'title' => 'Dependiente',
            'description' => 'Dependiente en tienda',
            'dates' => '2019-2020',
            'color_hex' => '#78e4df'
        ]);
    }
}
