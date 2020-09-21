<?php
	session_start();
	session_destroy();
	if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])){
		$email = $COOKIE['email'];
		$pass  = $COOKIE['pass'];
		setcookie('email', $email,time()-1);
		setcookie('pass', $pass, time()-1);
	}
	echo "You succesfully logout. click here to <a href= 'login.php'>login again</a>";
?>