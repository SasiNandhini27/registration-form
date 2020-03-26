<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
               'mobile_number' => '5467234507',
               'country' => 'India' 
            ],
            [
               'name'=>'User2',
               'email'=>'user2@user.com',
               'password'=> bcrypt('test123'),
               'mobile_number' => '6542267687',
               'country' => 'India'
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
