<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'Abihu',
            'lastname' => 'Haezer',
            'username' => 'abihu.haezer',
            'email' => 'abihu.haezer@gmail.com',
            'birthdate' => date('y-m-d', strtotime('2000/12/28')),
            'birthplace' => 'Surabaya',
            'gender' => 'm',
            'phone' => '081234567890',
            'password' => bcrypt('abihu')
        ]);
        DB::table('admins')->insert([
            'firstname' => 'Mister',
            'lastname' => 'Admin',
            'email' => 'admin@admin.com',
            'birthdate' => date('y-m-d', strtotime('2000/12/28')),
            'birthplace' => 'Surabaya',
            'gender' => 'm',
            'phone' => '081234567890',
            'password' => bcrypt('admin')
        ]);
    }
}
