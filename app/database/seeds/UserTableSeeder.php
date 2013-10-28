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
            User::create(array('username' => 'admin', 'first_name' => 'Djé', 'password' => Hash::make('admin'),'email' => 'jeromepoucet@gmail.com'));
        }
    }