<?php

namespace Database\Seeders;
use DB;
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
        DB::table('users')->insert([
            ['id'=>4,'name'=>'Quyen','email'=>'abc123@gmail.com','password'=>bcrypt('1234')]
        ]);
        //  \App\Models\User::factory(3)->create();
        //  \App\Models\Category::factory(5)->create();
        //  \App\Models\Type::factory(10)->create();
        //  \App\Models\Objects::factory(10)->create();
        //  \App\Models\Detail::factory(10)->create();
    }
}
