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
        $user = [
            [
               'name'=>'User1',
               'email'=>'user1@user.com',
               'password'=> bcrypt('test123'),
            ],
            [
               'name'=>'User2',
               'email'=>'user2@user.com',
               'password'=> bcrypt('test123'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }      
    }
}
