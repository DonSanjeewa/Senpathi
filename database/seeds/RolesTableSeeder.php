<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = new Faker\Factory();

        $f = $faker::create();

        DB::table('roles')->insert([
            'name' => "Super Admin",
            'slug' => "super_admin",
            'description' =>  $f->paragraph,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        DB::table('roles')->insert([
            'name' => "Principal",
            'slug' => "principal",
            'description' =>  $f->paragraph,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        DB::table('roles')->insert([
            'name' => "Teacher",
            'slug' => "teacher",
            'description' =>  $f->paragraph,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        DB::table('roles')->insert([
            'name' => "Vice Principal",
            'slug' => "vice_principal",
            'description' =>  $f->paragraph,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        DB::table('roles')->insert([
            'name' => "Clerk",
            'slug' => "clerk",
            'description' =>  $f->paragraph,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
    }
}
