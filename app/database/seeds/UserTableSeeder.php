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
            User::create(array('user_name' => 'admin', 'first_name' => 'Jerome', 'password' => 'admin','email' => 'jeromepoucet@gmail.com'));
        }
    }