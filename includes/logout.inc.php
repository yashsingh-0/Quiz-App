<?php
if(isset('logout')){
include './session.inc.php';
include './connection.inc.php';
	session_destroy();
	session_unset();
	header("Location: ../login.php");
}

?>