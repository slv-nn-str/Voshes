<?php
    if (isset($_POST['submit_pic'])) {
        session_start();
        $id = $_SESSION['user_id'];
        // path to store image
        $target = "images/".basename($_FILES['pic']['name']);

        //connect to the database
        $con = new mysqli('localhost','root','','voshes');

        //get all submitted data from form

        $image = $_FILES['pic']['name'];
        
        $sql = "update user_info set profile_pic = '$image' where user_id = '$id'";
        $result = $con->query($sql);

        if($result){
            if (move_uploaded_file($_FILES['pic']['tmp_name'], $target)) {
                echo '<button id="btn" onclick="success()" hidden>f</button>';
            }
            else{
                echo '<button id="btn" onclick="unsuccess()" hidden>f</button>';
            }
        }
    }
    if (isset($_POST['dean_pic'])) {
        session_start();
        $id = $_SESSION['user_id'];
        // path to store image
        $target = "images/".basename($_FILES['pic']['name']);

        //connect to the database
        $con = new mysqli('localhost','root','','voshes');

        //get all submitted data from form

        $image = $_FILES['pic']['name'];
        
        $sql = "update user_info set profile_pic = '$image' where user_id = '$id'";
        $result = $con->query($sql);

        if($result){
            if (move_uploaded_file($_FILES['pic']['tmp_name'], $target)) {
                echo '<button id="btn" onclick="dean_success()" hidden>f</button>';
            }
            else{
                echo '<button id="btn" onclick="dean_unsuccess()" hidden>f</button>';
            }
        }
    }
    if (isset($_POST['guidance_pic'])) {
        session_start();
        $id = $_SESSION['user_id'];
        // path to store image
        $target = "images/".basename($_FILES['pic']['name']);

        //connect to the database
        $con = new mysqli('localhost','root','','voshes');

        //get all submitted data from form

        $image = $_FILES['pic']['name'];
        
        $sql = "update user_info set profile_pic = '$image' where user_id = '$id'";
        $result = $con->query($sql);

        if($result){
            if (move_uploaded_file($_FILES['pic']['tmp_name'], $target)) {
                echo '<button id="btn" onclick="guidance_success()" hidden>f</button>';
            }
            else{
                echo '<button id="btn" onclick="guidance_unsuccess()" hidden>f</button>';
            }
        }
    }
    if (isset($_POST['admin_pic'])) {
        session_start();
        $id = $_SESSION['user_id'];
        // path to store image
        $target = "images/".basename($_FILES['pic']['name']);

        //connect to the database
        $con = new mysqli('localhost','root','','voshes');

        //get all submitted data from form

        $image = $_FILES['pic']['name'];
        
        $sql = "update user_info set profile_pic = '$image' where user_id = '$id'";
        $result = $con->query($sql);

        if($result){
            if (move_uploaded_file($_FILES['pic']['tmp_name'], $target)) {
                echo '<button id="btn" onclick="admin_success()" hidden>f</button>';
            }
            else{
                echo '<button id="btn" onclick="admin_unsuccess()" hidden>f</button>';
            }
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
            text: 'Profile Updated!'
        }).then(function(){
            window.location.replace('student/student-change-pass.php');
        })
    }

    function unsuccess(){
        Swal.fire({
            icon: 'error',
            title: 'Problem Occured',
            text: 'Profile not saved!'
        }).then(function(){
            window.location.replace('student/student-change-pass.php');
        })
    }

    function dean_success(){
        Swal.fire({
            icon: 'success',
            title: 'Successful',
            text: 'Profile Updated!'
        }).then(function(){
            window.location.replace('dean/dean-change-pass.php');
        })
    }

    function dean_unsuccess(){
        Swal.fire({
            icon: 'error',
            title: 'Problem Occured',
            text: 'Profile not saved!'
        }).then(function(){
            window.location.replace('dean/dean-change-pass.php');
        })
    }
    function guidance_success(){
        Swal.fire({
            icon: 'success',
            title: 'Successful',
            text: 'Profile Updated!'
        }).then(function(){
            window.location.replace('guidance/guidance-change-pass.php');
        })
    }

    function guidance_unsuccess(){
        Swal.fire({
            icon: 'error',
            title: 'Problem Occured',
            text: 'Profile not saved!'
        }).then(function(){
            window.location.replace('guidance/guidance-change-pass.php');
        })
    }
    function admin_success(){
        Swal.fire({
            icon: 'success',
            title: 'Successful',
            text: 'Profile Updated!'
        }).then(function(){
            window.location.replace('admin/admin-change-pass.php');
        })
    }

    function admin_unsuccess(){
        Swal.fire({
            icon: 'error',
            title: 'Problem Occured',
            text: 'Profile not saved!'
        }).then(function(){
            window.location.replace('admin/admin-change-pass.php');
        })
    }

</script>