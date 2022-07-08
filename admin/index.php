<?php
    include('header.php');
?>

                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark" style="font-family: ABeeZee, sans-serif;color: rgb(29,29,31);margin-bottom: -5px;"><strong>Announcements</strong></h3>
                    </div>
                </div>
                <div class="container w-75" style="box-shadow: 0px 0px 12px rgb(133, 135, 150);border-radius: 10px; background: #b9e1f8; padding-bottom: 48px;">
                    <div class="row">
                        <div class="col-md-12">
                            <h6 style="color: rgb(18,18,18);margin-bottom: -2px;margin-top: 8px;"><strong>Write a post</strong><i class="fa fa-pencil-square-o" style="margin-left: 7px;"></i></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12" style="height: 25%;padding-left: 8px;padding-right: 8px;">
                            <form style="height: 38px;width: 100%;" action="../post_process.php" method="POST">
                                    <div class="input-group" style="height: 75.6px;">
                                        <textarea class="form-control" name="message"></textarea>
                                        <div class="input-append"><input type="submit" class="h-100 btn btn-lg btn-primary" name="admin_announcement_message" value="Post"></div>
                                    </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
                <hr style="color: rgb(62,62,64);">
                <?php
    
                                        $con = new mysqli('localhost','root','','voshes');

                                        if ($con->connect_error) {
                                            die("Connection Error : " . $con->connect_error);
                                        }
                                        $sql = "select * from user_post where category ='announcement' order by dated_post desc, post_time desc";

                                        $result = $con->query($sql);

                                        

                                        while ($row = $result->fetch_assoc()) {
                                            
                                            $id = $row['post_ID'];
                                            $sql2 = "select * from user_info where user_id = $id";
                                            $result2 = $con->query($sql2);
                                            $row2 = $result2->fetch_assoc();
                                            $pic_id = $_SESSION['user_id'];
                                            $sql_pic = "select* from user_info where user_id = '$pic_id'";
                                            $pic_result = $con->query($sql_pic);
                                            $pic_row = $pic_result->fetch_assoc();
                                            echo '
                                <div class="container w-75" style="border-radius: 10px;padding-top: 10px;padding-bottom: 10px;">
                                    <div class="card">
                                        <div class="card-body" style="background: #ede2ff;border-radius: 10px;height: 100%;padding-bottom: 37px;">
                                            <form action = "../reply_process.php" method = "POST">
                                                <div class="row">
                                                <input value="'.$row["postTbl_ID"].'" name="tbl_id" hidden>
                                                <input value=" ' . $_SESSION["user_id"] . ' " name="post_id" hidden>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h5 style="margin-top: 10px;font-family: ABeeZee, sans-serif;color: rgb(46,46,48);"><strong> '. $row2["first_name"] . ' ' . $row2["last_name"] . ' </strong></h5>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <h6 style="margin-top: -7px;font-size: 12px;">' . $row["post_time"] . '</h6>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <p style="font-family: Nunito, sans-serif;color: rgb(11,11,11);margin-bottom: 7px;text-align: justify;">' . $row["message"] . '<br></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr style="border-color: rgb(221,173,152);">
                                                <div class="row" style="height: 33%;margin-top: -8px;">
                                                    <div class="col-1 col-md-1" style="height: 25%;margin-bottom: 0px;width: 25%;"><img class="rounded-circle img-fluid" alt="" src="../images/'.$pic_row['profile_pic'].'" style="width: 100px;margin-top: 8px;margin-bottom: 0px;margin-left: 0px;max-width: 150%;"></div>
                                                    <div class="col col-md-11" style="height: 25%;padding-left: 8px;padding-right: 8px;">
                                                        
                                                            <div class="input-group " style="margin-top: 15px;">
                                                                <input class="form-control" type="text"placeholder="Write a reply..." name="message">
                                                                <div class="input-group-append">
                                                                    <input type="submit" class="btn btn-primary " value="SEND" name="announcement_admin_reply">
                                                                </div>
                                                            </div>
                                                     
                                                    </div>
                                                    <div class="container-fluid text-center text-light"><a class="btn btn-primary w-25" data-toggle="collapse" data-target="#a'.$row["postTbl_ID"].'">View Reply</a></div>
                                                    ';

                                                    $tbl_id = $row['postTbl_ID'];
                                                    $sql3 = "select * from user_comments where post_id = $tbl_id";

                                                    $result3 = $con->query($sql3);

                                                    if ($result3->num_rows > 0) {
                                                       
                                                        
                                                        while ( $rowInner = $result3->fetch_assoc() )  {
                                                            $id_pic = $rowInner['reply_id'];
                                                            $pic_sql = "select * from user_info where user_id = '$id_pic'";
                                                            $result_pic = $con->query($pic_sql);
                                                            $pic_row = $result_pic->fetch_assoc(); 
                                                            echo ' 
                                                               

                                                                    <div class="col-1 col-md-1 collapse" style="height: 25%;margin-bottom: 0px;width: 25%;" id="a'.$row["postTbl_ID"].'"><img class="rounded-circle img-fluid" alt="" src="../images/'.$pic_row['profile_pic'].'" style="width: 100px;margin-top: 8px;margin-bottom: 0px;margin-left: 0px;max-width: 150%;"></div>
                                                                    <div class="col col-md-11 collapse" id="a'.$row["postTbl_ID"].'" style="height: 25%;padding-left: 8px;padding-right: 8px;">
                                                                        
                                                                            <div class="input-group " style="margin-top: 15px;">
                                                                                <input class="form-control" type="text"placeholder=" '. $rowInner["message"] .' - ' . $pic_row['first_name'] . ' '.$pic_row['last_name'].' " name="message" disabled style="border:none;">
                                                                                
                                                                            </div>
                                                                     
                                                                  
                                                                </div>
                                                                ';
                                                                
                                                        }
                                                    }

                                                    echo '
                                               
                                            </form>
                                            </div>
                            
                                        </div>
                                     
                                    </div>
                                </div> ';
                                        }
                                        
                                    ?>
            </div>
            <footer></footer>
            <footer class="bg-white sticky-footer" style="background: rgb(242,250,255);height: 34.0px;padding-top: 12px;padding-bottom: 12px;">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © VOSHES 2021</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>

<?php
    include('footer.php');
?>