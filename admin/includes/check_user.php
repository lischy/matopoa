<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
	$myname = $_SESSION['name'];
	
	$myemail = $_SESSION['email'];
	

	
		
	}else{
	header("location:../../?rp=9135");	
	}
}else{
	header("location:../?rp=9422");
}

?>