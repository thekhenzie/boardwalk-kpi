<?php
ob_start();
session_start();

include_once 'dbconnect.php';
if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
if(isset($_POST['btn-signup'])) {
		
	$dname = trim($_POST['dname']);
	$ddesc = trim($_POST['ddesc']);
	$dhead = trim($_POST['dhead']);
	
	
	$dname = strip_tags($dname);
	$ddesc = strip_tags($ddesc);
	$dhead = strip_tags($dhead);
	
	
	// check dname exist or not
	$query = "SELECT deptName FROM departments WHERE deptName='$dname'";
	$result = mysql_query($query);
	
	$count = mysql_num_rows($result); // if dname not found then proceed
	

	
}
?>
<!DOCTYPE html>
<html idmmzcc-ext-docid="468572160"><head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <meta name="robots" content="noindex, nofollow">
    <title>View Departments | Boardwalk</title>

    <link rel="shortcut icon" href="icon.jpg">
    <link rel="apple-touch-icon" href="icon.jpg">
    <link rel="apple-touch-icon-precomposed" href="icon.jpg">
	<link rel="stylesheet" type="text/css" media="print" href="files/css.css">
	<link href="files/css_003.css" rel="stylesheet" type="text/css">
    <link href="files/css_002.css" rel="stylesheet">
	<link href="files/dark.css" rel="stylesheet">
	<link href="files/blue.css" rel="stylesheet">
    <script src="files/analytics.js" async=""></script><script src="files/js"></script>
	<script src="files/js_002"></script>
	<link href="css/bootstrap2.min.css" rel="stylesheet">


    <div class="header-status-bar">
        <span class="company-details" data-is-logo="true" style="background-image:url('logoo.png')"></span>
        
    
    <div><a class="profile"><i class="small-profile" data-item-id="84908" data-size="30x30" style="background-image:url('/Shared/_ProfileImage/84908?size=30x30')"></i><span>Hi <?php echo $userRow['userName']; ?></span><svg viewBox="-4 -6 22 22" class="init"><path d="M1.8,0c0.2,0,0.4,0.1,0.6,0.2L7.2,5l4.7-4.7c0.3-0.3,0.9-0.3,1.2,0c0.2,0.2,0.2,0.4,0.2,0.6s-0.1,0.4-0.2,0.6L7.8,6.8       c-0.3,0.3-0.9,0.3-1.2,0L1.2,1.5c-0.3-0.3-0.3-0.9,0-1.2C1.4,0.1,1.6,0,1.8,0z" xmlns="http://www.w3.org/2000/svg"></path></svg></a></div>


    </div>


<h1 class="print">
    My Details
</h1>


<div id="mnuProfile" class="header-dropdown screen">
    <a href="details.php">My Details</a>
    <a href="ChangePassword.php">Change Password</a>
    <a href="logout.php?logout">Log Out</a>
</div>



<!-- Main Menu -->
<div class="tab-menu screen">
    <div class="back"></div>

     <ul class="tab-menu">
<li><a href="dashboards.php?deptId=1"><svg class="init"><path d="M6,7H1V2h5V7z M13,2H8v5h5V2z M6,9H1v5h5V9z M13,9H8v5h5V9z" xmlns="http://www.w3.org/2000/svg"></path></svg><span>Dashboards</span></a></li>
<li><a href="reports.php?deptId=1"><svg class="init"><path d="M8,4L1,1v11l7,3l7-3V1 M8,4 M7,13l-5-2V3l5,2V13z M14,11l-5,2V5l5-2V11z M3,5l3,1v2L3,7V5z M3,8l3,1v2l-3-1V8z M13,7l-3,1       V6l3-1V7z M13,10l-3,1V9l3-1V10z" xmlns="http://www.w3.org/2000/svg"></path></svg><span>Reports</span></a></li>
<li><a href="dataentry.php?deptId=1"><svg class="init"><path d="M17,8h-4v4h-2V8H7V6h4V2h2v4h4V8z M1,4h8V2H1V4z M1,8h5V6H1V8z M1,12h8v-2H1V12z" xmlns="http://www.w3.org/2000/svg"></path></svg><span>Data entry</span></a></li>
<li><a href="kpi.php?deptId=1"><svg class="init"><path d="M9.5,0C4.8,0,1,3.8,1,8.5C1,13.2,4.8,17,9.5,17S18,13.2,18,8.5C18,3.8,14.2,0,9.5,0z M9.5,14C6.5,14,4,11.5,4,8.5       C4,5.5,6.5,3,9.5,3S15,5.5,15,8.5C15,11.5,12.5,14,9.5,14z M13,8.5c0,1.9-1.6,3.5-3.5,3.5S6,10.4,6,8.5S7.6,5,9.5,5S13,6.6,13,8.5z       " xmlns="http://www.w3.org/2000/svg"></path></svg><span>KPIs</span></a></li>
 </ul>

    <div class="manage-my"><span>Manage my</span><svg viewBox="0 -9 24 24" class="init"><path d="M1.8,0c0.2,0,0.4,0.1,0.6,0.2L7.2,5l4.7-4.7c0.3-0.3,0.9-0.3,1.2,0c0.2,0.2,0.2,0.4,0.2,0.6s-0.1,0.4-0.2,0.6L7.8,6.8       c-0.3,0.3-0.9,0.3-1.2,0L1.2,1.5c-0.3-0.3-0.3-0.9,0-1.2C1.4,0.1,1.6,0,1.8,0z" xmlns="http://www.w3.org/2000/svg"></path></svg></div>
