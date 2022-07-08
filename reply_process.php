<?php

$con = new mysqli('localhost','root','','voshes');

if ($con->connect_error) {
	die("Connection Error : " . $con->connect_error);
}

	$id = $_POST['tbl_id'];
	$date = date("y/m/d");
	$msg = $_POST['message'];
	$reply_id = $_POST['post_id'];

	$sql = "insert into user_comments(post_id, reply_id, message, reply_date) values($id, $reply_id, '$msg', '$date')";
	$result = $con->query($sql);

if(isset($_POST['student_announcement_reply'])){
	

	if ($result) {
		echo "<button hidden id='btn' onclick='student_announcement_reply()'>f</button>";
	}

}

else if(isset($_POST['student_dean_reply'])){
	

	if ($result) {
		echo "<button hidden id='btn' onclick='student_dean_reply()'>f</button>";
	}

}
else if(isset($_POST['student_guidance_reply'])){
	

	if ($result) {
		echo "<button hidden id='btn' onclick='student_guidance_reply()'>f</button>";
	}

}
else if(isset($_POST['announcement_dean_reply'])){
	

	if ($result) {
		echo "<button hidden id='btn' onclick='announcement_dean_reply()'>f</button>";
	}

}
else if(isset($_POST['dean_reply'])){
	

	if ($result) {
		echo "<button hidden id='btn' onclick='dean_reply()'>f</button>";
	}

}
else if(isset($_POST['guidance_reply'])){
	

	if ($result) {
		echo "<button hidden id='btn' onclick='guidance_reply()'>f</button>";
	}

}
else if(isset($_POST['announcement_guidance_reply'])){
	

	if ($result) {
		echo "<button hidden id='btn' onclick='guidance_announcement_message()'>f</button>";
	}

}
else if(isset($_POST['announcement_admin_reply'])){
	

	if ($result) {
		echo "<button hidden id='btn' onclick='admin_announcement_message()'>f</button>";
	}

}

?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
	document.getElementById('btn').click();

	function student_announcement_reply(){
		Swal.fire(
		  'Sucess!',
		  'Reply Successfully Sent',
		  'success'
		).then(function(){
			window.location.replace('student/index.php');
		});
	}

	function student_dean_reply(){
		Swal.fire(
		  'Sucess!',
		  'Reply Successfully Sent',
		  'success'
		).then(function(){
			window.location.replace('student/student-dean-section.php');
		});
	}

	function student_guidance_reply(){
		Swal.fire(
		  'Sucess!',
		  'Reply Successfully Sent',
		  'success'
		).then(function(){
			window.location.replace('student/student-guidance-section.php');
		});
	}
	function announcement_dean_reply(){
		Swal.fire(
		  'Sucess!',
		  'Reply Successfully Sent',
		  'success'
		).then(function(){
			window.location.replace('dean/index.php');
		});
	}
	function dean_reply(){
		Swal.fire(
		  'Sucess!',
		  'Reply Successfully Sent',
		  'success'
		).then(function(){
			window.location.replace('dean/dean-student-lounge.php');
		});
	}
	function guidance_reply(){
		Swal.fire(
		  'Sucess!',
		  'Reply Successfully Sent',
		  'success'
		).then(function(){
			window.location.replace('guidance/guidance-student-lounge.php');
		});
	}
	function guidance_announcement_message(){
		Swal.fire(
		  'Sucess!',
		  'Reply Successfully Sent',
		  'success'
		).then(function(){
			window.location.replace('guidance/index.php');
		});
	}
	function admin_announcement_message(){
		Swal.fire(
		  'Sucess!',
		  'Reply Successfully Sent',
		  'success'
		).then(function(){
			window.location.replace('admin/index.php');
		});
	}

</script>