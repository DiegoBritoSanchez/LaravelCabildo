<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //
    Service::create([
      "title" => "Service 1",
      "description" => "Description",
      "logo_url" => "http://127.0.0.1:8000/images/icons/icon.svg",
      "color_hex" => "#fcf4ff",
    ]);
    Service::create([
      "title" => "Service 2",
      "description" => "Description",
      "logo_url" => "http://127.0.0.1:8000/images/icons/icon1.svg",
      "color_hex" => "#78e4df",
    ]);
    Service::create([
      "title" => "Service 3",
      "description" => "Description",
      "logo_url" => "http://127.0.0.1:8000/images/icons/icon2.svg",
      "color_hex" => "#3f3f3f",
    ]);
    Service::create([
      "title" => "Service 4",
      "description" => "Description",
      "logo_url" => "http://127.0.0.1:8000/images/icons/icon3.svg",
      "color_hex" => "#3c9162",
    ]);
    Service::create([
      "title" => "Service 5",
      "description" => "Description",
      "logo_url" => "http://127.0.0.1:8000/images/icons/icon4.svg",
      "color_hex" => "#ff82ff",
    ]);
    Service::create([
      "title" => "Service 6",
      "description" => "Description",
      "logo_url" => "http://127.0.0.1:8000/images/icons/icon5.svg",
      "color_hex" => "#eec07b",
    ]);
  }
}
