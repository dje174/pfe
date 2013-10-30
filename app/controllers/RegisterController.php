<?php

    class RegisterController extends BaseController {

        public function __construct(User $user){
            $this -> user = $user;
        }

        public function register(){
            return View::make('user.register')
        }

    }