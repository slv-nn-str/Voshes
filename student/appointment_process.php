<?php
	$con = new mysqli('localhost', 'root','','voshes');
	if($con->connect_error){
		die("Connection Error : " . $con->connect_error);
	}
	session_start();

	if (isset($_POST['btn_submit'])) {
		if(!empty($_POST['date']) and !empty($_POST['counselor'])){
			
			$user = $_SESSION['user_id'];
			$date = $_POST['date'];
			$counselor = $_POST['counselor'];
			$_SESSION['appointment_date'] = $date;
			$_SESSION['appointment_counselor'] = $counselor;
			
			
			$sql = "select * from user_appointment where appointment_date = '$date' and counselor_id = '$counselor' and appointment_time = '09:00' ";
			$result = $con->query($sql);
			if($result->num_rows < 1){
				$_SESSION['t1'] = "false";
			}
			else{
				$_SESSION['t1'] = "true";
			}

			$sql = "select * from user_appointment where appointment_date = '$date' and counselor_id = '$counselor' and appointment_time = '10:30' ";
			$result = $con->query($sql);
			if($result->num_rows < 1){
				$_SESSION['t2'] = "false";
			}
			else{
				$_SESSION['t2'] = "true";
			}

			$sql = "select * from user_appointment where appointment_date = '$date' and counselor_id = '$counselor' and appointment_time = '13:00' ";
			$result = $con->query($sql);
			if($result->num_rows < 1){
				$_SESSION['t3'] = "false";
			}
			else{
				$_SESSION['t3'] = "true";
			}

			$sql = "select * from user_appointment where appointment_date = '$date' and counselor_id = '$counselor' and appointment_time = '14:30'";
			$result = $con->query($sql);
			if($result->num_rows < 1){
				$_SESSION['t4'] = "false";
			}
			else{
				$_SESSION['t4'] = "true";
			}
		}
		echo "<script type='text/javascript'> window.location.replace('student-appointment.php');</script>";

	}
	else{

		$date = $_POST['date'];
		$time = $_POST['time'];
		$counselor = $_POST['counselor'];
		$user = $_SESSION['user_id'];

		$sql = "insert into user_appointment(user_id,appointment_date,counselor_id,appointment_time) values('$user','$date','$counselor','$time')";

		$result = $con->query($sql);

		if($result){
			$_SESSION['appointment_time'] = null;
			$_SESSION['appointment_date'] = null;
			$_SESSION['appointment_counselor'] = null;

			echo '<button id="btn" onclick="success()" hidden>f</button>';
		}
	}
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script type="text/javascript">
	
	document.getElementById('btn').click();

    function success(){
        Swal.fire({
            icon: 'success',
            title: 'Successful',
            text: 'Appointment Scheduled'
        }).then(function(){
        	window.location.replace('student-appointment.php');
        })
    }
    

</script>