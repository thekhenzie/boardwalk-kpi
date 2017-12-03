<?php
    require_once 'dbconnect.php';
      
    $printdate = date("F d, Y");
    $date1  = date('Y-m-d');
    $date2 = date('Y-m-d',strtotime("+7 days"));
	
	if(!isset($_POST['btn-signupp'])) {
        $query= mysql_query("SELECT * FROM reports WHERE deptId=1 ORDER BY reportDate ASC");
        $res=mysql_fetch_array($query);

	}
	if(isset($_POST['btn-signupp'])) {
   
    $dateFrom = trim($_POST['dateFrom']);
    $dateTo = trim($_POST['dateTo']);
    
        $query= mysql_query("SELECT * FROM reports WHERE deptId=1 AND reportCreated between '".$dateFrom."' AND '".$dateTo."' ORDER BY reportDate ASC");
        $res=mysql_fetch_array($query);
		header("Location: reports.php?deptId=1");
	}
	?>