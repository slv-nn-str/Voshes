<?php
    include('header.php');
?>

        
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Profile Information</h3>
                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <form method="post" action="../upload_profile.php" enctype="multipart/form-data">
                                <div class="card mb-3">
                                    <div class="card-header"><p class="text-primary font-weight-bold">User Profile : </p></div>
                                    <div class="text-center card-body">
                                      <div class="form-group">
                                          <?php
                                                $id = $_SESSION['user_id'];
                                                $file_query = "select * from user_info where user_id = '$id'";
                                                $result = $con->query($file_query);
                                                $row = $result->fetch_assoc();
                                                echo '<img alt="" src="../images/'.$row['profile_pic'].'" class="rounded-circle img-thumbnail" id="file-preview">';
                                          ?>

                                            <input type="file" name="pic" class="d-none" id="pic" accept="image/*" onchange="showPreview(event)" required="">
                                      </div>
                                        <a class="btn btn-primary text-light" onclick="uploadFile()">Change Picture</a>
                                    </div>
                                    
                                    <input type="submit" id="submit_pic" name="guidance_pic" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-8">
                            
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 font-weight-bold">User Information</p>
                                        </div>
                                        <div class="card-body" style="padding-top: 0px;">
                                            <form action="../password_process.php" method="post">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label for="username"><strong>Username</strong></label><input class="form-control" type="text" id="username" placeholder="user.name" name="username" value="<?php echo $row['username']?>" disabled=""></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label for="email"><strong>Email Address</strong></label><input class="form-control" type="email" id="email" placeholder="user@example.com" name="email" value="<?php echo $row['email'];?>" disabled></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label for="first_name"><strong>First Name</strong></label><input class="form-control" type="text" id="first_name" placeholder="John" name="first_name" value="<?php echo $row['first_name'];?>" disabled=""></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label for="last_name"><strong>Last Name</strong></label><input class="form-control" type="text" id="last_name" placeholder="Doe" name="last_name" value="<?php echo$row['last_name'];?>" disabled=""></div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card shadow">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 font-weight-bold">Password Setting</p>
                                        </div>
                                        <div class="card-body">
                                            <form action="../password_process.php" method="post">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label for="city"><strong>Old Password</strong></label><input class="form-control" type="password" name="old_password" style="border-color: rgb(110,112,126);width: 100%;" required=""></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label for="country"><strong>New Password</strong></label><input class="form-control" type="password" id="new_password" name="new_password" style="border-color: rgb(110,112,126);width: 100%;" required=""></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label for="country"><strong>Confirm Password</strong></label>
                                                            <input class="form-control" type="password" id="confirm_password" name="confirm_password"style="border-color: rgb(110,112,126);width: 100%;" onchange="validate()" required=""></div>
                                                    </div>
                                                </div>
                                                <div class="form-group"><input type="submit" name="guidance_pass" value="Save Settings" class="btn btn-primary"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer" style="background: rgb(242,250,255);height: 34.0px;padding-top: 12px;padding-bottom: 12px;">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">

    function showPreview(event){
        if(event.target.files.length > 0){
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById('file-preview');
            preview.src = src;  
        }

    }
    function uploadFile(){
        document.getElementById('pic').click();
    }

    function validate(){
        let p1 = document.getElementById('new_password').value;
        let p2 = document.getElementById('confirm_password').value;

        if (p1 != null && p2 != null) {
            if(p1 != p2){
                Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Password mismatch'
                })
                document.getElementById('new_password').value = null;
                document.getElementById('confirm_password').value = null;

                document.getElementById('new_password').classList.add('border-danger');
                document.getElementById('confirm_password').classList.add('border-danger');
            }
            else{
                document.getElementById('new_password').classList.remove('border-danger');
                document.getElementById('confirm_password').classList.remove('border-danger');
            }
        }
    }

</script>
<?php
    include('footer.php');
?>