 <div class="form-group">
                                <div class="row">
                                    <label style="width: 100%;font-size: 18px;color: rgb(96,1,251);margin-left: 9px;text-shadow: 0px 0px 16px;">Select Month and Year:</label>
                                    <div class="input-group w-25 col col-md-6">
                                        <select name="month" class="form-control">
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                        <select name="year" class="form-control" required="">
                                            <option value="<?php echo date("Y");?>"> <?php echo date("Y");?> </option>
                                            <option value="<?php echo date("Y") + 1;?>"> <?php echo date("Y") + 1;?> </option>
                                        </select>
                                        <input type="submit" class="btn btn-info" name="search" value="Search" style="margin-left: 10px;padding-right: 25px;padding-left: 25px; height: 40px;">      
                                    </div>
                                    <form action="../calendar_filter.php" method="post">
                                        <div class="col col-md-6" style=" margin-top: -25px; padding-top: 25px;padding-left: 8%;padding-right: 0%;padding-bottom: 25px;"><button class="btn btn-success" data-toggle="modal" data-target="#modal2" type="button" style="margin-left: 10px;">Add Event</button>
                                            <input class="btn btn-primary" type="submit" style="margin-left: 10px;" value="Edit Event" name="edit">
                                           
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <hr style="color: rgb(62,62,64);">
                            <table class="table text-center table-bordered table-hover ">
                                <thead class="thead-dark">
                                    <tr>
                                        
                                        <th>Action</th>
                                        <th>Event Name</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php while($row = mysqli_fetch_array($search_result)): ?>
                                        <tr>
                                            <form action="deleteEvent.php" method="post">
                                                <td><?php 
                                                    if($_SESSION['user_id'] == $row['user_ID']){ 
                                                        echo '<input type="submit" name="delete" class=" btn btn-danger" value="&times">';
                                                        echo " ";
                                                        echo '<input type="submit" name="insert" class=" btn btn-primary" value="Save">';
                                                    }

                                                    ?>
                                                </td>
                                                
                                                <td ><input type="text" style=" border: 0px; background-color:transparent;" class="form-control text-center"name="name" value="<?php echo $row['event_name'];?>"></td>
                                                <td ><input type="text" style=" border: 0px; background-color:transparent;" class="form-control text-center"name="description" value="<?php echo $row['description'];?>"></td>
                                                <td ><input type="text" style=" border: 0px; background-color:transparent;" class="form-control text-center"name="date" value="<?php echo $row['date'];?>"></td>
                                            </form>
                                        </tr>
                                    <?php endwhile;?>

                                </tbody>
                            </table>