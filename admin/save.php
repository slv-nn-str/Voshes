<?php
	$con = new mysqli('localhost','root','','voshes');
	if ($con->connect_error) {
		die("Connection Error : " . $con->connect_error);
	}
	else{
		
		$id = $_POST['id'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$position = $_POST['position'];
		$email = $_POST['email'];

		

		if (isset($_POST['edit_dean'])) {
			$sql = "update user_info set first_name = '$fname', last_name ='$lname', email = '$email' where user_id = $id ";
			$result = $con->query($sql);
			if ($result) {
				echo '<button id="btn" hidden="btn" onclick="edit_dean()"></button>';
			}
		}
		elseif (isset($_POST['edit_student'])) {
			$sql = "update user_info set first_name = '$fname', last_name ='$lname', email = '$email' where user_id = $id ";
			$result = $con->query($sql);
			if ($result) {
				echo '<button id="btn" hidden="btn" onclick="edit_student()"></button>';
			}
		}
		elseif (isset($_POST['edit_guidance'])) {
			$sql = "update user_info set first_name = '$fname', last_name ='$lname', email = '$email' where user_id = $id ";
			$result = $con->query($sql);
			if ($result) {
				echo '<button id="btn" hidden="btn" onclick="edit_guidance()"></button>';
			}
		}
		elseif (isset($_POST['approve'])) {
			$sql = "update user_info set type = 'approved' where user_id = $id ";
			$result = $con->query($sql);
			if ($result) {
				echo '<button id="btn" hidden="btn" onclick="approve()"></button>';
			}
		}
		elseif (isset($_POST['decline'])){
			session_start();
			$_SESSION['delete_id'] = $_POST['id'];
			echo '<button id="btn" hidden="btn" onclick="decline()"></button>';
		}
		elseif(isset($_POST['delete_dean'])){
			session_start();
			$_SESSION['delete_id'] = $_POST['id'];
			echo '<button id="btn" hidden="btn" onclick="delete_dean()"></button>';
		}
		elseif(isset($_POST['delete_student'])){
			session_start();
			$_SESSION['delete_id'] = $_POST['id'];
			echo '<button id="btn" hidden="btn" onclick="delete_student()"></button>';
		}
		elseif(isset($_POST['delete_guidance'])){
			session_start();
			$_SESSION['delete_id'] = $_POST['id'];
			echo '<button id="btn" hidden="btn" onclick="delete_guidance()"></button>';
		}
	}
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
	document.getElementById('btn').click();

	function edit_dean(){
		Swal.fire(
		  'Sucess!',
		  'Table row Updated',
		  'success'
		).then(function(){
			window.location.replace('admin-users-dean.php');
		});
	}
	function approve(){
		Swal.fire(
		  'Sucess!',
		  'Table row Updated',
		  'success'
		).then(function(){
			window.location.replace('admin-users-student.php');
		});
	}
	function edit_student(){
		Swal.fire(
		  'Sucess!',
		  'Table row Updated',
		  'success'
		).then(function(){
			window.location.replace('admin-users-student.php');
		});
	}
	function edit_guidance(){
		Swal.fire(
		  'Sucess!',
		  'Table row Updated',
		  'success'
		).then(function(){
			window.location.replace('admin-users-guidance.php');
		});
	}

	function delete_dean(){
		Swal.fire({
		  title: 'Are you sure?',
		  text: "You won't be able to revert this!",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
		  if (result.isConfirmed) {
		   	window.location.replace('delete_dean.php');
		  }
		  else{
		  	window.location.replace('admin-users-dean.php');
		  }
		})
	}
	function delete_student(){
		Swal.fire({
		  title: 'Are you sure?',
		  text: "You won't be able to revert this!",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
		  if (result.isConfirmed) {
		   	window.location.replace('delete_student.php');
		  }
		  else{
		  	window.location.replace('admin-users-student.php');
		  }
		})
	}
	function delete_guidance(){
		Swal.fire({
		  title: 'Are you sure?',
		  text: "You won't be able to revert this!",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
		  if (result.isConfirmed) {
		   	window.location.replace('delete_guidance.php');
		  }
		  else{
		  	window.location.replace('admin-users-guidance.php');
		  }
		})
	}
	function decline(){
		Swal.fire({
		  title: 'Are you sure?',
		  text: "You won't be able to revert this!",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
		  if (result.isConfirmed) {
		   	window.location.replace('decline_student.php');
		  }
		  else{
		  	window.location.replace('admin-users-student.php');
		  }
		})
	}

	
</script>