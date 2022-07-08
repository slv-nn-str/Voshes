<?php
    include('header.php');
?>

<?php
    $search_con = new mysqli("localhost",'root','','voshes');
    if (isset($_POST['search'])) {
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $sql = "select * from user_info where first_name = '$fname' and last_name = '$lname' and position = 'dean' and status = 'normal' ";
        $result = $search_con->query($sql);
    }
    else{
        $sql = "select * from user_info where position = 'dean' and status = 'normal' order by user_id";
        $result = $search_con -> query($sql);
    }
?>
        
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark" style="font-family: ABeeZee, sans-serif;color: rgb(29,29,31);margin-bottom: -5px;"><strong>Dean Section</strong></h3>
                    </div>
                </div>
                <div class="row" style="margin-left: 0px;margin-right: 0px;padding-top: 7px;">
                    <div class="input-group container" >
                        <button class="btn btn-success" data-toggle="modal" data-target="#modal1" type="button" >Add Dean</button>
                        <div class="col">
                            <form id="form1" action="admin-users-dean.php" method="post">
                                <div class="input-group w-50">
                                    <input class="form-control" name="first_name" type="text"placeholder="First Name" required="">
                                    <input class="form-control" name="last_name" type="text"placeholder="Last Name" required="">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit" name="search" form="form1"><i class="fa fa-search" ></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    
                    
                </div>
                <hr style="color: rgb(62,62,64);">
                <table class="table text-center table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>User ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Position</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            
                            
                            if ($result -> num_rows > 0 ) {
                                while ($row = $result -> fetch_assoc()) {
                                    echo "<form action='save.php' method='post' ><tr><td><input type='text' style='background-color:#f2faff;border:none;' name='id' value='" . $row['user_id'] . "' class='form-control'></td><td><input type='text' style='background-color:#f2faff;border:none;' name='fname' value='" . $row['first_name'] . "' class='form-control'></td><td><input type='text' style='background-color:#f2faff;border:none;' name='lname' value='" . $row['last_name'] . "' class='form-control'></td><td><input type='text' style='background-color:#f2faff;border:none;' name='position' value='" . $row['position'] . "' class='form-control'></td><td><input type='text' style='background-color:#f2faff;border:none;' name='email' value='" . $row['email'] . "' class='form-control'></td><td><input type='submit' name='edit_dean' class='btn btn-primary' value='SAVE'><input type='submit' name='delete_dean' class='btn btn-danger' value='DELETE'></td></tr></form>";
                                }
                            }
                            else{
                                echo '<button id="btn" hidden onclick = "display()"></button>';
                            }
                        ?>

                    </tbody>
                </table>
            </div>
            <footer></footer>
            <footer class="bg-white sticky-footer" style="background: rgb(242,250,255);height: 34.0px;padding-top: 12px;padding-bottom: 12px;">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © VOSHES 2021</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <form action="insert_dean.php" method="post">
            <div class="modal fade" role="dialog" tabindex="-1" id="modal1" style="border-radius: 0px;">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background: rgb(220,228,246);"><img class="img-fluid" style="margin-right: 12px;width: 12%;" src="assets/img/col.png">
                            <h4 class="modal-title" style="padding-right: 7px;font-family: ABeeZee, sans-serif;color: rgb(61,62,65);padding-top: 11px;"><strong>User Creation Details</strong></h4><span class="badge badge-dark" style="margin-top: 11px;">New</span><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body" style="background: #fbfafa;">
                            <div class="form-group">
                                <h6 style="color: rgb(0,27,234);margin-bottom: 3px;"><strong>First Name :</strong></h6><input class="form-control" type="text" placeholder="Enter Name" style="width: 100%;height: 27px;border-color: rgba(171,144,144,0.11);background: rgb(242,234,234);border-radius: 10px;color: rgb(0,0,0);margin-bottom: 14px;" required="" minlength="2" name="firstname">
                            </div>
                            <div class="form-group">
                                <h6 style="color: rgb(0,27,234);margin-bottom: 3px;"><strong>Last Name :</strong></h6><input class="form-control" type="text" placeholder="Enter Name" style="width: 100%;height: 27px;border-color: rgba(171,144,144,0.11);background: rgb(242,234,234);border-radius: 10px;color: rgb(0,0,0);margin-bottom: 14px;" required="" minlength="2" name="lastname">
                            </div>
                            <div class="form-group">
                                <h6 style="color: rgb(0,27,234);margin-bottom: 3px;"><strong>ID </strong>:</h6><input class="form-control" type="number" min="0" required="" style="width: 100%;height: 27px;margin-bottom: 14px;background: rgb(242,234,234);border-radius: 10px;border-color: rgba(171,144,144,0.11);" placeholder="Enter ID Number" name="id">
                            </div>
                            <div class="form-group">
                                <h6 style="color: rgb(0,27,234);margin-bottom: 3px;"><strong>Position </strong>:</h6><input class="form-control" type="text" placeholder="Enter Position" style="width: 100%;height: 27px;border-color: rgba(171,144,144,0.11);background: rgb(242,234,234);border-radius: 10px;color: rgb(0,0,0);margin-bottom: 14px;" required="" minlength="2" name="position" value="dean">
                            </div>
                            <div class="form-group">
                                <h6 style="color: rgb(0,27,234);margin-bottom: 3px;"><strong>Email </strong>:</h6><input class="form-control" type="email" style="width: 100%;height: 27px;margin-bottom: 14px;background: rgb(242,234,234);border-color: rgba(171,144,144,0.11);border-radius: 10px;" placeholder="Enter Email" required="" minlength="3" name="email">
                            </div>
                            <div class="form-group">
                                <h6 style="color: rgb(0,27,234);margin-bottom: 3px;"><strong>Password </strong>:</h6><input class="form-control" type="password" style="width: 100%;height: 27px;border-radius: 10px;border-color: rgba(171,144,144,0.11);background: rgb(242,234,234);" placeholder="Enter Password" id="pass" required="" minlength="8" name="password">
                            </div>
                            <div class="form-group">
                                <h6 style="color: rgb(0,27,234);margin-bottom: 3px;"><strong>Confirm Password </strong>:</h6><input class="form-control" type="password" style="width: 100%;height: 27px;border-radius: 10px;border-color: rgba(171,144,144,0.11);background: rgb(242,234,234);" placeholder="Enter Password" required="" minlength="8" name="confirm_password" id="confirm_pass" onchange="validate()">
                            </div>
                        </div>
                        <div class="modal-footer" style="width: 100%;background: rgb(220,228,246);">
                            <div class="form-group"><button class="btn btn-danger" type="button" data-dismiss="modal" style="margin-right: 11px;">Close</button><button class="btn btn-success" type="submit" name="dean" style="background: rgb(46,169,80);">Save</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div><span class="d-none d-lg-inline mr-2 text-gray-600 small">Salve Austria</span>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
    document.getElementById('btn').click();
    function display(){
       Swal.fire(
            'Oops!',
            '0 results found!',
            'info'
        ) 
    }

    function validate(){
        let x = document.getElementById('pass').value;
        let y = document.getElementById('confirm_pass').value;
        if(x == y){
            document.getElementById('pass').classList.remove('border-danger');
            document.getElementById('confirm_pass').classList.remove('border-danger');
        }
        else{
            Swal.fire(
              'Oops!',
              'Password Mismatch',
              'error'
            )
            document.getElementById('pass').value = null;
            document.getElementById('confirm_pass').value = null;
            document.getElementById('pass').classList.add('border-danger');
            document.getElementById('confirm_pass').classList.add('border-danger');
        }
        
    }

</script>
<?php
    include('footer.php');
?>