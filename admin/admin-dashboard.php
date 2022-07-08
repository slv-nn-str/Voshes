<?php
    include('header.php');
?>
<?php
    $con = new mysqli('localhost','root','','voshes');
    if ($con->connect_error) {
        die("Connection Error : " . $con->connect_error);
    }
    else{
        $sql = "select count(user_id) as total from user_info where position = 'student' ";
        $result = $con->query($sql);
        
        if ($result) {
            $row = $result->fetch_assoc();
            $student = $row['total'];
        }

        $sql = "select count(user_id) as total2 from user_info where position = 'dean'";
        $result = $con->query($sql);
        if ($result) {
            $row = $result->fetch_assoc();
            $dean = $row['total2'];
        }

        $sql = "select count(user_id) as total from user_info where position = 'counselor'";
        $result = $con->query($sql);
        if ($result) {
            $row = $result->fetch_assoc();
            $counselor = $row['total'];
        }

        date_default_timezone_set("Asia/Manila");
        $date = date("y/m/d");
        $sql = "select count(postTbl_ID) as total from user_post where dated_post = '$date'";
        $result = $con->query($sql);
        if ($result) {
            $row = $result->fetch_assoc();
            $daily = $row['total'];
        }
        else{
            $daily = 0;
        }

        $date = date("Y");
        $sql = "select count(postTbl_ID) as total from user_post where month(dated_post) = 1 and year(dated_post) = $date";
        $result = $con->query($sql);
        if ($result) {
            $row = $result->fetch_assoc();
            $january = $row['total'];
        }
        $date = date("Y");
        $sql = "select count(postTbl_ID) as total from user_post where month(dated_post) = 2 and year(dated_post) = $date";
        $result = $con->query($sql);
        if ($result) {
            $row = $result->fetch_assoc();
            $february = $row['total'];
        }
        $date = date("Y");
        $sql = "select count(postTbl_ID) as total from user_post where month(dated_post) = 3 and year(dated_post) = $date";
        $result = $con->query($sql);
        if ($result) {
            $row = $result->fetch_assoc();
            $march = $row['total'];
        }
        date_default_timezone_set("Asia/Manila");
        $date = date("Y");
        $sql = "select count(postTbl_ID) as total from user_post where month(dated_post) = 4 and year(dated_post) = $date";
        $result = $con->query($sql);
        if ($result) {
            $row = $result->fetch_assoc();
            $april = $row['total'];
        }
        $date = date("Y");
        $sql = "select count(postTbl_ID) as total from user_post where month(dated_post) = 5 and year(dated_post) = $date";
        $result = $con->query($sql);
        if ($result) {
            $row = $result->fetch_assoc();
            $may = $row['total'];
        }
        $date = date("Y");
        $sql = "select count(postTbl_ID) as total from user_post where month(dated_post) = 6 and year(dated_post) = $date";
        $result = $con->query($sql);
        if ($result) {
            $row = $result->fetch_assoc();
            $june = $row['total'];
        }
        $date = date("Y");
        $sql = "select count(postTbl_ID) as total from user_post where month(dated_post) = 7 and year(dated_post) = $date";
        $result = $con->query($sql);
        if ($result) {
            $row = $result->fetch_assoc();
            $july = $row['total'];
        }
        $date = date("Y");
        $sql = "select count(postTbl_ID) as total from user_post where month(dated_post) = 8 and year(dated_post) = $date";
        $result = $con->query($sql);
        if ($result) {
            $row = $result->fetch_assoc();
            $august = $row['total'];
        }
        $date = date("Y");
        $sql = "select count(postTbl_ID) as total from user_post where month(dated_post) = 9 and year(dated_post) = $date";
        $result = $con->query($sql);
        if ($result) {
            $row = $result->fetch_assoc();
            $september = $row['total'];
        }
        $date = date("Y");
        $sql = "select count(postTbl_ID) as total from user_post where month(dated_post) = 10 and year(dated_post) = $date";
        $result = $con->query($sql);
        if ($result) {
            $row = $result->fetch_assoc();
            $october = $row['total'];
        }
        $date = date("Y");
        $sql = "select count(postTbl_ID) as total from user_post where month(dated_post) = 11 and year(dated_post) = $date";
        $result = $con->query($sql);
        if ($result) {
            $row = $result->fetch_assoc();
            $november = $row['total'];
        }
        $date = date("Y");
        $sql = "select count(postTbl_ID) as total from user_post where month(dated_post) = 12 and year(dated_post) = $date";
        $result = $con->query($sql);
        if ($result) {
            $row = $result->fetch_assoc();
            $december = $row['total'];
        }
    }

?>

<?php
    

    for ($x=2021; $x <= 2031 ; $x++) { 
        $sql = "select count(postTbl_ID) as total from user_post where year(dated_post) = $x";
        $result = $con->query($sql);
        if ($result) {
            $row = $result->fetch_assoc();
            $year[$x] = $row['total'];  
        }
    }
