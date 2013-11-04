<?php

    class RegisterController extends BaseController {

        public function __construct(User $user){
            $this -> user = $user;
        }

        public function register(){
            return View::make('user.register');
        }

        public function store(){
            $s = $this->user->create(Input::all());

            if($s->isSaved()){
                return Redirect::route('user.profile')
                ->with('flash_notice', 'Compte créé');
            }

            return Redirect::route('user.register')
                ->withInput()
                ->withErrors($s->errors());
        }

    }