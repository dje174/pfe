<?php
    /**
    * 
    */
    class UserController extends BaseController
    {
        /**
        * User repository
        */
        protected $user;

        public function update($id){
            $input = array_except(Input::all(),'_method');
            $user = $this->user->find($id);
            $user->update($input);
            return Redirect::route('user.show', $id);
        }

    }