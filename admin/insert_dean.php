<?php
	$con = mysqli_connect('localhost','root','','voshes');

	
		$id = $_POST['id'];
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$username = $_POST['id'];
		$password = $_POST['password'];
		$position = $_POST['position'];
		$email = $_POST['email'];


		$query = "insert into user_info(user_ID,first_name,last_name,username,password,position,email,status,type) 
				  value('$id', '$fname', '$lname', '$username', '$password', '$position', '$email', 'normal', 'approved' )";

		$run = mysqli_query($con,$query) or die(mysqli_error());
		
		if (isset($_POST['dean'])) {
			if ($run) {
				echo '<button id="btn" hidden="btn" onclick="dean_success()"></button>';
			}
		}
		elseif (isset($_POST['guidance'])) {
			if ($run) {
				echo '<button id="btn" hidden="btn" onclick="guidance_success()"></button>';
			}
		}
		elseif (isset($_POST['student'])) {
			if ($run) {
				echo '<button id="btn" hidden="btn" onclick="student_success()"></button>';
			}
		}
		
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script type="text/javascript">
	document.getElementById('btn').click();
	function dean_success(){
		Swal.fire({
			icon: 'success',
			title: 'Successful!',
			text: 'Table row inserted'
		}).then(function(){
			window.location.replace('admin-users-dean.php')
		})
	}
	function guidance_success(){
		Swal.fire({
			icon: 'success',
			title: 'Successful!',
			text: 'Table row inserted'
		}).then(function(){
			window.location.replace('admin-users-guidance.php')
		})
	}
	function student_success(){
		Swal.fire({
			icon: 'success',
			title: 'Successful!',
			text: 'Table row inserted'
		}).then(function(){
			window.location.replace('admin-users-student.php')
		})
	}
</script>
</html>