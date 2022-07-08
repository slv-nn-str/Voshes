<?php
    include('header.php');
?>

<?php
    include('../calendar_filter.php');
?>

                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark" style="font-family: ABeeZee, sans-serif;color: rgb(29,29,31);margin-bottom: -5px;"><strong>Calendar</strong></h3>
                    </div>
                </div>
                <div class="row" style="margin-left: 0px;margin-right: 0px;padding-top: 7px;">
                    <div class="col" style="padding-right: 0px;padding-left: 20px;">
                        <form action="student-calendar.php" method="post">
                            <div class="form-group">
                                <label style="width: 100%;font-size: 18px;color: rgb(96,1,251);margin-left: 9px;text-shadow: 0px 0px 16px;">Select Month and Year:</label>
                                <div class="input-group w-50">
                                    <select name="month" class="form-control" required="">
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

                                    <input type="submit" class="btn btn-info" name="search" value="Search" style="margin-left: 10px;padding-right: 25px;padding-left: 25px;">                                
                                </div>
                            </div>
                            <hr style="color: rgb(62,62,64);">
                            <table class="table text-center table-bordered table-hover ">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Event Name</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php while($row = mysqli_fetch_array($search_result)): ?>
                                        <tr>
                                            <td><?php echo $row['event_name'];?></td>
                                            <td><?php echo $row['description'];?></td>
                                            <td><?php echo $row['date'];?></td>
                                        </tr>
                                    <?php endwhile;?>

                                </tbody>
                            </table>
                        </form>
                    </div>
                    
                </div>
                
            </div>

            <footer class="bg-white sticky-footer" style="background: rgb(242,250,255);height: 34.0px;padding-top: 12px;padding-bottom: 12px;">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © VOSHES 2021</span></div>
                </div>
            </footer>
        </div>
        <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>

<?php
    include('footer.php');
?>