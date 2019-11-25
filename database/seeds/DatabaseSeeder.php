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
        DB::table('users')->insert([
            'name' => 'Dr.',
            'email' => 'ft_salmani@yahoo.com.au',
            'password' => bcrypt('6247014'),
            'family' => 'Salmani',
            'stdNo' => '0',
            'role' => 'admin',
        ]);
    }

}
