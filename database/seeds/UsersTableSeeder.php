<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
      	// Admin
          User::create([
            'name' => 'Hansel',
            'email' => 'lesnah27@gmail.com',
            'password' => bcrypt('123123'),
            'role' => 0
        ]);

        // Support
        User::create([
            'name' => 'Claudia',
            'email' => 'client@gmail.com',
            'password' => bcrypt('123123'),
            'role' => 1
        ]);
         // Client
         User::create([
            'name' => 'Claudia',
            'email' => 'client@gmail.com',
            'password' => bcrypt('123123'),
            'role' => 1
        ]);
    }
}
