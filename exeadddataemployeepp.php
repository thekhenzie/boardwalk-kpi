<?php

include_once 'dbconnect.php';
    
if(isset($_POST['btn-signup'])) {
$deptId = $_GET['deptId'];    

	$deDate = date('Y-m-01');
    $deAdded = date('Y-m-d');
	
    $userId = trim($_POST['userId']);
    $deResult = trim($_POST['deResult']);


    $deResult = strip_tags($deResult);
	
	
        $query = "INSERT INTO dataemployee(userId,deDate,deResult,deAdded) VALUES('$userId','$deDate','$deResult','$deAdded')";
        $res = mysql_query($query);

        if ($res) {
            $errTyp = "success";
            $errMSG = "Successfully added report";
			header("location: dataentry.php?deptId=".$deptId);
        } else {
            $errTyp = "danger";
            $errMSG = "Something went wrong, try again later...";   
			header("location: dataentry.php?deptId=".$deptId);
        }   
	
	
}
?>
