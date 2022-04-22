<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; 
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $user=new User ; 
        $user->name= 'Admin';
        $user->email= 'Admin@gmail.com';
        $user->role='admin'; 
        $user->password = Hash::make('secret123');
        $user->save();
        return $user;
    }
}
