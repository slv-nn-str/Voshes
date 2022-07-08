<?php

    if (isset($_POST['search'])) {
        $month = $_POST['month'];
        $year = $_POST['year'];
        $query = "select * from user_events where month(date) = $month and year(date) = $year order by date ";
        $search_result = filterTable($query);
    }
    elseif(isset($_POST['edit'])){
        $id = $_SESSION['user_id'];
        $query = "select user_ID, event_name, description, date from user_events where user_ID = $id order by date";
        $search_result = filterTable($query);
    }
    else{
        $query = "select user_ID, event_name, description, date from user_events order by date ";
        $search_result = filterTable($query);
    }
    function filterTable($query){
        $con = mysqli_connect('localhost','root','','voshes');
        $filter_result = mysqli_query($con, $query);
        return $filter_result;
    }
?> 