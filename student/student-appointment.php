<?php
    include('header.php')
?>
                        <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark" style="font-family: ABeeZee, sans-serif;color: rgb(29,29,31);margin-bottom: -5px;"><strong>Appointments</strong></h3>
                    </div>
                </div>
                <hr style="color: rgb(62,62,64);">
                <div class="form-group">
                    <button class="btn btn-primary" id="btn2" data-toggle="modal" data-target="#modal_appoint" style="margin-left: 3%;background: var(--purple);">Schedule New Appointment</button>
                </div>
                <div class="container">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <th>Counselor</th>
                            <th>Date</th>
                            <th>Time</th>
                        </tr>
                        
                        <?php
                            $conn = new mysqli('localhost','root','','voshes');
                            if($conn->connect_error){
                                die("Connection Error : " . $conn->connect_error);
                            }
                            $id = $_SESSION['user_id'];
                            $new_sql = "select * from user_appointment where user_id = '$id'";
                            $result = $conn->query($new_sql);

                            if ($result) {
                                
                                while ($row = $result->fetch_assoc()) {
                                    
                                    $counselor_id = $row['counselor_id'];
                                    $inner_sql = "select * from user_info where user_id = '$counselor_id'";
                                    $inner_result = $conn->query($inner_sql);
                                    $inner_row = $inner_result->fetch_assoc();

                                    echo '<tr>';
                                    echo '    <td>'.$inner_row["first_name"].' '. $inner_row["last_name"] .'</td>';
                                    echo '    <td>'.$row["appointment_date"].'</td>';
                                    echo '    <td>'.$row["appointment_time"].'</td>';
                                    echo '</tr>';
                                }
                                
                            }
                        ?>
                    </table>
                </div>
            </div>
            <footer></footer>
            <footer class="bg-white sticky-footer" style="background: rgb(242,250,255);height: 34.0px;padding-top: 12px;padding-bottom: 12px;">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © VOSHES 2021</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
        
    </div>
    <form action="appointment_process.php" method="post">
        <div class="modal fade" role="dialog" tabindex="-1" id="modal_appoint" style="border-radius: 0px;">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background: #c6a5fb;">
                        <h4 class="modal-title" style="padding-right: 7px;font-family: ABeeZee, sans-serif;color: rgb(61,62,65);"><strong>Appointment Details</strong></h4><span class="badge badge-dark">New</span><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body" style="background: #fbfafa;color: rgb(0,0,0);">
                        <div class="form-group">
                            <h6 style="color: rgb(234,14,0);margin-bottom: 3px;">Name :</h6><input class="form-control" type="text" value="<?php 
                                $con = new mysqli('localhost','root','','voshes');
                                if ($con->connect_error) {
                                    die("Connection Error : " . $con->connect_error);
                                }
                                $id = $_SESSION['user_id'];
                                $sql2 = "select * from user_info where user_id = $id";
                                $result = $con->query($sql2);
                                $row = $result->fetch_assoc();
                                echo $row['first_name'] . " " . $row['last_name'];
                                  ?>" 
                                        style="width: 100%;height: 27px;border-color: rgba(171,144,144,0.11);background: rgb(242,234,234);border-radius: 10px;color: rgb(0,0,0);margin-bottom: 14px;" required="" minlength="2">
                        </div>
                        
                            <div class="form-group">
                                <h6 style="color: rgb(234,14,0);margin-bottom: 3px;">Select a Schedule :</h6>
                                <input class="form-control" name="date" id="date" type="date" style="border-color: rgba(171,144,144,0.11);background: rgb(242,234,234);border-radius: 10px;color: rgb(4,4,4);" value="<?php $x = $_SESSION['appointment_date']; if($x != null){echo $x;}  ?>" 
                                 >
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <h6 style="color: rgb(234,14,0);margin-bottom: 3px;">Select a Counselor :</h6>
                                    <select class="form-control" id="select" name="counselor" onchange="btn_click()" >
                                        <option value="" selected hidden=""></option>
                                        <?php
                                            $con = new mysqli('localhost','root','','voshes');
                                            if ($con->connect_error) {
                                                die("Connection Error : " . $con->connect_error);
                                            }
                                            $sql = "select * from user_info where position = 'counselor'";
                                            $result = $con->query($sql);
                                            while($row = $result->fetch_assoc()){
                                                $y = $row["user_id"];
                                                $z = $_SESSION["appointment_counselor"];
                                                if($y == $z){
                                                    $value = "selected";
                                                }
                                                else{
                                                    $value = null;
                                                }

                                                echo 
                                                    '
                                                    
                                                        <option value="'.$row["user_id"].'" '.$value.'>'.$row["first_name"].' '.$row["last_name"].'</option>
                                                    ';

                                            }
                                             
                                        ?>

                                    </select>
                                    <button type="submit" hidden="" name="btn_submit" id="btn_submit"> </button>
                                </div>
                        <?php
                            echo '<div class="form-group">
                                <h6 style="color: rgb(234,14,0);margin-bottom: 3px;">Select a Time :</h6>
                                <select class="form-control" name="time">
                                                        
                                <option value=" " hidden=""></option>';

                            if ($_SESSION['t1'] == "false") {
                                echo '<option value="09:00">9:00 - 10:30</option>';
                            }
                            if ($_SESSION['t2'] == "false") {
                                echo '<option value="10:30">10:30 - 12:00</option>';
                            }
                            if ($_SESSION['t3'] == "false") {
                                echo '<option value="13:00">1:00 - 2:30</option>';
                            }
                            if ($_SESSION['t4'] == "false") {
                                echo '<option value="14:30">2:30 - 4:00</option>';
                            }    
                            echo'    
                                
                                
                                </select>
                            </div>';
                            

                        ?>
                              
                              
                                
                            
                            
                        </div>
                    </div>
                    <div class="modal-footer" style="width: 100%;background: rgb(198,165,251);">
                        <div class="form-group"><button class="btn btn-danger" type="button" data-dismiss="modal" style="margin-right: 11px;">Close</button><button class="btn btn-success" type="submit" style="background: rgb(46,169,80);">Create</button></div>
                    </div>
                   
                </div>
            </div>
        </div>
    </form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
    
    if(document.getElementById('date').value != "" || document.getElementById('select').value != ""){
        $(document).ready(function(){

            $("#modal_appoint").modal();

        });
    }
    function btn_click(){
        document.getElementById('btn_submit').click();
    }

</script>

<?php
    include('footer.php');
?>