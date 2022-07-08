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
                        <form action="guidance-calendar.php" method="post">
                           <?php
                            include('../calendar_update.php');
                            ?>
                        </form>

                    </div>
                    
                </div>
                
            </div>
            <footer></footer>
            <footer class="bg-white sticky-footer" style="background: rgb(242,250,255);height: 34.0px;padding-top: 12px;padding-bottom: 12px;">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © VOSHES 2021</span></div>
                </div>
            </footer>
        </div>
        <form action="insert_event.php" method="post">
            <div class="modal fade" role="dialog" tabindex="-1" id="modal2" style="border-radius: 0px;">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background: rgb(245,221,184);">
                            <h4 class="modal-title" style="padding-right: 7px;font-family: ABeeZee, sans-serif;color: rgb(61,62,65);"><strong>Calendar Event Details</strong></h4><span class="badge badge-dark">New</span><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body" style="background: #fbfafa;color: rgb(0,0,0);">
                            <div class="form-group">
                                <h6 style="color: rgb(234,14,0);margin-bottom: 3px;">Event Title:</h6><input class="form-control" type="text" placeholder="Enter Name" style="width: 100%;height: 27px;border-color: rgba(171,144,144,0.11);background: rgb(242,234,234);border-radius: 10px;color: rgb(0,0,0);margin-bottom: 14px;" required="" minlength="2" name="event_name">
                            </div>
                            <div class="form-group">
                                <h6 style="color: rgb(234,14,0);margin-bottom: 3px;">Date :</h6><input class="form-control" type="date" style="border-color: rgba(171,144,144,0.11);background: rgb(242,234,234);border-radius: 10px;color: rgb(4,4,4);" name="event_date">
                            </div>
                           
                            
                            <div class="form-group">
                                <h6 style="color: rgb(234,14,0);margin-bottom: 3px;">Description:</h6><input class="form-control" type="text" style="color: rgb(4,4,4);background: rgb(242,234,234);border-radius: 10px;height: 120px;" placeholder="Event Description" required="" name="description">
                            </div>
                        </div>
                        <div class="modal-footer" style="width: 100%;background: rgb(245,221,184);">
                            <div class="form-group"><button class="btn btn-danger" type="button" data-dismiss="modal" style="margin-right: 11px;">Close</button><button class="btn btn-success" type="submit" name="submit" style="background: rgb(46,169,80);">Save</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </form><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>

<?php
    include('footer.php');
?>