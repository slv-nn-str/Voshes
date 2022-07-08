<?php

	$con = new mysqli('localhost','root','','voshes');

	if ($con->connect_error) {
		die("Connection Error : " . $con->connect_error);
	}

	if (isset($_POST['student_dean_message'])) {
		session_start();

		$msg = $_POST['message'];
		$ctgry = 'dean';
		date_default_timezone_set("Asia/Manila");
		$date = date("y/m/d");
		$time = date("H:i:s");
		$id = $_SESSION['user_id'];
		$sql = "insert into user_post(post_ID, message, category, dated_post, post_time) values($id, '$msg', '$ctgry','$date', '$time')";
		$result = $con->query($sql);

		if ($result) {
			echo "<button hidden id='btn' onclick='student_dean_post()'>f</button>";
		}
	}
	if (isset($_POST['student_guidance_message'])) {
		session_start();

		$msg = $_POST['message'];
		$ctgry = 'guidance';
		date_default_timezone_set("Asia/Manila");
		$date = date("y/m/d");
		$time = date("H:i:s");
		$id = $_SESSION['user_id'];
		$sql = "insert into user_post(post_ID, message, category, dated_post, post_time) values($id, '$msg', '$ctgry','$date', '$time')";
		$result = $con->query($sql);

		if ($result) {
			echo "<button hidden id='btn' onclick='student_guidance_post()'>f</button>";
		}
	}
	if (isset($_POST['announcement_reply'])) {
		session_start();

		$msg = $_POST['message'];
		$ctgry = 'guidance';
		date_default_timezone_set("Asia/Manila");
		$date = date("y/m/d");
		$time = date("H:i:s");
		$id = $_SESSION['user_id'];
		$sql = "insert into user_post(post_ID, message, category, dated_post, post_time) values($id, '$msg', '$ctgry','$date', '$time')";
		$result = $con->query($sql);

		if ($result) {
			echo "<button hidden id='btn' onclick='student_guidance_post()'>f</button>";
		}
	}
	if (isset($_POST['dean_announcement_message'])) {
		session_start();

		$msg = $_POST['message'];
		$ctgry = 'announcement';
		date_default_timezone_set("Asia/Manila");
		$date = date("y/m/d");
		$time = date("H:i:s");
		$id = $_SESSION['user_id'];
		$sql = "insert into user_post(post_ID, message, category, dated_post, post_time) values($id, '$msg', '$ctgry','$date', '$time')";
		$result = $con->query($sql);

		if ($result) {
			echo "<button hidden id='btn' onclick='dean_announcement_post()'>f</button>";
		}
	}
	if (isset($_POST['dean_message'])) {
		session_start();

		$msg = $_POST['message'];
		$ctgry = 'announcement';
		date_default_timezone_set("Asia/Manila");
		$date = date("y/m/d");
		$time = date("H:i:s");
		$id = $_SESSION['user_id'];
		$sql = "insert into user_post(post_ID, message, category, dated_post, post_time) values($id, '$msg', '$ctgry','$date', '$time')";
		$result = $con->query($sql);

		if ($result) {
			echo "<button hidden id='btn' onclick='dean_message()'>f</button>";
		}
	}
	if (isset($_POST['guidance_announcement_message'])) {
		session_start();

		$msg = $_POST['message'];
		$ctgry = 'announcement';
		
		date_default_timezone_set("Asia/Manila");
		$date = date("y/m/d");
		$time = date("H:i:s");
		$id = $_SESSION['user_id'];
		$sql = "insert into user_post(post_ID, message, category, dated_post, post_time) values($id, '$msg', '$ctgry','$date', '$time')";
		$result = $con->query($sql);

		if ($result) {
			echo "<button hidden id='btn' onclick='guidance_announcement_message()'>f</button>";
		}
	}
	if (isset($_POST['admin_announcement_message'])) {
		session_start();

		$msg = $_POST['message'];
		$ctgry = 'announcement';
		date_default_timezone_set("Asia/Manila");
		$date = date("y/m/d");
		$time = date("H:i:s");
		$id = $_SESSION['user_id'];
		$sql = "insert into user_post(post_ID, message, category, dated_post, post_time) values($id, '$msg', '$ctgry','$date', '$time')";
		$result = $con->query($sql);

		if ($result) {
			echo "<button hidden id='btn' onclick='admin_announcement_message()'>f</button>";
		}
	}

?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">

	document.getElementById('btn').click();

	function student_dean_post(){
		Swal.fire(
		  'Sucess!',
		  'Message Posted',
		  'success'
		).then(function(){
			window.location.replace('student/student-dean-section.php');
		});
	}

	function dean_announcement_post(){
		Swal.fire(
		  'Sucess!',
		  'Message Posted',
		  'success'
		).then(function(){
			window.location.replace('dean/index.php');
		});
	}

	function student_guidance_post(){
		Swal.fire(
		  'Success!',
		  'Message Posted',
		  'success'
		).then(function(){
			window.location.replace('student/student-guidance-section.php');
		});
	}

	function dean_message(){
		Swal.fire(
		  'Success!',
		  'Message Posted',
		  'success'
		).then(function(){
			window.location.replace('dean/dean-student-lounge.php');
		});
	}
	function guidance_announcement_message(){
		Swal.fire(
		  'Success!',
		  'Message Posted',
		  'success'
		).then(function(){
			window.location.replace('guidance/index.php');
		});
	}
	function admin_announcement_message(){
		Swal.fire(
		  'Success!',
		  'Message Posted',
		  'success'
		).then(function(){
			window.location.replace('admin/index.php');
		});
	}


</script>