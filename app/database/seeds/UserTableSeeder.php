<?php
    /**
    * 
    */
    class UserTableSeeder extends Seeder
    {
        
        public function __construct()
        {
            # code...
        }

        public function run(){
            DB::table('users')->delete();
            User::create(array('name' => 'admin', 'first_name' => 'Jerome', 'email' => 'jeromepoucet@gmail.com', 'password' => Hash::make('dje')));
        }
    }