<?php

	$con = new mysqli('localhost','root','','voshes');

	if ($con->connect_error) {
		die("Connection Error : " . $con->$connect_error);
	}

	session_start();
	

	if(isset($_POST['student_pass'])){
		$id = $_SESSION['user_id'];
		$sql = "select password from user_info where user_id = $id";
		$result = $con->query($sql);
		$row = $result->fetch_assoc();

		$pass1 = $row['password'];

		$pass2 =  $_POST['old_password'];
		$new_pass = $_POST['new_password'];
		if($pass1 == $pass2){
			
			$sql2 = "update user_info set password='$new_pass' where user_id = $id";
			$result2 = $con->query($sql2);
			if ($result2) {
				echo "<button id='btn' hidden onclick='change_success()'>f</button>";
			}
			
			
		}
		else{
			echo '<button id="btn" onclick="student_unsuccess()" hidden>f</button>';
		}
	}

	if(isset($_POST['dean_pass'])){
		$id = $_SESSION['user_id'];
		$sql = "select password from user_info where user_id = $id";
		$result = $con->query($sql);
		$row = $result->fetch_assoc();

		$pass1 = $row['password'];

		$pass2 =  $_POST['old_password'];
		$new_pass = $_POST['new_password'];
		if($pass1 == $pass2){
			
			$sql2 = "update user_info set password='$new_pass' where user_id = $id";
			$result2 = $con->query($sql2);
			if ($result2) {
				echo "<button id='btn' hidden onclick='dean_success()'>f</button>";
			}
			
			
		}
		else{
			echo '<button id="btn" onclick="dean_unsuccess()" hidden>f</button>';
		}
	}
	if(isset($_POST['guidance_pass'])){
		$id = $_SESSION['user_id'];
		$sql = "select password from user_info where user_id = $id";
		$result = $con->query($sql);
		$row = $result->fetch_assoc();

		$pass1 = $row['password'];

		$pass2 =  $_POST['old_password'];
		$new_pass = $_POST['new_password'];
		if($pass1 == $pass2){
			
			$sql2 = "update user_info set password='$new_pass' where user_id = $id";
			$result2 = $con->query($sql2);
			if ($result2) {
				echo "<button id='btn' hidden onclick='dean_success()'>f</button>";
			}
			
			
		}
		else{
			echo '<button id="btn" onclick="dean_unsuccess()" hidden>f</button>';
		}
	}

?>
	

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script type="text/javascript">
	document.getElementById('btn').click();

    function change_success(){
        Swal.fire({
            icon: 'success',
            title: 'Successful',
            text: 'Password updated!'
        }).then(function(){
        	window.location.replace('index.html');
        })
    }
    function student_unsuccess(){
        Swal.fire({
            icon: 'error',
            title: 'Oops',
            text: 'Old password incorrect!'
        }).then(function(){
        	window.location.replace('student/student-change-pass.php');
        })
    }
    function dean_success(){
        Swal.fire({
            icon: 'success',
            title: 'Successful',
            text: 'Password updated!'
        }).then(function(){
        	window.location.replace('index.html');
        })
    }
    function dean_unsuccess(){
        Swal.fire({
            icon: 'error',
            title: 'Oops',
            text: 'Old password incorrect!'
        }).then(function(){
        	window.location.replace('student/student-change-pass.php');
        })
    }

</script>