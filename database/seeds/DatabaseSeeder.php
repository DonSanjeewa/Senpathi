<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(JoinTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(SalaryRequestTableSeeder::class);
        $this->call(UserSalaryRequestsTableSeeder::class);
        $this->call(TeachersTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(PeriodsTableSeeder::class);
        $this->call(TimeTableSeeder::class);
        $this->call(GradeClassRoomsTableSeeder::class);
        $this->call(ClassRoomsSeeder::class);
    }
}
