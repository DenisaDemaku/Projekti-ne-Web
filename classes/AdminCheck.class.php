<?php
class AdminCheck {

public function isAdmin(){
	if ($_SESSION['user_type'] == "admin" ) {
		return true;
	}else{
		return false;
	}
}

}
