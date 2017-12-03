<?php
    ob_start();
    session_start();
    require_once 'dbconnect.php';
    
    if( !isset($_SESSION['user']) ) {
        header("Location: index.php");
        exit;
    }
    $deptId = $_GET['deptId'];
    // select loggedin users detail
    $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
    $userRow=mysql_fetch_array($res);
    
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
    <title>Data entry | Boardwalk</title>
    <link href="icon.jpg" rel="shortcut icon">
    <link href="icon.jpg" rel="apple-touch-icon">
    <link href="icon.jpg" rel="apple-touch-icon-precomposed">
    <link href="files/css.css" media="print" rel="stylesheet" type="text/css">
    <link href="files/css_003.css" rel="stylesheet" type="text/css">
    <link href="files/css_002.css" rel="stylesheet">
    <link href="files/dark.css" rel="stylesheet">
    <link href="files/blue.css" rel="stylesheet">
    <link href="css/bootstrap2.min.css" rel="stylesheet">
    <script async src="files/analytics.js">
    </script>
    <script src="files/js">
    </script>
    <script src="files/js_002">
    </script>
    <script src="files/ai.js">
    </script>
    <script type="text/javascript" src="js/formcalculations.js"></script>
    <link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css">
    <script src="src/facebox.js" type="text/javascript">
    </script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
    </script>
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
            xmlns="http://www.w3.org/2000/svg"></path></svg></a>
        </div>
    </div>
    <h1 class="print">Data entry</h1>
    <h2 class="print">Date</h2>
    <div class="header-dropdown screen" id="mnuProfile">
        <a href="Details.php">My Details</a> <a href="ChangePassword.php">Change Password</a> <a href=
        "logout.php?logout">Log Out</a>
    </div><!-- Main Menu -->
    <div class="tab-menu screen">
        <div class="back"></div>
        <ul class="tab-menu">
            <li>
                <a href="dashboards.php?deptId=<?php echo $deptId; ?>"><svg class="init">
                <path d="M6,7H1V2h5V7z M13,2H8v5h5V2z M6,9H1v5h5V9z M13,9H8v5h5V9z" xmlns="http://www.w3.org/2000/svg">
                </path></svg><span>Dashboards</span></a>
            </li>
            <li>
                <a href="reports.php?deptId=<?php echo $deptId; ?>"><svg class="init">
                <path d=
                "M8,4L1,1v11l7,3l7-3V1 M8,4 M7,13l-5-2V3l5,2V13z M14,11l-5,2V5l5-2V11z M3,5l3,1v2L3,7V5z M3,8l3,1v2l-3-1V8z M13,7l-3,1 V6l3-1V7z M13,10l-3,1V9l3-1V10z"
                xmlns="http://www.w3.org/2000/svg"></path></svg><span>Reports</span></a>
            </li>
            <li class="selected">
                <svg class="init">
                <path style="fill: black;" d="M17,8h-4v4h-2V8H7V6h4V2h2v4h4V8z M1,4h8V2H1V4z M1,8h5V6H1V8z M1,12h8v-2H1V12z" xmlns=
                "http://www.w3.org/2000/svg"></path></svg><span>Data entry</span>
            </li>
            <li>
                <a href="kpi.php?deptId=<?php echo $deptId; ?>"><svg class="init">
                <path d=
                "M9.5,0C4.8,0,1,3.8,1,8.5C1,13.2,4.8,17,9.5,17S18,13.2,18,8.5C18,3.8,14.2,0,9.5,0z M9.5,14C6.5,14,4,11.5,4,8.5 C4,5.5,6.5,3,9.5,3S15,5.5,15,8.5C15,11.5,12.5,14,9.5,14z M13,8.5c0,1.9-1.6,3.5-3.5,3.5S6,10.4,6,8.5S7.6,5,9.5,5S13,6.6,13,8.5z"
                xmlns="http://www.w3.org/2000/svg"></path></svg><span>KPIs</span></a>
            </li>
        </ul>
        <div class="manage-my">
            <span>Manage my</span><svg class="init" viewbox="0 -9 24 24">
            <path d=
            "M1.8,0c0.2,0,0.4,0.1,0.6,0.2L7.2,5l4.7-4.7c0.3-0.3,0.9-0.3,1.2,0c0.2,0.2,0.2,0.4,0.2,0.6s-0.1,0.4-0.2,0.6L7.8,6.8 c-0.3,0.3-0.9,0.3-1.2,0L1.2,1.5c-0.3-0.3-0.3-0.9,0-1.2C1.4,0.1,1.6,0,1.8,0z"
            xmlns="http://www.w3.org/2000/svg"></path></svg>
        </div>
        <ul class="manage-my">
            <li>
                <a href="AddEmployee.php">Users</a>
            </li>
 
            <li>
                <a href="AddReport.php">Reports</a>
            </li>
            <li>
                <a href="AddKPI.php">KPIs</a>
            </li>
        </ul>
        <div class="clearboth"></div>
    </div>
    <div class="data-entry">
        <div class="clear"></div>
    </div>
    <div class="columns">
        <div class="columns-row">
            <div class="column-left screen">
                <a class="menu-button" href="#" title=""><svg class="init">
                <path style="fill: black;" d="M23,2H1V0h22V2z M23,8H1v2h22V8z M23,16H1v2h22V16z" xmlns="http://www.w3.org/2000/svg">
                </path></svg></a>
                <h4 class="sprite up-arrow" data-accord="1"><span>Departments</span></h4>
                <div data-accord="1" style="">
                    <?php       
                                $res2=mysql_query("SELECT * FROM departments WHeRE deptId=$deptId");
                                //$depts=mysql_fetch_array($res2);
                                $no=1;
                                while($depts=mysql_fetch_assoc($res2)){

                                        echo '
                                        <a href="dataentry.php?deptId='.$depts['deptId'].'" class="category">
                                        <b>'.$no.'</b>
                                        <span>'.$depts['deptName'].'</span>
                                        </a>
                                        ';
                                            
                                    $no++;
                                    //echo "</div>";
                                }
                                ?>
                </div>
                <div data-accord="2" style="display:none"></div>
            </div>
            
            <div class="column-right">
            <div class="reports">
            <div class="reports-options screen"></div>
            <div class="report" style="padding: 0px 15px 0px 20px;">
            <div class="kpi-entries">
            <div class="report-header">
                            <div class="title">
                                <h1 id="h1Name"><?php echo $dep['deptName']; ?> | Employee CSF Scores</h1>
                                <h2 id="h1Dateito"><?php echo $printdate;?></h2>
                            </div>
                        </div>
                <table class="kpi-entry">
                
                        
                    <thead>
                        <tr>
                            <th class="kpi" colspan="2" style="vertical-align:top">
                            </th>
                           
                       <?php
                
                    echo '        
                            
                            <th class="actual past" style="width:40px;text-align:center;">'.date('M Y', strtotime("-10 month")).'</th>
                            <th class="actual past">'.date('M Y', strtotime("-9 month")).'</th>
                            <th class="actual past">'.date('M Y', strtotime("-8 month")).'</th>
                            <th class="actual past">'.date('M Y', strtotime("-7 month")).'</th>
                            <th class="actual past">'.date('M Y', strtotime("-6 month")).'</th>
                            <th class="actual past">'.date('M Y', strtotime("-5 month")).'</th>
                            <th class="actual past">'.date('M Y', strtotime("-4 month")).'</th>
                            <th class="actual past">'.date('M Y', strtotime("-3 month")).'</th>
                            <th class="actual past">'.date('M Y', strtotime("-2 month")).'</th>
                            <th class="actual past">'.date('M Y', strtotime("last month")).'</th>
                            <th class="actual today">'.date('M Y').'</th>
                            <th class="actual future">'.date('M Y', strtotime("+1 month")).'</th>
                        </tr>
                    </thead>
                    ';
                    
                        $res1=mysql_query("SELECT * FROM users WHERE deptId=$deptId AND userRole='employee'");
                        //$kpis=mysql_fetch_array($res1);
                        
                        $no=1;
                        while($kpis=mysql_fetch_assoc($res1)){

                    echo '
                    <tbody class="ui-sortable" id="tbKPIEntries">
                        <tr class="arrows">
                            <td class="actual past" style="width: 25px;">&nbsp;</td>
                            <td class="actual past">&nbsp;</td>
   
                            <td class="actual past" style="width:40px;text-align:center;"></td> 
                            <td class="actual past"></td>
                            <td class="actual past"></td>
                            <td class="actual past"></td>
                            <td class="actual past"></td>
                            <td class="actual past"></td>
                            <td class="actual past"></td>
                            <td class="actual past"></td>
                            <td class="actual past"></td>
                            <td class="actual past"></td>
                            <td class="actual today"></td>
                            <td class="actual past"></td>
                        </tr>
                        <tr class="">
                        
                        
                            <td class="actual past" style="width: 25px;text-align:right;color: #999999;font-size: 11px;">'.$no.'</td>
                            <td class="kpi">'.$kpis['Name'].'</td>
                        
                    ';
                            $today=date('Y-m');
                            $last=date('Y-m', strtotime("last month"));
                            
                            $q=mysql_query("SELECT * FROM dataemployee WHERE kpiId=('".$kpis['userId']."') AND deDate < ('".$today."') ORDER BY deDate ASC LIMIT 10 ");
                            $rows=mysql_num_rows($q);
                                if ($rows<10) {
                                    for($x=0;$x<=(9-$rows);$x++){
                                    echo '<td class="actual past" style="width:50px"><input class="actual" tabindex="1" type="text" value="0" style="width:40px;text-align:center;" readonly></td>';}
                                    while($data=mysql_fetch_array($q)){
                                    echo '<td class="actual past"><input class="actual" tabindex="1" type="text" value="'.$data['dkResult'].'" style="width:40px;text-align:center;" readonly></td>'; 
                                    }
                                    }
                                
                                else while($data=mysql_fetch_array($q)){
                                echo '<td class="actual past"><input class="actual" tabindex="1" type="text" value="'.$data['dkResult'].'" readonly></td>'; 
                                }
                                
                            
        
                            $qadd=mysql_query("SELECT * FROM dataemployee WHERE userId=('".$kpis['userId']."') AND deDate LIKE ('".$today."%')");
                            $datatoday=mysql_fetch_array($qadd);
                            
                            $qtemp=mysql_query("SELECT * FROM users WHERE userId=('".$kpis['userId']."')");
                            $datatemp=mysql_fetch_array($qtemp);
                            
                            $rowsadd=mysql_num_rows($qadd);
                            
                            if($rowsadd==0){
                                $userIdd = $datatemp["userId"];
                                $deptIdd = $datatemp["deptId"];
                                echo '
                                <td class="actual today" align="center" style="width:40px;"><a href="adddataemployeepp.php?userId='.$userIdd.'&deptId='.$deptIdd.'" rel="facebox" style="width:40px;vertical-align:middle;"><button class="button-green" style="background-color:#fdd90e;color:black;margin-right:0px;"width:90px;">Add Data</button></a></td>';
                            }
                            else echo '
                                <td class="actual today" style="width:40px;text-align:center;"><input class="actual" maxlength="15" tabindex="6" type="text" value="'.$datatoday['deResult'].'" style="width:40px;text-align:center;" readonly></td>';
                            
                            echo '
                            
                            <td class="actual future"><input class="actual" maxlength="15" tabindex="7" type="text" style="width:40px;text-align:center;" readonly></td>


                    </tbody>';
                        $no++;
                        }
                    ?>
                </table>



                <!--adddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd = -->

                <div class="report-header">
                            <div class="title">
                                <h1 id="h1Name"><?php echo $dep['deptName']; ?> | KPI Scores</h1>
                                <h2 id="h1Dateito"><?php echo $printdate;?></h2>
                            </div>
                        </div>
                <table class="kpi-entry">
                
                        
                    <thead>
                        <tr>
                            <th class="kpi" colspan="2" style="vertical-align:top">
                            </th>
                           
                       <?php
                
                    echo '        
                            
                            <th class="actual past" style="width:40px;text-align:center;">'.date('M Y', strtotime("-10 month")).'</th>
                            <th class="actual past">'.date('M Y', strtotime("-9 month")).'</th>
                            <th class="actual past">'.date('M Y', strtotime("-8 month")).'</th>
                            <th class="actual past">'.date('M Y', strtotime("-7 month")).'</th>
                            <th class="actual past">'.date('M Y', strtotime("-6 month")).'</th>
                            <th class="actual past">'.date('M Y', strtotime("-5 month")).'</th>
                            <th class="actual past">'.date('M Y', strtotime("-4 month")).'</th>
                            <th class="actual past">'.date('M Y', strtotime("-3 month")).'</th>
                            <th class="actual past">'.date('M Y', strtotime("-2 month")).'</th>
                            <th class="actual past">'.date('M Y', strtotime("last month")).'</th>
                            <th class="actual today">'.date('M Y').'</th>
                            <th class="actual future">'.date('M Y', strtotime("+1 month")).'</th>
                        </tr>
                    </thead>
                    ';
                    
                        $res1=mysql_query("SELECT * FROM kpis WHERE deptId=$deptId AND kpiType=1");
                        //$kpis=mysql_fetch_array($res1);
                        
                        $no=1;
                        while($kpis=mysql_fetch_assoc($res1)){

                    echo '
                    <tbody class="ui-sortable" id="tbKPIEntries">
                        <tr class="arrows">
                            <td class="actual past" style="width: 25px;">&nbsp;</td>
                            <td class="actual past">&nbsp;</td>
   
                            <td class="actual past" style="width:40px;text-align:center;"></td> 
                            <td class="actual past"></td>
                            <td class="actual past"></td>
                            <td class="actual past"></td>
                            <td class="actual past"></td>
                            <td class="actual past"></td>
                            <td class="actual past"></td>
                            <td class="actual past"></td>
                            <td class="actual past"></td>
                            <td class="actual past"></td>
                            <td class="actual today"></td>
                            <td class="actual past"></td>
                        </tr>
                        <tr class="">
                        
                        
                            <td class="actual past" style="width: 25px;text-align:right;color: #999999;font-size: 11px;">'.$no.'</td>
                            <td class="kpi">'.$kpis['kpiName'].'</td>
                        
                    ';
                            $today=date('Y-m');
                            $last=date('Y-m', strtotime("last month"));
                            
                            
                                $x=-10;
                                        for($x1=0;$x1<=9;$x1++){
                                            
                                            $datee = date('Y-m-01', strtotime($x." month"));
                                            
                                            $q=mysql_query("SELECT * FROM datakpi WHERE kpiId=('".$kpis['kpiId']."') AND dkDate LIKE ('".$datee."')");

                                            $data=mysql_fetch_array($q);

                                            $q1=mysql_query("SELECT * FROM datakpi WHERE kpiId=('".$kpis['kpiId']."')");

                                            $data1=mysql_fetch_array($q1);

                                            $count = mysql_num_rows($q);
                                            if($count ==1){
                                                if($data['dkResult']==0){                                                   
                                                    echo '<td class="actual past"><input class="actual" tabindex="1" type="text" value="0" style="width:40px;text-align:center;" readonly></td>';
                                                    }
                                                
                                                else {
                                                    if($kpis['kpiFormat']==2){
                                                    echo '<td class="actual past"><input class="actual" tabindex="1" type="text" value="'.$data['dkResult'].'%" style="width:40px;text-align:center;" readonly></td>';
                                                    }
                                                    else if($kpis['kpiFormat']==3){
                                                    echo '<td class="actual past"><input class="actual" tabindex="1" type="text" value="₱'.$data['dkResult'].'" style="width:40px;text-align:center;" readonly></td>';
                                                    }
                                                    else{
                                                    echo '<td class="actual past"><input class="actual" tabindex="1" type="text" value="'.$data['dkResult'].'" style="width:40px;text-align:center;" readonly></td>';
                                                    }
                                                }
                                            }
                                            else{echo '<td class="actual past"><input class="actual" tabindex="1" type="text" value="0" style="width:40px;text-align:center;" readonly></td>';}

                                            $x++;

                                        }
                                
                            
        
                            $qadd=mysql_query("SELECT * FROM datakpi WHERE kpiId=('".$kpis['kpiId']."') AND dkDate LIKE ('".$today."%')");
                            $datatoday=mysql_fetch_array($qadd);
                            
                            $qtemp=mysql_query("SELECT * FROM kpis WHERE kpiId=('".$kpis['kpiId']."')");
                            $datatemp=mysql_fetch_array($qtemp);
                            
                            $rowsadd=mysql_num_rows($qadd);
                            
                            if($rowsadd==0){
                                $kpiIdd = $datatemp["kpiId"];
                                $deptIdd = $datatemp["deptId"];
                                echo '
                                <td class="actual today" align="center" style="width:40px;"><a href="adddatakpipp.php?kpiId='.$kpiIdd.'&deptId='.$deptIdd.'" rel="facebox" style="width:40px;vertical-align:middle;"><button class="button-green" style="background-color:#fdd90e;color:black;margin-right:0px;"width:90px;">Add Data</button></a></td>';
                            }
                            else echo '
                                <td class="actual today" style="width:40px;text-align:center;"><input class="actual" maxlength="15" tabindex="6" type="text" value="'.$datatoday['dkResult'].'" style="width:40px;text-align:center;" readonly></td>';
                            
                            echo '
                            
                            <td class="actual future"><input class="actual" maxlength="15" tabindex="7" type="text" style="width:40px;text-align:center;" readonly></td>


                    </tbody>';
                        $no++;
                        }
                    ?>
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
    </div>
</body>
</html>