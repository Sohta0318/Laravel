<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('users')->insert([
        //     'name'=>str_random(10),
        //     'email'=> str_random(10).'coding@facluty.com',
        //     'password'=>bcrypt('secret'),
            
        // ]);
        DB::insert("INSERT INTO users (name, email, password) VALUE ('Test', 'test@gamil.com', '123')");
    }
}