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
            User::create(array('name' => 'admin', 'first_name' => 'Jerome', 'pwd' => Hash::make('admin'),'email' => 'jeromepoucet@gmail.com'));
        }
    }