<ul class="manage-my">
            <li>
                <a href="AddEmployee.php">Users</a>
            </li>


            <li>
                <a href="AddDepartments.php">Departments</a>
            </li>


            <li>
                <a href="AddReports.php">Reports</a>
            </li>


            <li>
                <a href="AddKPI.php">KPIs</a>
            </li>
        </ul>

    <div class="clearboth"></div>
</div>



<div class="columns">
    <div class="columns-row">
        <div class="column-left">
            <a href="#" class="menu-button" title="Select"><svg class="init"><path style="fill: black;" d="M23,2H1V0h22V2z M23,8H1v2h22V8z M23,16H1v2h22V16z" xmlns="http://www.w3.org/2000/svg"></path></svg></a>
            <h4>Select...</h4>
            <a href="addemployee.php" class="category"><b>1</b><span>Add Employee</span></a>
			 <a class="category selected"><b>2</b><span>View Employeee</span></a>

        </div>
		
		
        <div class="column-right">
		<div class="reports">
		<div class="reports-options screen"></div>
		<div class="reports-settings screen"></div>
		<div class="report">
		<div class="container">
		<div class="content">
			<h2>Edit Employee</h2>
			<hr />
			
			<?php
			$userId = $_GET['userId'];
			
			$sql = mysql_query("SELECT userId,userFname,userLname,userEmail,userDate,d.deptName AS deptName FROM users u,departments d WHERE u.deptId=d.deptId AND userId=$userId");
			if(mysql_num_rows($sql) == 0){
				header("Location: viewemployee.php");
			}else{
				$row = mysql_fetch_assoc($sql);
			}
			
			if(isset($_GET['action']) == 'delete'){
				$delete = mysqli_query($koneksi, "DELETE FROM users WHERE userId='$deptId'");
				if($delete){
					echo '<div class="alert alert-danger alert-dismissable">><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data successfully removed.</div>';
				}else{
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data failed to delete.</div>';
				}
			}
			?>
			
			<table class="kpis">
				<tr>
					<th width="20%">Employee ID</th>
					<td><?php echo $row['userId']; ?></td>
				</tr>
				<tr>
					<th>Employee Name</th>
					<td><?php echo ucfirst($row['userFname'])." ".ucfirst($row['userLname']); ?></td>
				</tr>
				<tr>
					<th>Email Adresss</th>
					<td><?php echo $row['userEmail']; ?></td>
				</tr>
				<tr>
					<th>Joining Date</th>
					<td><?php echo $row['userDate']; ?></td>
				</tr>
				<tr>
					<th>Department</th>
					<td><?php echo $row['deptName']; ?></td>
				</tr>
				
				</table>
			
			<a href="viewemployee.php" class="button-green"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Back</a>
			<a href="editemployee.php?userId=<?php echo $row['userId']; ?>" class="button-green"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit Data</a>
			<a href="viewemployee.php?action=delete&userId=<?php echo $row['userId']; ?>" class="button-green" onclick="return confirm('Are you sure to delete this employee? <?php echo  ucfirst($row['userFname'])." ".ucfirst($row['userLname']); ?>')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete Data</a>
		</div>
	</div>
		</div></div></div>
    </div>
</div>

    <script type="text/javascript" src="files/_JSSettings.js"></script>


<div class="ui-helper-hidden-accessible" aria-relevant="additions" aria-live="assertive" role="log"></div></body></html>