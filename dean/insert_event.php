<?php
	$con = mysqli_connect('localhost','root','','voshes');

	if (isset($_POST['submit'])) {
		
		session_start();
		$event_name = $_POST['event_name'];
		$description = $_POST['description'];
		$event_date	= $_POST['event_date'];
		$user_ID = $_SESSION['user_id'];
		
		$query = "insert into user_events(user_ID,event_name,description,date) 
				  value('".mysqli_real_escape_string($con, $user_ID)."','".mysqli_real_escape_string($con, $_POST['event_name'])."','".mysqli_real_escape_string($con, $description)."','$event_date)')";

		$run = mysqli_query($con,$query) or die(mysqli_error());

		if ($run) {
			echo "<button hidden id='btn' onclick='success()'>f</button>";
		}
		else{
			echo "<button hidden id='btn' onclick='fail()'>f</button>";
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
		  'Event Successfully Sent',
		  'success'
		).then(function(){
			window.location.replace('dean-calendar.php');
		});
	}

	
</script>