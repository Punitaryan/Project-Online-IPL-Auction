 
<?php
	session_start();
	function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

	$servername='localhost';
	$username='root';
	$password='';
	$dbname='project';

	$conn=new mysqli($servername,$username,$password,$dbname) or die("Connection failed");
	//check connection if we can connect to the database or not
	if($conn->connect_error)
	{
		die("Connection failed:".$conn->connect->error);
	}

	$userid=$_REQUEST["username"];
	$playername=$_REQUEST["playername"];
	$p_id=$_REQUEST["player_Id"];
	$your_amount=$_REQUEST["amount"];
    $rand=rand();


	$sql="INSERT INTO allbid VALUES('".$userid."','".$playername."','".$p_id."','".$your_amount."','".$rand."')";
	$result = $conn->query($sql);
	//$row=mysqli_fetch_array($result);
	
	//echo $sql;
	//echo(rand() . "<br>");
	//$rand=rand();
	//$sqla = " INSERT INTO allbid (random) VALUES ('".$rand."')";
    //$res = $conn->query($sqla);
	echo $rand;
	// redirect('main1.html');

	$conn->close();

?>