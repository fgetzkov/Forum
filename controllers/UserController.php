<?php

 class UserController extends BaseController {

    public function login() {
        $user = new UserModel();
        if(isset($_POST['Submit'])) {
            $Email = htmlentities(trim($_POST['Email']));
            $Password = md5(trim($_POST['Password']));
            $user = $user->userValidation($Email,$Password);
            if($user) {
                $_SESSION['user'] = $user;
                $this->redirect('Home', 'index');
            }
            else{
                //TODO : ERROR
            }

    }
}

    public function logout()
    {
        session_destroy();
        $this->redirect('Home', 'index');
    }
     public function register()
    {
    	$user = new UserModel();
    	if(isset($_POST['Submit'])) {
    		$Email = htmlentities(trim($_POST['Email']));
    		$Password = md5(trim($_POST['Password']));
            $captcha = $_POST['g-recaptcha-response'];
            $captcha_response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LetpgYTAAAAAErKZNX-_vAyQLtvZn0zk1YvIGTN&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
            if(!$user->exist($Email) && $captcha_response['success']==true) {
    			$user->create($Email, $Password);
                $this->redirect('User', 'login');
    		}
    		else{
    			//TODO : ERROR
    		}
    	}
    }
}
