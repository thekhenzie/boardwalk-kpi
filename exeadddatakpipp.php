<?php

include_once 'dbconnect.php';
    
if(isset($_POST['btn-signup'])) {
$deptId = $_GET['deptId'];    

	$dkDate = date('Y-m-01');
    $dkAdded = date('Y-m-d');
	
    $kpiId = trim($_POST['kpiId']);
    $dkA = trim($_POST['dkA']);
    $dkB = trim($_POST['dkB']);
    $dkC = trim($_POST['dkC']);
    $dkD = trim($_POST['dkD']);
    $dkResult = trim($_POST['dkResult']);

    $dkA = strip_tags($dkA);
    $dkB = strip_tags($dkB);
    $dkC = strip_tags($dkC);
    $dkD = strip_tags($dkD);
    $dkResult = strip_tags($dkResult);
	
	
        $query = "INSERT INTO datakpi(kpiId,dkDate,dkA,dkB,dkC,dkD,dkResult,dkAdded) VALUES('$kpiId','$dkDate','$dkA','$dkB','$dkC','$dkD','$dkResult','$dkAdded')";
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
