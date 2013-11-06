<?php

    class RegisterController extends BaseController {

        public function __construct(User $user){
            $this->user = $user;
        }

        public function register(){
            return View::make('user.register');
        }

        public function store(){

            $messages = array(
                'required' => '<span class="errors">Votre :attribute est vide</span>',
                'email' => '<span class="errors">Votre :attribute non valide</span>',
                'same' => '<span class="errors">Vos mots de passes doivent être identiques</span>'
            );

            $inputs = array(    'first_name' => Input::get('first_name'),
                                'name' => Input::get('name'),
                                'email' => Input::get('email'),
                                'password' => Input::get('password'));

            $rules = array(     'first_name' => 'required',
                                'name' => 'required',
                                'email' => 'required|email',
                                'password' => 'required',
                                'password2' => 'same:password');
             
            $validator = Validator::make($inputs, $rules, $messages);

            if ($validator->fails())
            {
                //dd($validator);
                return Redirect::to('register')->withErrors($validator);
            }else{
                User::create(array('first_name'=>$inputs['first_name'],'name'=>$inputs['name'],'email'=>$inputs['email'],'password'=>Hash::make($inputs['password'])));
                return Redirect::to('login');
            }

        }

    }


            /*$validator = Validator::make(
                array(  'first_name' => Input::get('first_name'),
                        'name' => Input::get('name'),
                        'email' => Input::get('email'),
                        'password' => Input::get('password')),
                array(  'first_name' => 'required',
                        'name' => 'required',
                        'email' => 'required|email',
                        'password' => 'required|confirmed'));*/

            /*if($validator->fails()){
                return Redirect::route('register')->withErrors($validator);
            }else{
                $this-> user ->create(array('first_name'=>Input::get('first_name'),'name'=>Input::get('name'),'email'=>Input::get('email'),'password'=>Hash::make(Input::get('password'))));

                return Redirect::route('login')
                ->with('flash_notice', 'Compte créé');
            }*/