?>
        
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                            <h3 class="text-dark mb-0" style="font-family: ABeeZee, sans-serif;"><strong>Dashboard</strong></h3>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-lg-3 bg-white container rounded">
                                <div class="row" style="padding: 20px;">
                                    <div class="bg-primary rounded"><i class="fas fa-user" style="color:white; padding: 10px; font-size: 40px;"></i>
                                    </div>
                                    <div class="col-lg-8">
                                        <caption>Student : </caption>
                                        <h4><?php echo $student; ?></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 bg-white container rounded">
                                <div class="row" style="padding: 20px;">
                                    <div class="bg-primary rounded">
                                        <i class="fas fa-user-tie" style="color:white; padding: 10px; font-size: 40px;"></i>
                                    </div>
                                    <div class="col-lg-8">
                                        <caption>Dean : </caption>
                                        <h4><?php echo $dean; ?></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 bg-white container rounded">
                                <div class="row" style="padding: 20px;">
                                    <div class="bg-primary rounded">
                                        <i class="fas fa-user-tie" style="color:white; padding: 10px; font-size: 40px;"></i>
                                    </div>
                                    <div class="col-lg-8">
                                        <caption>Counselor : </caption>
                                        <h4><?php echo $counselor; ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-lg-8">
                                <div class="bg-white container" style="width: 90%;">
                                    <div id="piechart"></div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class=" bg-white container row rounded offset-sm-1" style="width: 80%; padding: 30px; position: relative; left: 5px;" >
                                    <div class="bg-primary rounded col-lg-4">
                                        <i class="fas fa-edit" style="color:white; padding-top: 10px; font-size: 40px;"></i>
                                    </div>
                                    <div class="col-lg-8">
                                        <caption>Daily Post : </caption>
                                        <h4><?php echo $daily; ?></h4>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="bg-white container rounded" style="margin-top: 20px; width: 91%;">
                                <div id="myChart" style="height: 500px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer" style="background: rgb(242,250,255);height: 34.0px;padding-top: 12px;padding-bottom: 12px;">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © VOSHES 2021</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">


// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);



// Draw the chart and set the chart values
function drawChart() {
    
    var jan = <?=$january?>;
    var feb = <?=$february?>;
    var mar = <?=$march?>;
    var apr = <?=$april?>;
    var may = <?=$may?>;
    var jun = <?=$june?>;
    var jul = <?=$july?>;
    var aug = <?=$august?>;
    var sep = <?=$september?>;
    var oct = <?=$october?>;
    var nov = <?=$november?>;
    var dec = <?=$december?>;
  var data = google.visualization.arrayToDataTable([
  ['Task', 'fdasf'],
  ['January', jan],
  ['February', feb],
  ['March', mar],
  ['April', apr],
  ['May', may],
  ['June', jun],
  ['July', jul],
  ['August', aug],
  ['September', sep],
  ['October', oct],
  ['November', nov],
  ['December', dec]

]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Monthly Post', 'width':550, 'height':400, is3D: true};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var a = <?=$year[2021]?>;
    var b = <?=$year[2022]?>;
    var c = <?=$year[2023]?>;
    var d = <?=$year[2024]?>;
    var e = <?=$year[2025]?>;
    var f = <?=$year[2026]?>;
    var g = <?=$year[2027]?>;
    var h = <?=$year[2028]?>;
    var i = <?=$year[2029]?>;
    var j = <?=$year[2030]?>;

if (j != 0) {
    var data = google.visualization.arrayToDataTable([
      ['Year', 'No. of Post'],
      ['2021', a],
      ['2022', b],
      ['2023', c],
      ['2024', d],
      ['2025', e],
      ['2026', f],
      ['2027', g],
      ['2028', h],
      ['2029', i],
      ['2030', j]
    ]);
}
else if (i != 0) {
    var data = google.visualization.arrayToDataTable([
      ['Year', 'No. of Post'],
      ['2021', a],
      ['2022', b],
      ['2023', c],
      ['2024', d],
      ['2025', e],
      ['2026', f],
      ['2027', g],
      ['2028', h],
      ['2029', i],
    ]);
}
else if (h != 0) {
    var data = google.visualization.arrayToDataTable([
      ['Year', 'No. of Post'],
      ['2021', a],
      ['2022', b],
      ['2023', c],
      ['2024', d],
      ['2025', e],
      ['2026', f],
      ['2027', g],
      ['2028', h]
    ]);
}
else if (g != 0) {
    var data = google.visualization.arrayToDataTable([
      ['Year', 'No. of Post'],
      ['2021', a],
      ['2022', b],
      ['2023', c],
      ['2024', d],
      ['2025', e],
      ['2026', f],
      ['2027', g]
    ]);
}
else if (f != 0) {
    var data = google.visualization.arrayToDataTable([
      ['Year', 'No. of Post'],
      ['2021', a],
      ['2022', b],
      ['2023', c],
      ['2024', d],
      ['2025', e],
      ['2026', f]
    ]);
}
else if (e != 0) {
    var data = google.visualization.arrayToDataTable([
      ['Year', 'No. of Post'],
      ['2021', a],
      ['2022', b],
      ['2023', c],
      ['2024', d],
      ['2025', e]
    ]);
}
else if (d != 0) {
    var data = google.visualization.arrayToDataTable([
      ['Year', 'No. of Post'],
      ['2021', a],
      ['2022', b],
      ['2023', c],
      ['2024', d]
    ]);
}
else if (c != 0) {
    var data = google.visualization.arrayToDataTable([
      ['Year', 'No. of Post'],
      ['2021', a],
      ['2022', b],
      ['2023', c]
    ]);
}
else if (b != 0) {
    var data = google.visualization.arrayToDataTable([
      ['Year', 'No. of Post'],
      ['2021', a],
      ['2022', b]
      
    ]);
}
else{
    var data = google.visualization.arrayToDataTable([
      ['Year', 'No. of Post'],
      ['2021', a]
    ]);
}


var options = {
  title:'Statistics of Yearly Post'
};

var chart = new google.visualization.BarChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>
 <?php
    include('footer.php');
 ?>