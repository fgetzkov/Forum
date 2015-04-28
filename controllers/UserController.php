<?php

class UserController extends BaseController {

    public function login()
    {
    	
    }
     public function logout()
    {

    }
     public function register()
    {
    	if(isset($_POST['Submit'])) {
    		$Email = htmlentities(trim($_POST['Email']));
    		$Password = md5(trim($_POST['Password']));
    		$user = new UserModel();
    		$user->create($Email, $Password);
    	}
    }
}
