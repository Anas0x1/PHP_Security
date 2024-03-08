<?php

class User {

public $user_id;
public $user_name;
public $is_admin;

public function __construct($user_id, $user_name, $is_admin)
{
	$this->user_id = $user_id;
	$this->user_name = $user_name;
	$this->is_admin = $is_admin;
}
}

$employee = new User(200, '0xanas', false);
if(!isset($_COOKIE['session'])){
	$user_serialize = serialize($employee);
	$encoded_user = base64_encode($user_serialize);
	$cookie_name = "session";
	setcookie($cookie_name, $encoded_user);
	echo "Session not set";
}

else if (isset($_COOKIE['session'])) {
	$decoded_user = urldecode(base64_decode($_COOKIE['session']));
	$user_unserialize = unserialize($decoded_user);
	if ($user_unserialize->is_admin == true){
		echo 'You are admin....';
	}
	else if ($user_unserialize->is_admin == false){
		echo 'You are normal user.';
	}
}



?>
