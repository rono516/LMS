<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(PermissionsSeeder::class);
        $this->call(UserGroupsSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(CoursesSeeder::class);
        $this->call(ModulesSeeder::class);
        $this->call(ReviewsSeeder::class);
        // $this->call(LessonsSeeder::class);
    }
}
