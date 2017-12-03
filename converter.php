<html>
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
    $date1  = date('Y-m-d');
    $date2 = date('Y-m-d',strtotime("+7 days"));


    $month= date("F");
    $month1 = date("Y-m-01");
    $month2 = date("Y-m-t");

?>


<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width" name="viewport">
    <meta content="noindex, nofollow" name="robots">
    <title>Reports | Boardwalk</title>
    <link href="icon.jpg" rel="shortcut icon">
    <link href="icon.jpg" rel="apple-touch-icon">
    <link href="icon.jpg" rel="apple-touch-icon-precomposed">
    <link href="files/css.css" media="print" rel="stylesheet" type="text/css">
    <link href="files/css_003.css" rel="stylesheet" type="text/css">
    <link href="files/css_002.css" rel="stylesheet">
    <link href="files/dark.css" rel="stylesheet">
    <link href="files/blue.css" rel="stylesheet">
	<link href="css/bootstrap2.min.css" rel="stylesheet">

    <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <script async src="files/analytics.js">
    </script>
	<script src="files/js">
    </script>
    <script src="files/js_002">
    </script>
    <script src="files/ai.js">
    </script>
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
    <h1 class="print">Reports</h1>
    <h2 class="print"></h2>
    <div class="header-dropdown screen" id="mnuProfile">
        <a href="Details.php">My Details</a> <a href="ChangePassword.php">Change Password</a> <a href=
        "logout.php?logout">Log Out</a>
    </div><!-- Main Menu -->
    <div class="tab-menu screen">
        <div class="back"></div>
        <ul class="tab-menu">
            <li>
                <a href="dashboards.php?deptId=1"><svg class="init">
                <path d="M6,7H1V2h5V7z M13,2H8v5h5V2z M6,9H1v5h5V9z M13,9H8v5h5V9z" xmlns="http://www.w3.org/2000/svg">
                </path></svg><span>Dashboards</span></a>
            </li>
            <li class="selected">
                <svg class="init">
                <path d=
                "M8,4L1,1v11l7,3l7-3V1 M8,4 M7,13l-5-2V3l5,2V13z M14,11l-5,2V5l5-2V11z M3,5l3,1v2L3,7V5z M3,8l3,1v2l-3-1V8z M13,7l-3,1 V6l3-1V7z M13,10l-3,1V9l3-1V10z"
                style="fill: black;" xmlns="http://www.w3.org/2000/svg"></path></svg><span>Reports</span>
            </li>
            <li>
                <a href="dataentry.php?deptId=1"><svg class="init">
                <path d="M17,8h-4v4h-2V8H7V6h4V2h2v4h4V8z M1,4h8V2H1V4z M1,8h5V6H1V8z M1,12h8v-2H1V12z" xmlns=
                "http://www.w3.org/2000/svg"></path></svg><span>Data entry</span></a>
            </li>
            <li>
                <a href="kpi.php?deptId=1"><svg class="init">
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
                <a href="AddDepartments.php">Departments</a>
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
    <div class="columns">
        <div class="columns-row">
            <div class="column-left screen">
                <a class="menu-button" href="#" title=""><svg class="init">
                <path d="M23,2H1V0h22V2z M23,8H1v2h22V8z M23,16H1v2h22V16z" style="fill: black;" xmlns=
                "http://www.w3.org/2000/svg"></path></svg></a>
                <h4 class="sprite up-arrow" data-accord="1"><span>Departments</span></h4>
                <div data-accord="1" style="">
                    <?php       
                                $res2=mysql_query("SELECT * FROM departments");
                                //$depts=mysql_fetch_array($res2);
                                $no=1;
                                while($depts=mysql_fetch_assoc($res2)){

                                        echo '
                                        <a href="reports.php?deptId='.$depts['deptId'].'" class="category">
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
			
            <div class="column-right" >
                <div class="reports">
                    <div class="reports-options screen"></div>
                    <div class="report" style="padding: 0px 15px 0px 20px;">
                    <div class="kpi-entries">
                        <!--======== TABLE EMPLOYEES-========================================================-->
                        <div class="report-header">
                            <div class="title">
                                <h1 id="h1Name"><?php echo $dep['deptName']; ?> | Reports</h1>
                                <h2><?php echo $printdate;?></h2>
                            </div>
                        </div>
                        <div class="holder" id="dvReport">
                            <table style="display:none">
					    <tr><td></td></tr>
					    </table>
                            <table class="kpis">
                                <thead>
                                    <tr>
                                        <th colspan="15" style=
                                        "font-weight: bold;text-decoration:underline;text-align:center;background-color:#faffcd;height:20px;">
                                        ACCOMPLISHMENTS</th>
                                    </tr>
                                </thead>
                                <thead>
                                    <tr>
                                        <th colspan="15" style=
                                        "font-weight: bold;text-decoration:underline;text-align:left;background-color:#f5f5f5;">
                                        I. STAFF PERFORMANCE - CSF SCORES</th>
                                    </tr>
                                </thead>
                                <thead>
                                    <tr>
                                        <th style="width: 30px;text-align:center;"></th>
                                        <th class="kpi" style="font-weight: bold;">Employee Name</th>
                                        <th style="width:50px;text-align:center;font-weight: bold;"><?php echo date('M Y', strtotime("-11 month"))?></th>
                                        <th style="width:50px;text-align:center;font-weight: bold;"><?php echo date('M Y', strtotime("-10 month"))?></th>
                                        <th style="width:50px;text-align:center;font-weight: bold;"><?php echo date('M Y', strtotime("-9 month"))?></th>
                                        <th style="width:50px;text-align:center;font-weight: bold;"><?php echo date('M Y', strtotime("-8 month"))?></th>
                                        <th style="width:50px;text-align:center;font-weight: bold;"><?php echo date('M Y', strtotime("-7 month"))?></th>
                                        <th style="width:50px;text-align:center;font-weight: bold;"><?php echo date('M Y', strtotime("-6 month"))?></th>
                                        <th style="width:50px;text-align:center;font-weight: bold;"><?php echo date('M Y', strtotime("-5 month"))?></th>
                                        <th style="width:50px;text-align:center;font-weight: bold;"><?php echo date('M Y', strtotime("-4 month"))?></th>
                                        <th style="width:50px;text-align:center;font-weight: bold;"><?php echo date('M Y', strtotime("-3 month"))?></th>
                                        <th style="width:50px;text-align:center;font-weight: bold;"><?php echo date('M Y', strtotime("-2 month"))?></th>
                                        <th style="width:50px;text-align:center;font-weight: bold;"><?php echo date('M Y', strtotime("last month"))?></th>
                                        <th style="width:50px;text-align:center;font-weight: bold;"><?php echo date('M Y')?></th>

                                        <th style="width:50px;text-align:center;font-weight: bold;">AVE</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php
                                                                                          
                                          $no=1;
                                          
                                          
                                          $res3=mysql_query("SELECT * FROM users WHERE deptId=$deptId");
                                           
                                          while($kpi3=mysql_fetch_assoc($res3)){
                                          echo '
                                              
                                                <td style="width: 30px;text-align:center;color: #999999;font-size:11px;">'.$no.'</td>
                                                <td class="kpi">'.ucfirst($kpi3['userFname']).' '.ucfirst($kpi3['userLname']).'</td>
                                                ';

                                                    $x=-11;
                                                    $temp=0;
                                        for($x1=0;$x1<=11;$x1++){
                                            
                                            $datee = date('Y-m-01', strtotime($x." month"));
                                            
                                            $q=mysql_query("SELECT * FROM dataemployee WHERE userId=('".$kpi3['userId']."') AND deDate LIKE ('".$datee."')");

                                            $data=mysql_fetch_array($q);

                                            $q1=mysql_query("SELECT * FROM dataemployee WHERE userId=('".$kpi3['userId']."')");

                                            $data1=mysql_fetch_array($q1);

                                            $count = mysql_num_rows($q);
                                            if($count ==1){
                                                echo '<td style="width:50px;text-align:center;">'.$data['deResult'].'</td> '; $temp++;}
                                                
                                            else{echo '<td style="width:50px;text-align:center;">0</td> ';}

                                            $x++;

                                        }


                                            $strQuery = mysql_query("SELECT (SELECT ROUND(AVG(CASE WHEN deResult <> 0 THEN deResult ELSE NULL END),0) FROM dataemployee b WHERE b.userId=('".$kpi3['userId']."')) as Average FROM dataemployee b WHERE b.userId=('".$kpi3['userId']."')  ORDER BY b.userId ASC");
                                        $ave=mysql_fetch_array($strQuery);

                                            echo '
                                                ';

                                                if($temp!=0){
                                                    if($ave['Average']<=89){
                                                    echo '<td style="width:50px;text-align:center;background-color: #fde9d9">'.$ave['Average'].'</td>';
                                                    }
                                                    else if($ave['Average']>89){
                                                    echo '<td style="width:50px;text-align:center;background-color: #ebf1de">'.$ave['Average'].'</td>';
                                                    }
                                                }else {echo '<td style="width:50px;text-align:center;">0</td>';}
                                                
                                                
                                                echo ' </tr>';
                                            
                                            $no++;
                                           
                                          }
                                        ?>
                                    </tr>
                                </tbody>
                            </table><!--======== TABLE KPIS-========================================================-->
                            <div class="report-header"></div>
                            <div class="holder" id="dvReport">
                                <table style="display:none">
    <tr><td></td></tr>
    </table>
                                <table class="kpis">
                                    <thead>
                                        <tr>
                                            <th colspan="15" style=
                                            "font-weight: bold;text-decoration:underline;text-align:left;background-color:#f5f5f5;">
                                            II. GROUP PERFORMANCE - KEY PERFORMANCE INDICATORS</th>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <th style="width: 30px;text-align:center;"></th>
                                        <th class="kpi" style="font-weight: bold;">Name</th>
                                        <th style="width:50px;text-align:center;font-weight: bold;"><?php echo date('M Y', strtotime("-11 month"))?></th>
										<th style="width:50px;text-align:center;font-weight: bold;"><?php echo date('M Y', strtotime("-10 month"))?></th>
										<th style="width:50px;text-align:center;font-weight: bold;"><?php echo date('M Y', strtotime("-9 month"))?></th>
										<th style="width:50px;text-align:center;font-weight: bold;"><?php echo date('M Y', strtotime("-8 month"))?></th>
										<th style="width:50px;text-align:center;font-weight: bold;"><?php echo date('M Y', strtotime("-7 month"))?></th>
										<th style="width:50px;text-align:center;font-weight: bold;"><?php echo date('M Y', strtotime("-6 month"))?></th>
										<th style="width:50px;text-align:center;font-weight: bold;"><?php echo date('M Y', strtotime("-5 month"))?></th>
										<th style="width:50px;text-align:center;font-weight: bold;"><?php echo date('M Y', strtotime("-4 month"))?></th>
										<th style="width:50px;text-align:center;font-weight: bold;"><?php echo date('M Y', strtotime("-3 month"))?></th>
										<th style="width:50px;text-align:center;font-weight: bold;"><?php echo date('M Y', strtotime("-2 month"))?></th>
										<th style="width:50px;text-align:center;font-weight: bold;"><?php echo date('M Y', strtotime("last month"))?></th>
										<th style="width:50px;text-align:center;font-weight: bold;"><?php echo date('M Y')?></th>
                                        <th style="width:50px;text-align:center;font-weight: bold;">AVE</th>
										
                                    </tr>
                                    <thead></thead>
                                    <tbody>
                                        <?php
                                                                                          
                                          $no=1;
                                          
                                          
                                          $res3=mysql_query("SELECT  * FROM kpis WHERE deptId=$deptId AND kpiType=1");
                                           
                                          while($kpi3=mysql_fetch_assoc($res3)){
                                          echo '
                                                
                                                <td style="width: 30px;text-align:center;color: #999999;font-size:11px;">'.$no.'</td>
												
                                                <td class="kpi">'.$kpi3['kpiName'].'</td>
                                              
											';
											
                                        /*$q=mysql_query("SELECT * FROM datakpi WHERE kpiId=('".$kpi3['kpiId']."') ORDER BY kpiId, dkDate AXC LIMIT 12 ");
                                        while($data=mysql_fetch_array($q)){

                                        $x=-4;
                                        $datee = date('Y-m-01', strtotime("$x month"));
                                        if($data['dkDate'] == $datee){
                                        echo '<td style="width:50px;text-align:center;">'.$data['dkResult'].'</td> ';}
									    else{echo '<td style="width:50px;text-align:center;">0</td> ';}  $x++;}*/

                                            $x=-11;
                                            $temp=0;
                                        for($x1=0;$x1<=11;$x1++){
                                            
                                            $datee = date('Y-m-01', strtotime($x." month"));
                                            
                                            $q=mysql_query("SELECT * FROM datakpi WHERE kpiId=('".$kpi3['kpiId']."') AND dkDate LIKE ('".$datee."')");

                                            $data=mysql_fetch_array($q);

                                            $q1=mysql_query("SELECT * FROM datakpi WHERE kpiId=('".$kpi3['kpiId']."')");

                                            $data1=mysql_fetch_array($q1);

                                            $count = mysql_num_rows($q);
                                            if($count ==1){
                                                if($data['dkResult']==0){                                                   
                                                    echo '<td style="width:50px;text-align:center;">0</td> ';
                                                    }
                                                
                                                else {
                                                    if($kpi3['kpiFormat']==2){
                                                    echo '<td style="width:50px;text-align:center;">'.$data['dkResult'].'%</td> ';
                                                    }
                                                    else if($kpi3['kpiFormat']==3){
                                                    echo '<td style="width:50px;text-align:center;">₱'.$data['dkResult'].'</td> ';
                                                    }
                                                    else{
                                                    echo '<td style="width:50px;text-align:center;">'.$data['dkResult'].'</td> ';
                                                    }
                                                }
                                                $temp++;
                                            }
                                            else{echo '<td style="width:50px;text-align:center;">0</td> ';}

                                            $x++;

                                        }



                                        $strQuery = mysql_query("SELECT (SELECT ROUND(AVG(CASE WHEN dkResult <> 0 THEN dkResult ELSE NULL END),2) FROM datakpi b WHERE b.kpiId=('".$kpi3['kpiId']."')) as Average FROM datakpi b WHERE b.kpiId=('".$kpi3['kpiId']."')  ORDER BY b.kpiId ASC");
                                        $ave=mysql_fetch_array($strQuery);

											echo '
												';

												if($temp!=0){
													if($ave['Average']<=89){
	                                                echo '<td style="width:50px;text-align:center;background-color: #fde9d9">'.$ave['Average'].'</td>';
													}
													else if($ave['Average']>89){
	                                                echo '<td style="width:50px;text-align:center;background-color: #ebf1de">'.$ave['Average'].'</td>';
													}
												}else {echo '<td style="width:50px;text-align:center;">0</td>';}
												
												
												echo ' </tr>';
                                            

                                            $no++;
                                           
                                          }
                                        ?>
                                    </tbody>
                                </table>
                                <!--======== TABLE REPORTS=======================================================================================-->
                                <div class="report-header">
                                    <br>
                                    <br>

                                    <div>
                                        <a href="#info" rel="facebox"><button class="button-green">Filter
                                        Date</button></a>
                                    </div>

                                    <div id="info" style="display:none;">
                                        <!---->
                                        <form method="post">
                                           
                                                <div class="form-group">
                                                    <label class="control-label col-sm-4">Date Range</label>
                                                    <div class="col-sm-8">
                                                        <div class="input-daterange input-group" id="date-range">
                                                            <input type="text" class="form-control" name="start" />
                                                            <span class="input-group-addon bg-custom b-0 text-white">to</span>
                                                            <input type="text" class="form-control" name="end" />
                                                        </div>
                                                    </div>
                                                </div>



                                                <div >
                                                    <label></label>
                                                    <div>
                                                        <input class="button-green" name="btn-signupp" type="submit"
                                                        value="Save Changes">
                                                    </div>
                                                </div>
                                            
                                        </form>
                                    </div>



                                    <div class="clear"></div>



                                </div>
                                <?php
                                    if (date('D')=="Mon"){$m1 = date('F d',strtotime("0 Monday"));}
                                    else {$m1 = date('F d',strtotime("-1 Monday"));}
                                    $m2 = date('F d',strtotime("0 Saturday"));

                                  echo '  
                                      <table style="display:none">
    <tr><td></td></tr>
    </table>
                                <table class="kpis">
                                    <thead>
                                        <tr>
                                            <th colspan="15" style=
                                            "font-weight: bold;text-decoration:underline;text-align:center;background-color:#faffcd;height:20px;">
                                            WEEKLY GUIDE FROM '.strtoupper($m1).' TO '.strtoupper($m2).'</th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                            <th style=
                                            "width: 30px;font-weight: bold;text-align:center;background-color:#f5f5f5;">
                                            </th>
                                            <th class="target" style=
                                            "font-weight: bold;text-align:left;background-color:#f5f5f5;">PROJECT<br>
                                            TASK PARTICULARS</th>
                                            <th class="target" style=
                                            "font-weight: bold;text-align:center;background-color:#f5f5f5;">STATUS<br>
                                            (Complete,On-going,Not Started)</th>
                                            <th class="target" style=
                                            "font-weight: bold;text-align:center;background-color:#f5f5f5;">DUE
                                            DATE</th>
                                            <th class="target" style=
                                            "font-weight: bold;text-align:center;background-color:#f5f5f5;">NEXT
                                            STEPS</th>
                                            <th class="target" style=
                                            "font-weight: bold;text-align:center;background-color:#f5f5f5;">
                                            CHALLENGES/CONCERNS</th>
                                            <th class="target" style=
                                            "font-weight: bold;text-align:center;background-color:#f5f5f5;">CRITICAL
                                            LEVEL</th>
											 <!--<th class="target" style=
                                            "font-weight: bold;text-align:center;background-color:#f5f5f5;">TOOLS</th>-->
											
										
                                        </tr>
                                    </thead>
                                    <tbody>
                                    ';
                                    if (date('D')=="Mon"){$monday = date('Y-m-d',strtotime("0 Monday"));}    
                                    else{$monday = date('Y-m-d',strtotime("-1 Monday"));}
                                    $monday2 = date('Y-m-d',strtotime("+1 Saturday"));

  

                                      $no=1;
                                       
                                      $res3=mysql_query("SELECT * FROM reports WHERE deptId=$deptId AND (reportDate >= ('".$monday."') AND reportDate <= ('".$monday2."')) ORDER BY reportDate ASC, CASE reportLevel WHEN 'High' THEN 3 WHEN 'Medium' THEN 2 WHEN 'Low' THEN 1 END DESC");
                                      while($kpi3=mysql_fetch_assoc($res3)){
                                      echo '
                                            
                                            <td style="width: 30px;text-align:center;color: #999999;font-size:11px;">'.$no.'</td>
                                            <td class="kpi">'.ucfirst($kpi3['reportName']).'</td>
                                            <td class="kpi" style="text-align:center">'.ucfirst($kpi3['reportStatus']).'</td>
                                            <td class="kpi" style="text-align:center">'.$kpi3['reportDate'].'</td>
                                            <td class="kpi" style="text-align:center">'.ucfirst($kpi3['reportStep']).'</td>
                                            <td class="kpi" style="text-align:center">'.ucfirst($kpi3['reportConcern']).'</td>
											';
																								
											if($kpi3['reportLevel']=='High'){
												echo '<td class="kpi" style="text-align:center;background-color:#ff6961;">'.
												ucfirst($kpi3['reportLevel']).'</td>';
											}
											if($kpi3['reportLevel']=='Medium'){
												echo '<td class="kpi" style="text-align:center;background-color:#ffb347;">'.ucfirst($kpi3['reportLevel']).'</td>';
											}
											if($kpi3['reportLevel']=='Low'){
												echo '<td class="kpi" style="text-align:center;background-color:#ffff99;">'.ucfirst($kpi3['reportLevel']).'</td>';
											}
                                      
											echo '
                                            
                                        </tr>
                                        ';
                                        
                                        $no++;
										/*<td class="kpi" style="text-align:center">
											<a href="editreportpp.php?reportId='.$kpi3['reportId'].'" rel="facebox" title="Edit Report" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
											

											</td>*/
                                      }
                                    echo'
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td style="width: 30px;text-align:center;color: #999999;font-size:11px;">
                                            +</td>
                                            <td colspan="6">
                                                <a href="addreportpp.php?deptId=<?php echo $deptId;?>" rel="facebox" style="color:#000000">Add new
                                                report</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>';
                                    ?>
                                <!-- 

                                ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

                                -->
                                <div class="report-header"></div>


                                <?php
                                $y=-2; $z=-1;

                                    
                                    
                                    for($a=0;$a<4;$a++){
                                    $m1 = date('F d',strtotime($y." Monday"));
                                    $m2 = date('F d',strtotime($z." Saturday"));
                                  echo '  
                                   <div class="report-header"></div>
                                       <table style="display:none">
    <tr><td></td></tr>
    </table>
                                <table class="kpis">
                                    <thead>
                                        <tr>
                                            <th colspan="15" style=
                                            "font-weight: bold;text-decoration:underline;text-align:center;background-color:#faffcd;height:20px;">
                                            WEEKLY GUIDE FROM '.strtoupper($m1).' TO '.strtoupper($m2).'</th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                            <th style=
                                            "width: 30px;font-weight: bold;text-align:center;background-color:#f5f5f5;">
                                            </th>
                                            <th class="target" style=
                                            "font-weight: bold;text-align:left;background-color:#f5f5f5;">PROJECT<br>
                                            TASK PARTICULARS</th>
                                            <th class="target" style=
                                            "font-weight: bold;text-align:center;background-color:#f5f5f5;">STATUS<br>
                                            (Complete,On-going,Not Started)</th>
                                            <th class="target" style=
                                            "font-weight: bold;text-align:center;background-color:#f5f5f5;">DUE
                                            DATE</th>
                                            <th class="target" style=
                                            "font-weight: bold;text-align:center;background-color:#f5f5f5;">NEXT
                                            STEPS</th>
                                            <th class="target" style=
                                            "font-weight: bold;text-align:center;background-color:#f5f5f5;">
                                            CHALLENGES/CONCERNS</th>
                                            <th class="target" style=
                                            "font-weight: bold;text-align:center;background-color:#f5f5f5;">CRITICAL
                                            LEVEL</th>
                                             <!--<th class="target" style=
                                            "font-weight: bold;text-align:center;background-color:#f5f5f5;">TOOLS</th>-->
                                            
                                       
                                         </tr>
                                    </thead>
                                    <tbody>
                                    ';
                                    
                                    $monday = date('Y-m-d',strtotime($y." Monday"));
                                    $monday2 = date('Y-m-d',strtotime($z." Saturday"));
                                    $y--;
                                    $z--;
  

                                      $no=1;
                                       
                                      $res3=mysql_query("SELECT * FROM reports WHERE deptId=$deptId AND (reportDate >= ('".$monday."') AND reportDate <= ('".$monday2."')) ORDER BY reportDate ASC, CASE reportLevel WHEN 'High' THEN 3 WHEN 'Medium' THEN 2 WHEN 'Low' THEN 1 END DESC");
                                      $num_rows = mysql_num_rows($res3);

                                      if($num_rows==0){
                                        echo '
                                        
                                            <td style="width: 30px;text-align:center;color: #999999;font-size:11px;">
                                            -</td>
                                            <td colspan="6">
                                                No reports found</a>
                                            </td>
                                        
                                    ';}
                                      while($kpi3=mysql_fetch_assoc($res3)){
                                      echo '
                                            
                                            <td style="width: 30px;text-align:center;color: #999999;font-size:11px;">'.$no.'</td>
                                            <td class="kpi">'.ucfirst($kpi3['reportName']).'</td>
                                            <td class="kpi" style="text-align:center">'.ucfirst($kpi3['reportStatus']).'</td>
                                            <td class="kpi" style="text-align:center">'.$kpi3['reportDate'].'</td>
                                            <td class="kpi" style="text-align:center">'.ucfirst($kpi3['reportStep']).'</td>
                                            <td class="kpi" style="text-align:center">'.ucfirst($kpi3['reportConcern']).'</td>
                                            ';
                                                                                                
                                            if($kpi3['reportLevel']=='High'){
                                                echo '<td class="kpi" style="text-align:center;background-color:#ff6961;">'.
                                                ucfirst($kpi3['reportLevel']).'</td>';
                                            }
                                            if($kpi3['reportLevel']=='Medium'){
                                                echo '<td class="kpi" style="text-align:center;background-color:#ffb347;">'.ucfirst($kpi3['reportLevel']).'</td>';
                                            }
                                            if($kpi3['reportLevel']=='Low'){
                                                echo '<td class="kpi" style="text-align:center;background-color:#ffff99;">'.ucfirst($kpi3['reportLevel']).'</td>';
                                            }
                                      
                                            echo '
                                            
                                        </tr>
                                        ';
                                        
                                        $no++;
                                        /*echo'<td class="kpi" style="text-align:center">
                                            <a href="editreportpp.php?reportId='.$kpi3['reportId'].'" rel="facebox" title="Edit Report" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                                            

                                            </td>';*/ 
                                      }
                                    echo'
                                    </tbody>
    
                                </table>';
                                           
                                    }
                                    ?>

                                    <div class="report-header"></div>


                                

                                <!-- 

                                ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

                                -->

                                </div>
                            </div>
                            <a href="export.php">Click here to print.</a>

                            <a href="#" class="export">Export Table data into Excel</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
         <script src="assets/plugins/moment/moment.js"></script>
        <script src="assets/plugins/timepicker/bootstrap-timepicker.js"></script>
        <script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
        <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>


        <script src="assets/pages/jquery.form-pickers.init.js"></script>


        <script src="files/_JSSettings.js" type="text/javascript">
        </script> 
        <script src="files/js">
        </script> 
        <script src="files/reports">
        </script> 


	<script type="text/javascript">

    $sr.viewType = "KPIReport";
    $sr.init();
    </script> 


    <!-- Scripts-->
        <!-- <script type='text/javascript' src='https://code.jquery.com/jquery-1.11.0.min.js'></script> -->
        <script type='text/javascript' src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
        <script type='text/javascript'>
        $(document).ready(function () {

            console.log("HELLO")
            function exportTableToCSV($table, filename) {
                var $headers = $table.find('tr:has(th)')
                    ,$rows = $table.find('tr:has(td)')

                    // Temporary delimiter characters unlikely to be typed by keyboard
                    // This is to avoid accidentally splitting the actual contents
                    ,tmpColDelim = String.fromCharCode(11) // vertical tab character
                    ,tmpRowDelim = String.fromCharCode(0) // null character

                    // actual delimiter characters for CSV format
                    ,colDelim = '","'
                    ,rowDelim = '"\r\n"';

                    // Grab text from table into CSV formatted string
                    var csv = '"';
                    csv += formatRows($headers.map(grabRow));
                    csv += rowDelim;
                    csv += formatRows($rows.map(grabRow)) + '"';

                    // Data URI
                    var csvData = 'data:application/csv;charset=utf-8,' + encodeURIComponent(csv);

                // For IE (tested 10+)
                if (window.navigator.msSaveOrOpenBlob) {
                    var blob = new Blob([decodeURIComponent(encodeURI(csv))], {
                        type: "text/csv;charset=utf-8;"
                    });
                    navigator.msSaveBlob(blob, filename);
                } else {
                    $(this)
                        .attr({
                            'download': filename
                            ,'href': csvData
                            //,'target' : '_blank' //if you want it to open in a new window
                    });
                }

                //------------------------------------------------------------
                // Helper Functions 
                //------------------------------------------------------------
                // Format the output so it has the appropriate delimiters
                function formatRows(rows){
                    return rows.get().join(tmpRowDelim)
                        .split(tmpRowDelim).join(rowDelim)
                        .split(tmpColDelim).join(colDelim);
                }
                // Grab and format a row from the table
                function grabRow(i,row){
                     
                    var $row = $(row);
                    //for some reason $cols = $row.find('td') || $row.find('th') won't work...
                    var $cols = $row.find('td'); 
                    if(!$cols.length) $cols = $row.find('th');  

                    return $cols.map(grabCol)
                                .get().join(tmpColDelim);
                }
                // Grab and format a column from the table 
                function grabCol(j,col){
                    var $col = $(col),
                        $text = $col.text();

                    return $text.replace('"', '""'); // escape double quotes

                }
            }


            // This must be a hyperlink
            $("#export").click(function (event) {
                // var outputFile = 'export'
                var outputFile = window.prompt("What do you want to name your output file || 'export';
                outputFile = outputFile.replace('.csv','') + '.csv'
                 
                // CSV
                exportTableToCSV.apply(this, [$('#dvReport > table'), outputFile]);
                
                // IF CSV, don't do event.preventDefault() or return false
                // We actually need this to be a typical hyperlink
            });
        });
    </script>


    </div>
</body>
</html>