<?php
    include('header.php');
?>

        
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark" style="font-family: ABeeZee, sans-serif;color: rgb(29,29,31);margin-bottom: -5px;"><strong>Appointments</strong></h3>
                    </div>
                </div>
                <hr style="color: rgb(62,62,64);"><button class="btn btn-primary" data-toggle="modal" data-target="#modal_set_appoint" type="button" style="margin-left: 3%;background: rgb(29,122,6);color: rgb(255, 255, 255);">Set Available Schedule</button>
            </div>
            <footer></footer>
            <footer class="bg-white sticky-footer" style="background: rgb(242,250,255);height: 34.0px;padding-top: 12px;padding-bottom: 12px;">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © VOSHES 2021</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <form>
            <div class="modal fade" role="dialog" tabindex="-1" id="modal1" style="border-radius: 0px;">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background: rgb(220,228,246);"><img class="img-fluid" style="margin-right: 12px;width: 12%;" src="assets/img/col.png">
                            <h4 class="modal-title" style="padding-right: 7px;font-family: ABeeZee, sans-serif;color: rgb(61,62,65);padding-top: 11px;"><strong>User Creation Details</strong></h4><span class="badge badge-dark" style="margin-top: 11px;">New</span><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body" style="background: #fbfafa;">
                            <div class="form-group">
                                <h6 style="color: rgb(0,27,234);margin-bottom: 3px;"><strong>Name :</strong></h6><input class="form-control" type="text" placeholder="Enter Name" style="width: 100%;height: 27px;border-color: rgba(171,144,144,0.11);background: rgb(242,234,234);border-radius: 10px;color: rgb(0,0,0);margin-bottom: 14px;" required="" minlength="2">
                            </div>
                            <div class="form-group">
                                <h6 style="color: rgb(0,27,234);margin-bottom: 3px;"><strong>ID </strong>:</h6><input class="form-control" type="number" min="0" required="" style="width: 100%;height: 27px;margin-bottom: 14px;background: rgb(242,234,234);border-radius: 10px;border-color: rgba(171,144,144,0.11);" placeholder="Enter ID Number">
                            </div>
                            <div class="form-group">
                                <h6 style="color: rgb(0,27,234);margin-bottom: 3px;"><strong>Position </strong>:</h6><input class="form-control" type="text" placeholder="Enter Position" style="width: 100%;height: 27px;border-color: rgba(171,144,144,0.11);background: rgb(242,234,234);border-radius: 10px;color: rgb(0,0,0);margin-bottom: 14px;" required="" minlength="2">
                            </div>
                            <div class="form-group">
                                <h6 style="color: rgb(0,27,234);margin-bottom: 3px;"><strong>Email </strong>:</h6><input class="form-control" type="email" style="width: 100%;height: 27px;margin-bottom: 14px;background: rgb(242,234,234);border-color: rgba(171,144,144,0.11);border-radius: 10px;" placeholder="Enter Email" required="" minlength="3">
                            </div>
                            <div class="form-group">
                                <h6 style="color: rgb(0,27,234);margin-bottom: 3px;"><strong>Password </strong>:</h6><input class="form-control" type="password" style="width: 100%;height: 27px;border-radius: 10px;border-color: rgba(171,144,144,0.11);background: rgb(242,234,234);" placeholder="Enter Password" required="" minlength="8">
                            </div>
                        </div>
                        <div class="modal-footer" style="width: 100%;background: rgb(220,228,246);">
                            <div class="form-group"><button class="btn btn-danger" type="button" data-dismiss="modal" style="margin-right: 11px;">Close</button><button class="btn btn-success" type="submit" style="background: rgb(46,169,80);">Save</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <form>
        <div class="modal fade" role="dialog" tabindex="-1" id="modal_set_appoint" style="border-radius: 0px;">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background: rgb(148,214,131);">
                        <h4 class="modal-title" style="padding-right: 7px;font-family: ABeeZee, sans-serif;color: rgb(61,62,65);"><strong>Schedule Details</strong></h4><span class="badge badge-dark">New</span><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body" style="background: #fbfafa;color: rgb(0,0,0);">
                        <div class="form-group">
                            <h6 style="color: rgb(234,14,0);margin-bottom: 3px;">Name :</h6><input class="form-control" type="text" placeholder="Enter Counselor Name" style="width: 100%;height: 27px;border-color: rgba(171,144,144,0.11);background: rgb(230,249,225);border-radius: 10px;color: rgb(0,0,0);margin-bottom: 14px;" required="" minlength="2">
                        </div>
                        <div class="form-group">
                            <h6 style="color: rgb(234,14,0);margin-bottom: 3px;">Time :</h6><input class="form-control" type="time" style="background: rgb(230,249,225);width: 100%;height: 30px;margin-bottom: 14px;" required="">
                        </div>
                        <div class="form-group">
                            <h6 style="color: rgb(234,14,0);margin-bottom: 3px;">Select a Schedule :</h6><input class="form-control" type="date" style="border-color: rgba(171,144,144,0.11);background: rgb(230,249,225);border-radius: 10px;color: rgb(4,4,4);" required="">
                        </div>
                    </div>
                    <div class="modal-footer" style="width: 100%;background: rgb(148,214,131);">
                        <div class="form-group"><button class="btn btn-danger" type="button" data-dismiss="modal" style="margin-right: 11px;">Close</button><button class="btn btn-success" type="submit" style="background: rgb(30,103,50);">Create</button></div>
                    </div>
                </div>
            </div>
        </div>
    </form>

<?php
    include('footer.php');
?>