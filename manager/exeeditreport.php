<?php

include_once 'dbconnect.php';
     
if(isset($_POST['save'])) {
        
	$reportId = $_POST['reportId'];  
    $reportName = trim($_POST['reportName']);
    $reportStatus = trim($_POST['reportStatus']);
    $reportDate = trim($_POST['reportDate']);
    $reportStep = trim($_POST['reportStep']);
    $reportConcern = trim($_POST['reportConcern']);
    $reportLevel = trim($_POST['reportLevel']);
    $deptId = trim($_POST['deptId']);
    $printdate = date("Y-m-d");
    
    $reportName = ucfirst(strip_tags($reportName));
    $reportStatus = ucfirst(strip_tags($reportStatus));
    $reportDate = ucfirst(strip_tags($reportDate));
    $reportStep = ucfirst(strip_tags($reportStep));
    $reportConcern = ucfirst(strip_tags($reportConcern));
    $reportLevel = ucfirst(strip_tags($reportLevel));
    $deptId = ucfirst(strip_tags($deptId));
    
        $query = "UPDATE reports SET reportName='$reportName',reportStatus='$reportStatus',reportDate='$reportDate',reportStep='$reportStep',reportConcern='$reportConcern',reportLevel='$reportLevel',deptId='$deptId' WHERE reportId='$reportId'";
        
        $res = mysql_query($query);
        
        
        
        if ($res) {
            $errTyp = "success";
            $errMSG = "Successfully added report";
			header("location: reports.php?deptId=1");
        } else {
            $errTyp = "danger";
            $errMSG = "Something went wrong, try again later...";   
			header("location: reports.php?deptId=1");
        }   
}
?>
