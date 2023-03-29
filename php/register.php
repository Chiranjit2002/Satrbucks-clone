<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

// -------------------------------------------------------------------------------
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	  }
	  
	  $sql = "INSERT INTO users (username, email, password,v1,v2,v3,v4,v5,v6,v7,v8,v9)
	  VALUES ('$username', '$email', '$password',0,0,0,0,0,0,0,0,0)";
	 
	  
	  if ($conn->multi_query($sql) === TRUE) {
		echo "New records created successfully";
			?>
		<script>
				alert("Registration Completed");
				window.location.href='../html/home.html';
				</script>
				<?php
	  } else {
		?>
		<script>
				alert("Email already Registered");
				window.location.href='../php/index.php';
				</script>
				<?php
	  }
// ----------------------------------------------------------------------------------

$conn->close();
	}
?>