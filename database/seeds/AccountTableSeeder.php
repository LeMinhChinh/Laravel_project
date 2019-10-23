<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account')->insert([
            'username' => 'Minh Chính',
            'password' => bcrypt('c10111998'),
            'email' => 'stormshadow1110@gmail.com',
            'fullname' => 'Lê Minh Chính',
            'gender' => 1,
            'age' => date('Y-m-d'),
            'address' => 'Nam Định',
            'avatar' => null,
            'role' => 1,
            'status' =>1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' =>null
        ]);
    }
}
