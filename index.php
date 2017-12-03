<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// it will never let you open index(login) page if session is set
	if ( isset($_SESSION['user'])!="" ) {
		header("Location: dashboards.php?deptId=1");
		exit;
	}
	
	if( isset($_POST['btn-login']) ) {	
		
		$uname = $_POST['uname'];
		$upass = $_POST['pass'];
		
		$uname = strip_tags(trim($uname));
		$upass = strip_tags(trim($upass));
		
		//$password = hash('sha256', $upass); // password hashing using SHA256
		$password = $upass;
		$res=mysql_query("SELECT userId, userEmail, userPass,userRole,deptId FROM users WHERE userName='$uname'");
		
		$row=mysql_fetch_array($res);

		$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
		if( $count == 1 && $row['userPass']==$password ) {
			$_SESSION['user'] = $row['userId'];
            $_SESSION['userRole'] = $row['userRole']; 
            if( $_SESSION['userRole'] == "superuser"){ header("Location: dashboards.php?deptId=1");}
            else if( $_SESSION['userRole'] == "admin"){ header("Location: admin/dashboards.php?deptId=1");}
            else if( $_SESSION['userRole'] == "manager"){ header("Location: manager/dashboards.php?deptId=".$row['deptId']);}
            else if( $_SESSION['userRole'] == "employee"){ header("Location: user/dashboards.php?deptId=".$row['deptId']);}
        }
        else {
			$errMSG = "Wrong Credentials, Try again...";
		}
	}
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login | Boardwalk</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />
<link href="assets/css/core.css" rel="stylesheet" type="text/css" />

</head>
<body>
    <div class="header-status-bar">
        <span class="company-details" data-is-logo="true" style="background-image:url('logoo.png')"></span>
        
    </div>
<div class="vibrant-holder vibrant-holder-full" style="background-image:url('1234.jpg')">
<div class="container">

	<div id="login-form">
    <form method="post" autocomplete="off">
    
    	<div class="col-md-12">
        
        	<div class="form-group">
            	<h2 class="" style="color:white">Sign In</h2>
            </div>
        
        	<div class="form-group">
            	<hr />
            </div>
            
            <?php
			if ( isset($errMSG) ) {
				
				?>
				<div class="form-group">
            	<div class="alert alert-danger">
				<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
            	</div>
                <?php
			}
			?>
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            	<input type="text" name="uname" class="form-control" placeholder="Your Username" required />
                </div>
            </div>
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            	<input type="password" name="pass" class="form-control" placeholder="Your Password" required />
                </div>
            </div>
            
            <div class="form-group">
            	<hr />
            </div>
            
            <div class="form-group">
            	<button type="submit" class="btn btn-block btn-primary waves-effect  waves-light" name="btn-login" style="background-color:#fdd90e;color:black">Sign In</button>
            </div>
            
            <div class="form-group">
            	<hr />
            </div>
            
            <div class="form-group" style="display:none">
            	<a href="register.php">Sign up Here</a>
            </div>
        
        </div>
   
    </form>
    </div>	
</div>
</div>
<script src="assets/js/waves.js"></script>
</body>
</html>