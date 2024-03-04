<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Education;
class EducationSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Education::Create([
        'title' => 'CFGS Desarrollo de Aplicaciones Web',
        'description' => '',
        'dates' => '2021-2023',
        'color_hex' => '#fcf4ff'
    ]);
    Education::Create([
        'title' => 'CFGS Administración de Sistemas Informáticos en Red',
        'description' => '',
        'dates' => '2017-2019',
        'color_hex' => '#78e4df'
    ]);
  }
}
