<?php
$user_id=$_POST["username"];
$psd=$_POST["password"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname="project";

// Create connection
$con = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

 session_start();
 	
   $query = "SELECT * FROM register where '$user_id' = user_id  AND '$psd' = psd"; 
   $result = $con->query($query);	
   $row=mysqli_fetch_array($result);
            if($row)
            {
                $password=$row['psd'];
                $_SESSION['id'] = $row['user_id'];
            }
            if($password==$psd)
            {
                redirect('main1.html');

            }
            else 
                echo "INVALID PASSWORD";
                // redirect('projectd.html');

	$con->close();


    function redirect($url, $statusCode = 303)
	{
	   header('Location: ' . $url, true, $statusCode);
	   die();
	}

?>
