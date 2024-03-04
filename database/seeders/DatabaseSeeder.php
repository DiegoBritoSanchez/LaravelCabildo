<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Usuario de ejemplo',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'description' => 'Junior Software Developer',
            'linkdn_url' => 'https://www.linkedin.com/in/diego-brito-sanchez-783583143/',
            'phone' => '+34 111223344',
            'address' => 'La Palma, Canry Island',
            'birthdate' => '1997-08-31',
            'bio' => ''
        ]);
        $this->call([
            ClientSeeder::class,
            EducationSeeder::class,
            ExperienceSeeder::class,
            KnowledgeSeeder::class,
            ServiceSeeder::class,
            WorkingSeeder::class
        ]);
    }
}
