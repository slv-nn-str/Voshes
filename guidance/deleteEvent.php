<?php
	$date = $_POST['date'];
	$name = $_POST['name'];
	$desc = $_POST['description'];
	session_start();
	$id = $_SESSION['user_id'];

	if (isset($_POST['insert'])) {
		
		$con = mysqli_connect('localhost','root','','voshes');	
		$query = "update user_events set user_id = '$id', event_name = '$name', description = '$desc', date = '$date' where user_id = $id and date = '$date'";
		$filter_result = mysqli_query($con, $query);

		if ($filter_result) {
			echo "<button hidden id='btn' onclick='insert_btn()'>f</button>";
		}

	}
	elseif(isset($_POST['delete'])){
		$con = mysqli_connect('localhost','root','','voshes');	
		$query = "delete from user_events where user_id = $id and date = '$date'";
		$filter_result = mysqli_query($con, $query);

		if ($filter_result) {
			echo "<button hidden id='btn' onclick='delete_btn()'>f</button>";
		}
	}
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
	document.getElementById('btn').click();

	function insert_btn(){
		Swal.fire(
		  'Sucess!',
		  'Event Successfully Updated',
		  'success'
		).then(function(){
			window.location.replace('guidance-calendar.php');
		});
	}

	function delete_btn(){
		Swal.fire(
		  'Sucess!',
		  'Event Successfully Deleted',
		  'success'
		).then(function(){
			window.location.replace('guidance-calendar.php');
		});
	}

	
</script>