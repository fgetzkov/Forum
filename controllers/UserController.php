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
    	$user = new UserModel();
    	if(isset($_POST['Submit'])) {
    		$Email = htmlentities(trim($_POST['Email']));
    		$Password = md5(trim($_POST['Password']));
    		if(!$user->exist($Email)) {
    			$user->create($Email, $Password);
    		}
    		else{
    			//TODO : ERROR
    		}
    	}
    }
}
