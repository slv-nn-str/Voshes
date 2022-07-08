<?php
	

	$con = new mysqli('localhost','root','','voshes');

	if($con->connect_error){
		die("Connection Failed : ". $con->connect_error);
	}

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "select * from user_info where username = '$username' and password = '$password' and type = 'approved' ";
		$result = $con->query($sql);

		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();

			session_start();
			$_SESSION['user_id'] = $row['user_id'];
			$_SESSION['appointment_date'] = null;
			$_SESSION['appointment_counselor'] = null;
			
			if ($row['position'] == 'admin') {
				echo "<button id = 'btn' hidden onclick = 'admin()'>f</button>";
			}
			elseif($row['position'] == 'counselor'){
				echo "<button id = 'btn' hidden onclick = 'counselor()'>f</button>";
			}
			elseif($row['position'] == 'dean'){
				echo "<button id = 'btn' hidden onclick = 'dean()'>f</button>";
			}
			else{
				echo "<button id = 'btn' hidden onclick = 'student()'>f</button>";
			}
		}
		else{
			echo "<button id = 'btn' hidden onclick = 'fail()'>f</button>";
		}
	}

?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
	
	document.getElementById('btn').click();

	function admin(){

		Swal.fire({
		  icon: 'success',
		  title: 'Sucessful Login',
		  text: 'Welcome!'
		}).then(function(){
			window.location.replace('admin/index.php');
		});
		
	}

	function dean(){

		Swal.fire({
		  icon: 'success',
		  title: 'Sucessful Login',
		  text: 'Welcome!'
		}).then(function(){
			window.location.replace('dean/index.php');
		});
		
	}

	function counselor(){

		Swal.fire({
		  icon: 'success',
		  title: 'Sucessful Login',
		  text: 'Welcome!'
		}).then(function(){
			window.location.replace('guidance/index.php');
		});
		
	}

	function student(){

		Swal.fire({
		  icon: 'success',
		  title: 'Sucessful Login',
		  text: 'Welcome!'
		}).then(function(){
			window.location.replace('student/index.php');
		});
		
	}

	function fail(){
		Swal.fire({
		  icon: 'error',
		  title: 'Oops',
		  text: 'Account not found!'
		}).then(function(){
			window.location.replace('index.html');
		});

	}

	
</script>