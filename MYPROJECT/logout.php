<?php
	session_start();
	function redirect($url, $statusCode = 303)
    {
        header('Location: ' . $url, true, $statusCode);
        die();
    }
	unset($_SESSION['user_id']);
	session_destroy();

	redirect("projectd.html");
	exit;
?>