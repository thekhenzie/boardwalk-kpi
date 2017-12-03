<?php
ob_start();
session_start();
require_once 'dbconnect.php';

if( !isset($_SESSION['user']) ) {
    header("Location: index.php");
    exit;
}
    // select loggedin users detail
$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
$deptId = $_GET['deptId'];
$link=$_SERVER['PHP_SELF'];
$url=basename($link);

$ress=mysql_query("SELECT * FROM departments WHERE deptId=$deptId");
$dep=mysql_fetch_array($ress);
$printdate = date("F d, Y");
?>
<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width" name="viewport">
    <meta content="noindex, nofollow" name="robots">

    <title>KPIs | Boardwalk</title>
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
    <script src="files/ai.js">
    </script>
    <link href="css/bootstrap2.min.css" rel="stylesheet">


</head>

<body>



    <div class="header-status-bar">
        <span class="company-details" data-is-logo="true" style="background-image:url('logoo.png')"></span>

        <div>
            <a class="profile"><i class="small-profile" data-item-id="84901" data-size="30x30" style=
                "background-image:url('/Shared/_ProfileImage/84901?size=30x30')"></i><span>Hi
                <?php echo $userRow['userName']; ?></span><svg class="init" viewbox="-4 -6 22 22">
                <path d=
                "M1.8,0c0.2,0,0.4,0.1,0.6,0.2L7.2,5l4.7-4.7c0.3-0.3,0.9-0.3,1.2,0c0.2,0.2,0.2,0.4,0.2,0.6s-0.1,0.4-0.2,0.6L7.8,6.8 c-0.3,0.3-0.9,0.3-1.2,0L1.2,1.5c-0.3-0.3-0.3-0.9,0-1.2C1.4,0.1,1.6,0,1.8,0z"
                xmlns="http://www.w3.org/2000/svg">
            </path></svg></a>
        </div>
    </div>


    <h1 class="print">KPIs</h1>


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


                <li class="selected">
                    <svg class="init">
                        <path style="fill: black;" d=
                        "M9.5,0C4.8,0,1,3.8,1,8.5C1,13.2,4.8,17,9.5,17S18,13.2,18,8.5C18,3.8,14.2,0,9.5,0z M9.5,14C6.5,14,4,11.5,4,8.5 C4,5.5,6.5,3,9.5,3S15,5.5,15,8.5C15,11.5,12.5,14,9.5,14z M13,8.5c0,1.9-1.6,3.5-3.5,3.5S6,10.4,6,8.5S7.6,5,9.5,5S13,6.6,13,8.5z"
                        xmlns="http://www.w3.org/2000/svg">
                    </path></svg><span>KPIs</span>
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
                <a href="reports.php?deptId=<?php echo $deptId; ?>">Reports</a>
            </li>
            <li>
                <a href="kpi.php?deptId=<?php echo $deptId; ?>">KPIs</a>
            </li>
        </ul>


        <div class="clearboth">
        </div>
    </div>


    <div class="columns">
        <div class="columns-row">
            <div class="column-left screen">
                <a class="menu-button" href="#" title=""><svg class="init">
                    <path style="fill: black;" d="M23,2H1V0h22V2z M23,8H1v2h22V8z M23,16H1v2h22V16z" xmlns="http://www.w3.org/2000/svg">
                    </path></svg></a>

                    <h4 class="sprite up-arrow" data-accord="1"><span>Departments</span>
                    </h4>


                    <div data-accord="1" style="">
                        <?php       
                        $res2=mysql_query("SELECT * FROM departments");
                        $no=1;
                        while($depts=mysql_fetch_assoc($res2)){

                            echo '
                            <a href="kpi.php?deptId='.$depts['deptId'].'" class="category" value='.$depts['deptId'].'>
                                <b>'.$no.'</b>
                                <span>'.$depts['deptName'].'</span>
                            </a>

                            ';

                            $no++;

                        }
                        ?>
                    </div>


                    <div data-accord="2" style="display:none">
                    </div>
                </div>


                <div class="column-right">
                   <div class="reports">
                    <div class="reports-options screen">
                    </div>
                    


                    <div class="report" style="padding: 0px 15px 0px 20px;">
                   
                    

                        <div class="kpi-entries">

                         <?php
            if(isset($_GET['action']) == 'delete'){
                $kpiId = $_GET['kpiId'];
                $cek = mysql_query("SELECT * FROM kpis WHERE kpiId=$kpiId");
                $cek1=mysql_fetch_array($cek);
                $kname = ucfirst($cek1['kpiName']);
                if(mysql_num_rows($cek) == 0){
                    echo '

                    <div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data not found.</div>';
                }else{


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

                    $query = "DELETE FROM kpis WHERE kpiId='$kpiId'; DELETE FROM formula WHERE fName LIKE ('".$kname."');";
                    // 
                    $delete = mysqli_multi_query($dbhandle, $query);


                    //$delete = mysql_query("DELETE FROM kpis WHERE kpiId='$kpiId'");
                    //$delete1 = mysql_query("DELETE FROM formula WHERE fName LIKE ('".$cek['kpiName']."')");

                    if($delete){
                        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data successfully removed</div>';
                    }else{
                        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data failed to delete.</div>';
                    }
                }
            }

            if(isset($_GET['enable']) == 'true'){
                $kpiId = $_GET['kpiId'];
                $cek = mysql_query("SELECT * FROM kpis WHERE kpiId=$kpiId");
                if(mysql_num_rows($cek) == 0){
                    echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data not found.</div>';
                }else{
                    


                    $enable = mysql_query("UPDATE kpis SET kpiType=1 WHERE kpiId='$kpiId'");


                    if($enable){
                        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data successfully enabled</div>';
                    }else{
                        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data failed enable</div>';
                    }
                }
            }

            if(isset($_GET['disable']) == 'true'){
                $kpiId = $_GET['kpiId'];
                $cek = mysql_query("SELECT * FROM kpis WHERE kpiId=$kpiId");
                if(mysql_num_rows($cek) == 0){
                    echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data not found</div>';
                }else{
                    


                    $enable = mysql_query("UPDATE kpis SET kpiType=2 WHERE kpiId='$kpiId'");


                    if($enable){
                        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data successfully disabled</div>';
                    }else{
                        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data failed to disable</div>';
                    }
                }
            }
            ?>
                            <div class="report-header">
                                <div class="title">
                                    <h1 id="h1Name"><?php echo $dep['deptName']; ?> | KPIs</h1>
                                    <h2 id="h1Dateito"><?php echo $printdate;?></h2>
                                </div>
                            </div>

                           
                            <table class="kpis">
                                <thead>
                                    <tr>
                                        <th class="screen" style="width: 35px;text-align:center;">Edit</th>

                                        <th data-bind="click: headerSort" data-sort="KpiId" style=
                                        "width: 30px;text-align:center;">ID</th>

                                        <th class="icon">
                                        </th>

                                        <th class="kpi" on headerSort data-sort="KpiName">Name</th>
                                        <th class="kpi" >Description</th>

                                        <th class="media-hide" >Format</th>

                                        <th class="target" style="text-align:center">Target</th>

                                        <th class="media-hide" style="width: 85px; text-align: center">Entries</th>

                                        <th class="media-hide" id="thActions" style="width: 80px;">
                                            Tools </th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php

                                $no=1;
                                $res3=mysql_query("SELECT * FROM kpis WHERE deptId=$deptId");

                                while($kpi3=mysql_fetch_assoc($res3)){
                                  echo '
                                  <td class="edit screen">

                                    <a disabled="disabled">
                                        <svg viewBox="-3 0 32 32" class="init"><polygon fill="#F6891F" points="9.2,26 4.3,21 22.7,2.7 27.5,7.7   " xmlns="http://www.w3.org/2000/svg"></polygon><polygon fill="#EAD2A4" points="2.7,22.7 7.7,27.7 2.7,29.3 1,27.7              " xmlns="http://www.w3.org/2000/svg"></polygon><polygon fill="#010101" points="2.7,29.3 1,27.7 1,29.3    " xmlns="http://www.w3.org/2000/svg"></polygon><polygon fill="#ED2224" points="27,1 25.2,1 29.2,5 29.2,3.2          " xmlns="http://www.w3.org/2000/svg"></polygon></svg>
                                    </a>

                                </td>
                                <td style="width: 30px;text-align:center;color: #999999;font-size:11px;">'.$no.'</td>
                                <td class="icon"></td>
                                <td class="kpi">'.$kpi3['kpiName'].'</td>
                                <td class="kpi">'.$kpi3['kpiDesc'].'</td>
                                <td  style="text-align:center" class="media-hide">
                                    ';

                                    if ($kpi3['kpiFormat']==1) echo "12.34";
                                    if ($kpi3['kpiFormat']==2) echo "12.34%";
                                    if ($kpi3['kpiFormat']==3) echo "₱12.34";

                                    echo '                      
                                </td>

                                <td class="target" style="text-align:center">'.$kpi3['kpiTarget'].'%</td>
                                <td style="text-align:center" class="media-hide">
                                ';

                                if($kpi3['kpiType']==1){
                                    echo '
                                    <a  disabled="disabled" class="button-green" title="" style="margin:0;padding:0 8px;width:65px;" disabled="disabled">Add Data</a>';
                                }

                                if($kpi3['kpiType']==2){
                                    echo '
                                    <a  disabled="disabled" class="button-green" title="" style="margin:0;padding:0 8px;width:65px;background-color:#db7093" disabled="disabled">--</a>';
                                }

                                echo'

                                </td>

                                <td class="target" style="text-align:center">
                                ';

                                if($kpi3['kpiType']==1){
                                echo '
                                <a disabled="disabled" title="Disable" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true" disabled="disabled"></span></a>
                                ';}

                                if($kpi3['kpiType']==2){
                                echo '
                                <a disabled="disabled"  title="Enable" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-ban-circle" aria-hidden="true" disabled="disabled"></span></a>
                                ';}

                                echo '
                                <a  disabled="disabled"  title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true" disabled="disabled"></span></a>
                                <a  disabled="disabled" title="Delete Data"  class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true" disabled="disabled"></span></a>
                            </td>


                                <td style="border-left-color:transparent">&nbsp;</td>
                            </tr>
                            ';

                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
                </div>
            </div>
        
    </div>
</div>
</div>
</div>
<script src="files/reports">
</script> 
<script src="files/_JSSettings.js" type="text/javascript">
</script> 
<script src="files/kpi">
</script> 
<script type="text/javascript">

    $sr.viewType = "KPIReport";
    $sr.init();
</script> 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <div aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible" role="log">
    </div>
</body>
</html>