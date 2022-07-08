<?php
	$con = new mysqli('localhost','root','','voshes');

	if (isset($_POST['submit'])) {
		
		$id = $_POST['id'];
		$fname = $_POST['first_name'];
		$lname = $_POST['last_name'];
		$username = $_POST['id'];
		$password = $_POST['password'];
		$position = 'student';
		$email = $_POST['email'];

		$query = "insert into user_info(user_ID,first_name,last_name,username,password,position,email) 
				  value('$id', '$fname', '$lname', '$username', '$password', '$position', '$email')";

		$run = $con->query($query);
		
		if ($run) {
			echo "<button hidden id='btn' onclick='success()'>f</button>";
		}
	}	
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
	document.getElementById('btn').click();

	function success(){
		Swal.fire(
		  'Sucess!',
		  'Account Created',
		  'success'
		).then(function(){
			window.location.replace('index.html');
		});
	}
</script>