<?php
                                        $id = $_SESSION['user_id'];
                                        $con = new mysqli('localhost','root','','voshes');
                                        if ($con->connect_error) {
                                            die("Connection Error : " . $con->connect_error);
                                        }
                                        
                                        $sql = "select * from user_info where user_id = $id";
                                        $result = $con->query($sql);
                                        
                                        $row = $result->fetch_assoc();
                                        echo $row['first_name']. " " . $row['last_name'];
                                        
                                    ?>