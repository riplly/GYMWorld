<?php

namespace Database\Seeders;


use App\Models\CoachingStaff;
use App\Models\User;
use App\Models\Profile;
use App\Models\Schedule;
use App\Models\Role;
use App\Models\Service;
use App\Models\Subscription;
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

        User::factory(10)->create();
         Profile::factory(10)->create();
         Schedule::factory(10)->create();
         Service::factory(10)->create();
         Subscription::factory(10)->create();
         CoachingStaff::factory(10)->create();
        
    }
}
