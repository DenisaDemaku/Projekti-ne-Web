<?php
class LoginCheck {

public function isLogin(){
	if (isset($_SESSION['user_id'])) {
		return true;
	}else{
		return false;
	}
}

}
