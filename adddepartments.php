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
    $deptId = $userRow['deptId'];
    
if(isset($_POST['btn-signup'])) {
        
    $dname = trim($_POST['dname']);
    $ddesc = trim($_POST['ddesc']);
    $kpiFunction = trim($_POST['kpiFunction']);
    $nfA = trim($_POST['nfA']);
    $nfB = trim($_POST['nfB']);
    $nfC = trim($_POST['nfC']);
    $nfD = trim($_POST['nfD']);
    $userDate = trim($_POST['userDate']);
    $userType = trim($_POST['userType']);

    $dname1 = ucfirst($dname);
    $ddesc1 = ucfirst($ddesc);


    // check dname exist or not
    $query = "SELECT deptName FROM departments WHERE deptName='$dname'";
    $result = mysql_query($query);
    
    $count = mysql_num_rows($result); // if dname not found then proceed
    
    if ($count==0) {
    $sql = "SELECT * FROM departments,users WHERE departments.deptId='$deptId' AND deptHead LIKE Name;";
    $sql1 = mysql_query($sql);
    $userId = $sql1['userId'];
//MYSQLI

    $hostdb   = "localhost"; // MySQl host
    $userdb   = "root"; // MySQL username
    $passdb   = ""; // MySQL password
    $namedb   = "dbtest"; // MySQL database name

    //Establish connection with the database
    $dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);

    //Validating DB Connection
    if ($dbhandle->connect_error) {
        exit("There was an error with your connection: " . $dbhandle->connect_error);
    }

    $query1 = "UPDATE users SET userType=3 WHERE Name ='$nfA';INSERT departments(deptName,deptDesc,deptHead) VALUES('$dname1','$ddesc1','$nfA');";
    $res = mysqli_multi_query($dbhandle, $query1);

    mysqli_close($dbhandle);

        if ($res) {
            $errTyp = "success";
            $errMSG = "Successfully added departments";
        } else {
            $errTyp = "danger";
            $errMSG = "Something went wrong, try again later...";   
        }   
            
    } else {
        $errTyp = "warning";
        $errMSG = "Sorry Department name already in use ...";
    }
      
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width" name="viewport">
    <meta content="noindex, nofollow" name="robots">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>Add Departments | Boardwalk</title>
    <link href="icon.jpg" rel="shortcut icon">
    <link href="icon.jpg" rel="apple-touch-icon">
    <link href="icon.jpg" rel="apple-touch-icon-precomposed">
    <link href="files/css.css" media="print" rel="stylesheet" type="text/css">
    <link href="files/css_003.css" rel="stylesheet" type="text/css">
    <link href="files/css_002.css" rel="stylesheet">
    <link href="files/dark.css" rel="stylesheet">
    <link href="files/blue.css" rel="stylesheet">
    <script async src="files/analytics.js">
    </script>
    <script src="files/js">
    </script>
    <script src="files/js_002">
    </script>
    <link href="css/bootstrap2.min.css" rel="stylesheet">


</head>

