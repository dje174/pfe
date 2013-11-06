<?php

    class RegisterController extends BaseController {

        public function __construct(User $user){
            $this -> user = $user;
        }

        public function register(){
            return View::make('user.register');
        }

        public function store(){

            $validator = Validator::make(
                array(  'email' => Input::get('email'),
                        'password' => Input::get('password')),
                array(  'email' => 'required|email',
                        'password' => 'required|alpha-num'));

            $this->user->create(array('first_name'=>Input::get('first_name'),'name'=>Input::get('name'),'email'=>Input::get('email'),'password'=>Hash::make(Input::get('password'))));

            if($validator->fails()){
                return Redirect::route('register')->with('flash_error','Il y a une erreur dans le formulaire');
            }else{
                return Redirect::route('home')
                ->with('flash_notice', 'Compte créé');
            }
        }

    }