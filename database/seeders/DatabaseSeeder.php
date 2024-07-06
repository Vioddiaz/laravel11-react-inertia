<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'id' => 1,
            'name' => 'Violeta',
            'email' => 'violeta@gmail.com',
            'password' => bcrypt('123.321A'),
            'email_verified_at' => time()
        ]);
        User::factory()->create([
            'id' => 2,
            'name' => 'Viodd',
            'email' => 'viodd@gmail.com',
            'password' => bcrypt('24022019.F'),
            'email_verified_at' => time()
        ]);
        User::factory()->create([
            'id' => 22,
            'name' => 'Violeta Diaz',
            'email' => 'violetadiaztrejo@gmail.com',
            'password' => bcrypt('240220.19F'),
            'email_verified_at' => time()
        ]);

        Project::factory()
            ->count(30)
            ->hasTasks(30)
            ->create();
    }
}
