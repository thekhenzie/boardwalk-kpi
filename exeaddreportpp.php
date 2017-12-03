<?php

include_once 'dbconnect.php';
$deptId = $_GET['deptId'];
if(isset($_POST['btn-signup'])) {
        
    
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
    
        $query = "INSERT INTO reports(reportName,reportStatus,reportDate,reportCreated,reportStep,reportConcern,reportLevel,deptId) VALUES('$reportName','$reportStatus','$reportDate','$printdate','$reportStep','$reportConcern','$reportLevel','$deptId')";
        
        $res = mysql_query($query);
        
        
        
        if ($res) {
            $errTyp = "success";
            $errMSG = "Successfully added report";
			header("location: reports.php?deptId=$deptId");
        } else {
            $errTyp = "danger";
            $errMSG = "Something went wrong, try again later...";   
			header("location: reports.php?deptId=$deptId");
        }   
}
?>
