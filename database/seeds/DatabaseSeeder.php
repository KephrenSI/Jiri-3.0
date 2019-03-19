<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(JiriesTableSeeder::class);
        $this->call(PeopleTableSeeder::class);
        $this->call(ImplementationsTableSeeder::class);
        $this->call(ScoresTableSeeder::class);
    }
}
