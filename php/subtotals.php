<?php 

include ('config.php');



error_reporting(0);

session_start();

// if (isset($_SESSION['username'])) {
//     header("Location: index.php");
// }

if (isset($_POST['submit'])) {
    $user = $_POST['user'];
	$vc1 = $_POST['VCB1'];
    $vc2 = $_POST['VCB2'];
    $vc3 = $_POST['VCB3'];
    $vc4 = $_POST['VCB4'];
    $vc5 = $_POST['VCB5'];
    $vc6 = $_POST['VCB6'];
    $vc7 = $_POST['VCB7'];
    $vc8 = $_POST['VCB8'];
    $vc9 = $_POST['VCB9'];

    if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	  }
	  
	  $sql = "UPDATE users SET ('v1','v2','v3','v4','v5','v6','v7','v8','v9') VALUES ('$vc1','$vc2',$vc3','$vc4','$vc5','$vc6','$vc7','$vc8','$vc9') WHERE username = $user ";
	 
	  
	  if (mysqli_query($conn,$sql)) {
		echo "New records created successfully";
		
		echo '<script>alert("Welcome to Geeks for Geeks")</script>';
			
				
	  } else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	  }
// ----------------------------------------------------------------------------------
	}
// $conn->close();
	
?>