<body>



    <div class="header-status-bar">
        <span class="company-details" data-is-logo="true" style="background-image:url('logoo.png')"></span>

        <div>
            <a class="profile"><i class="small-profile" data-item-id="84908" data-size="30x30" style=
            "background-image:url('/Shared/_ProfileImage/84908?size=30x30')"></i><span>Hi
            <?php echo $userRow['userName']; ?></span><svg class="init" viewbox="-4 -6 22 22">
            <path d=
            "M1.8,0c0.2,0,0.4,0.1,0.6,0.2L7.2,5l4.7-4.7c0.3-0.3,0.9-0.3,1.2,0c0.2,0.2,0.2,0.4,0.2,0.6s-0.1,0.4-0.2,0.6L7.8,6.8 c-0.3,0.3-0.9,0.3-1.2,0L1.2,1.5c-0.3-0.3-0.3-0.9,0-1.2C1.4,0.1,1.6,0,1.8,0z"
            xmlns="http://www.w3.org/2000/svg">
            </path></svg></a>
        </div>
    </div>


    <h1 class="print">My Details</h1>


    <div class="header-dropdown screen" id="mnuProfile">
        <a href="Details.php">My Details</a> <a href="ChangePassword.php">Change Password</a> <a href=
        "logout.php?logout">Log Out</a>
    </div>
    <!-- Main Menu -->


    <div class="tab-menu screen">
        <div class="back">
        </div>


        <ul class="tab-menu">
            <li>
                <a href="dashboards.php?deptId=1"><svg class="init">
                <path d="M6,7H1V2h5V7z M13,2H8v5h5V2z M6,9H1v5h5V9z M13,9H8v5h5V9z" xmlns="http://www.w3.org/2000/svg">
                </path></svg><span>Dashboards</span></a>
            </li>


            <li>
                <a href="reports.php?deptId=1"><svg class="init">
                <path d=
                "M8,4L1,1v11l7,3l7-3V1 M8,4 M7,13l-5-2V3l5,2V13z M14,11l-5,2V5l5-2V11z M3,5l3,1v2L3,7V5z M3,8l3,1v2l-3-1V8z M13,7l-3,1 V6l3-1V7z M13,10l-3,1V9l3-1V10z"
                xmlns="http://www.w3.org/2000/svg">
                </path></svg><span>Reports</span></a>
            </li>


            <li>
                <a href="dataentry.php?deptId=1"><svg class="init">
                <path d="M17,8h-4v4h-2V8H7V6h4V2h2v4h4V8z M1,4h8V2H1V4z M1,8h5V6H1V8z M1,12h8v-2H1V12z" xmlns=
                "http://www.w3.org/2000/svg">
                </path></svg><span>Data entry</span></a>
            </li>


            <li>
                <a href="kpi.php?deptId=1"><svg class="init">
                <path d=
                "M9.5,0C4.8,0,1,3.8,1,8.5C1,13.2,4.8,17,9.5,17S18,13.2,18,8.5C18,3.8,14.2,0,9.5,0z M9.5,14C6.5,14,4,11.5,4,8.5 C4,5.5,6.5,3,9.5,3S15,5.5,15,8.5C15,11.5,12.5,14,9.5,14z M13,8.5c0,1.9-1.6,3.5-3.5,3.5S6,10.4,6,8.5S7.6,5,9.5,5S13,6.6,13,8.5z"
                xmlns="http://www.w3.org/2000/svg">
                </path></svg><span>KPIs</span></a>
            </li>
        </ul>


        <div class="manage-my">
            <span>Manage my</span><svg class="init" viewbox="0 -9 24 24">
            <path d=
            "M1.8,0c0.2,0,0.4,0.1,0.6,0.2L7.2,5l4.7-4.7c0.3-0.3,0.9-0.3,1.2,0c0.2,0.2,0.2,0.4,0.2,0.6s-0.1,0.4-0.2,0.6L7.8,6.8 c-0.3,0.3-0.9,0.3-1.2,0L1.2,1.5c-0.3-0.3-0.3-0.9,0-1.2C1.4,0.1,1.6,0,1.8,0z"
            xmlns="http://www.w3.org/2000/svg">
            </path></svg>
        </div>


        <ul class="manage-my">
            <li>
                <a href="AddEmployee.php">Users</a>
            </li>


            <li>
                <a href="AddDepartments.php">Departments</a>
            </li>
			
			<li>
                <a href="AddReport.php">Reports</a>
            </li>


            <li>
                <a href="AddKPI.php">KPIs</a>
            </li>
        </ul>


        <div class="clearboth">
        </div>
    </div>


    <div class="columns">
        <div class="columns-row">
            <div class="column-left">
                <a class="menu-button" href="#" title="Select"><svg class="init">
                <path style="fill: black;" d="M23,2H1V0h22V2z M23,8H1v2h22V8z M23,16H1v2h22V16z" xmlns="http://www.w3.org/2000/svg">
                </path></svg></a>

                <h4>Select...</h4>
                <a class="category selected"><b>1</b><span>Add Department</span></a> <a class="category" href=
                "ViewDepartments.php"><b>2</b><span>View Departments</span></a>
            </div>


            <div class="column-right">
			<div class="reports-options screen">
                </div>


                <div class="reports-settings screen">
                </div>
                <form class="profile-picture surround" method="post">
           

                    <div class="field-table">
                        <div class="field-row">
                            <label></label>
							<h3><?php
                                if ( isset($errMSG) ) {     
								echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$errMSG.'</div>';
								}								
                                ?>
							</h3>
                        </div>



                        <div class="field-row">
                            <label for="dname">Department name</label>

                            <div>
                                <input id="dname" maxlength="150" name="dname" style="width:335px" required type="text" value="">
                            </div>
                        </div>


                        <div class="field-row">
                            <label for="ddesc">Description</label>

                            <div>
                                <input id="ddesc" name="ddesc" style="width:335px" type="text" value=""> 
                            </div>
                        </div>



                        <div class="field-row" id="nfA">
                            <label for="nfA">Department Head</label>
                            <div >
                                <select name="nfA" id="nfA">
                                    <?php       
                                    $res2=mysql_query("SELECT * FROM users WHERE userType=2");
                           
                                    while($depts=mysql_fetch_assoc($res2)){
                                            echo '
                                                <option value="'.ucfirst($depts['userFname'])." ".ucfirst($depts['userLname']).'">
                                                    '.ucfirst($depts['userFname'])." ".ucfirst($depts['userLname']).'
                                                </option>
                                                ';
                                            }       

                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="field-row" id="nfB" style="display:none">
                            <label for="nfB">First Name</label>
                            <div >
                            <input id="nfB" name="nfB" type="text" placeholder="" size="50" style="width:335px" />
                            </div>
                        </div>

                        <div class="field-row" id="nfC" style="display:none">
                            <label for="nfC">Last Name</label>
                            <div >
                            <input id="nfC" name="nfC" type="text" placeholder="" size="50" style="width:335px" />
                            </div>
                        </div>
                        <div class="field-row" id="nfD" style="display:none">
                            <label for="nfD">Email Address</label>
                            <div >
                            <input id="nfD" name="nfD" type="text" placeholder="" size="50" style="width:335px" />
                            </div>
                        </div>

                        <script>
                            $('div select[name=kpiFunction]').change(function(e){
                          if ($('div select[name=kpiFunction]').val() == 'A'){
                            $('#nfA').show();
                            $('#nfB').hide();
                            $('#nfC').hide();
                            $('#nfD').hide();
                          }
                          else if ($('div select[name=kpiFunction]').val() == 'AB'){
                            $('#nfA').hide();
                            $('#nfB').show();
                            $('#nfC').show();
                            $('#nfD').show();
                          }
                          else if ($('div select[name=kpiFunction]').val() == 'ABB'){
                            $('#nfA').show();
                            $('#nfB').show();
                            $('#nfC').hide();
                            $('#nfD').hide();
                          }
                          else if ($('div select[name=kpiFunction]').val() == 'ABC'){
                            $('#nfA').show();
                            $('#nfB').show();
                            $('#nfC').show();
                            $('#nfD').hide();
                          }
                          else {
                            $('#nfA').hide();
                            $('#nfB').hide();
                            $('#nfC').hide();
                            $('#nfD').hide();

                          }
                        });
                        </script>     

                        <div class="submit-row">
                            <label></label>

                            <div>
                                <input class="button-green" name="btn-signup" type="submit" value="Save Changes">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="files/_JSSettings.js" type="text/javascript">
    </script>
	<script src="js/bootstrap.min.js"></script>
    <div aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible" role="log">
    </div>
</body>
</html>