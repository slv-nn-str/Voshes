<?php
	$con = mysqli_connect('localhost','root','','voshes');

	if (isset($_POST['submit'])) {
		
		$id = $_POST['id'];
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$username = $_POST['id'];
		$password = $_POST['password'];
		$position = $_POST['position'];
		$email = $_POST['email'];

		$query = "insert into user_info(user_ID,first_name,last_name,username,password,position,email) 
				  value('$id', '$fname', '$lname', '$username', '$password', '$position', '$email' )";

		$run = mysqli_query($con,$query) or die(mysqli_error());
		
		if ($run) {
			echo "<script>alert('Form Submitted'); location = 'admin-users-guidance.php'</script>";
		}
		else{
			echo "<script>alert('Form Not Submitted'); location = 'admin-users-guidance.php'</script>";
		}

	}	
?>