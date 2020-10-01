
<?php
if(isset($_GET['Submit'])){
  $username = $_GET['query2'];
  $hash = "dd3913317703e111bd00e4c9a2399bd7e67d1ee2d18e1ae6996a8f3213db98d0";

  // Config variables. Consult http://api.textlocal.in/docs for more info.
  $test = "0";

  // Data for text message. This is the text message data.
  $sender = "TXTLCL"; // This is who the message appears to be from.
  $numbers = $_GET['query3']; // A single number or a comma-seperated list of numbers
  $message = "This is a test message from the PHP API script.";
  // 612 chars or less
  // A single number or a comma-seperated list of numbers
  $message = urlencode($message);
  $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
  $ch = curl_init('http://api.textlocal.in/send/?');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch); // This is the result from the API
  curl_close($ch);
  echo($result);
}
## connect mysql server
	$mysqli = new mysqli('localhost', 'root', '', 'simple-website');
	# check connection
	if ($mysqli->connect_errno) {
		echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
		exit();
	}
## query database
	# prepare data for insertion
	$query	= $_GET['query'];
	$query2	= $_GET['query2'];
	$query3	= $_GET['query3'];
	$query4	= $_GET['query4'];
	$query5	= $_GET['query5'];
	# check if username and email exist else insert
		$sql = "INSERT  INTO `OLA` (`userid`,`mobile`,`city`,`date`,`address`) 	VALUES ('{$query2}',{$query3},'{$query}','{$query4}','{$query5}')";

		if ($mysqli->query($sql)) {
			//echo "New Record has id ".$mysqli->insert_id;
			echo "<script language=\"JavaScript\">\n";
echo "alert('Booked Successfully! You Will get a call on the pickup date');\n";
echo "window.location='Indian Bank.htm'";
echo "</script>";
		} else {
			echo "<p>MySQL error no {$mysqli->errno} : {$mysqli->error}</p>";
			exit();
		}


    // Close connection

    mysqli_close($link);

    ?>






<?php
include("footer.php");
?>


