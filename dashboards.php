 <?php 
    ob_start();
    session_start();
    require_once 'dbconnect.php';
    
    if( !isset($_SESSION['user']) ) {
        header("Location: index.php");
        exit;
    }
    // select loggedin users detail
    $deptId = $_GET['deptId'];
    $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
    $userRow=mysql_fetch_array($res);
    
    //$link=$_SERVER['PHP_SELF'];
    //$url=basename($link);
    
    $ress=mysql_query("SELECT * FROM departments WHERE deptId=$deptId");
    $dep=mysql_fetch_array($ress);
    $printdate = date("F d, Y");
?>


 <?php
//including FusionCharts PHP Wrapper
include("fusioncharts/fusioncharts.php"); 
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

?>

<html>
   <head>
      <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width" name="viewport">
    <meta content="noindex, nofollow" name="robots">
    <title>Dashboards | Boardwalk</title>
    <link href="icon.jpg" rel="shortcut icon">
    <link href="icon.jpg" rel="apple-touch-icon">
    <link href="icon.jpg" rel="apple-touch-icon-precomposed">
    <link href="files/css.css" media="print" rel="stylesheet" type="text/css">
    <link href="files/css_003.css" rel="stylesheet" type="text/css">
    <link href="files/css_002.css" rel="stylesheet">
    <link href="files/dark.css" rel="stylesheet">
    <link href="files/blue.css" rel="stylesheet">
	<link href="css/bootstrap2.min.css" rel="stylesheet">
	<script src="fusioncharts/js/fusioncharts.js"></script> 
    <script type="text/javascript" src="fusioncharts/js/elegant.js"></script>
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
      <!-- FusionCharts Core Package File -->
      <script src="fusioncharts/js/fusioncharts.js"></script> 
      <script type="text/javascript" src="fusioncharts/js/elegant.js"></script>
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
      
  </head>
  
<?php

//SQL Query for the Parent chart.
$strQuery = "SELECT DISTINCT a.kpiName as Name, (SELECT ROUND(AVG(CASE WHEN dkResult <> 0 THEN dkResult ELSE NULL END),2) FROM datakpi b WHERE a.kpiId=b.kpiId) as Average, a.kpiId as Year FROM kpis a,datakpi b WHERE a.deptId=$deptId AND a.kpiId=b.kpiId AND a.kpiType=1 ORDER BY a.kpiId ASC";

//Execute the query, or else return the error message.
$result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");

//If the query returns a valid response, preparing the JSON array.
if ($result) {
    //`$arrData` holds the Chart Options and Data.
    $arrData = array(
        "chart" => array(
            "caption" => "KPI for ".$dep['deptName']." Department",
            "subCaption"=> "Click on a column to drill-down into KPI value per month",
            "xAxisName"=> "KPI Name",
            "yAxisName"=> "KPI ID",
            "paletteColors"=> "#993399",//1FD6D1
            "yAxisMaxValue"=> "10",
            "numberPrefix" => "",
            "baseFont"=> "Open Sans",
            "showHoverEffect" => "1",
            "theme" => "elegant",
            "exportEnabled"=>"1",
            "defaultAnimation"=>"1",
            "exportAtClientSide" => "1",
            "exportFileName" => "boardwalk_dashboard"
            
        )
                      
        
    );
    
    //Create an array for Parent Chart.
    $arrData["data"] = array();
    
    // Push data in array.
    while ($row = mysqli_fetch_array($result)) {
        array_push($arrData["data"], array(
            "label" => $row["Name"],
            "value" => $row["Average"],
            "link" => "newchart-json-" . $row["Year"]
        ));
        
    }

    //Data for Linked Chart will start from here, SQL query from quarterly_sales table 

    $year = $row["Year"];
    $strQuarterly = "SELECT  b.dkDate as Quarter, b.dkResult as Sales, a.kpiId as Year,a.kpiName as Name FROM kpis a,datakpi b WHERE a.deptId=$deptId AND a.kpiId=b.kpiId ORDER BY Year ASC,Quarter ASC";
    $resultQuarterly = $dbhandle->query($strQuarterly) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
    
    //If the query returns a valid response, preparing the JSON array.
        if ($resultQuarterly) {
        $arrData["linkeddata"] = array(); //"linkeddata" is responsible for feeding data and chart options to child charts.
        $i = 0;
        if ($resultQuarterly) {
            while ($row = mysqli_fetch_array($resultQuarterly)) {
                $year = $row['Year'];
                $namee= $row['Name'];
                if (isset($arrData["linkeddata"][$i-1]) && $arrData["linkeddata"][$i-1]["id"] == $year) {
                    array_push($arrData["linkeddata"][$i-1]["linkedchart"]["data"], array(
                        "label" => $row["Quarter"],
                        "value" => $row["Sales"]
                    ));
                } else {
                    array_push($arrData["linkeddata"], array(
                        "id" => "$year",
                        "linkedchart" => array(
                            "chart" => array(
                                "caption" => "Monthly Report of $namee",
                                "xAxisName"=> "Month",
                                "yAxisName"=> "Value",
                                "paletteColors"=> "#FDD90E",
                                "baseFont"=> "Open Sans",
                                "numberPrefix" => "",
                                "theme" => "elegant",
                                "exportEnabled"=>"1",
                                "defaultAnimation"=>"1",
                                "showHoverEffect" => "1",
            					"exportAtClientSide" => "1",
                                "exportFileName" => "boardwalk",
                                "exportFormats" => "PNG=Export as Image|PDF=Export as PDF|XLS=Export Chart Data"
                            ),
                            "data" => array(
                                array(
                                    "label" => $row["Quarter"],
                                    "value" => $row["Sales"]
                                )
                            )
                        )
                    ));

                    $i++;
                }
            }
        }
        
            
        $jsonEncodedData = json_encode($arrData, JSON_PRETTY_PRINT);
        
        $columnChart = new FusionCharts("column2d", "myFirstChart" , "940", "450", "linked-chart", "json", "$jsonEncodedData"); 
        
        $columnChart->render();    //Render Method
             
       // $dbhandle->close(); //Closing DB Connection
     
    }
}
?> 





        <?php
        

       // SELECT DISTINCT category, value1, value2, value3 FROM mscombi2ddata
  $strQuery = "SELECT DISTINCT a.kpiId as Year, a.kpiName as category, (SELECT ROUND(AVG(CASE WHEN dkResult <> 0 THEN dkResult ELSE NULL END),2) FROM datakpi b WHERE a.kpiId=b.kpiId) as value1, a.kpiTarget as value2, (a.kpiTarget-(SELECT ROUND(AVG(CASE WHEN dkResult <> 0 THEN dkResult ELSE NULL END),2) FROM datakpi b WHERE a.kpiId=b.kpiId)) as value3 FROM kpis a,datakpi b WHERE a.deptId=$deptId AND a.kpiId=b.kpiId AND a.kpiType=1 ORDER BY a.kpiId ASC;";
  $result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
  if ($result) {

  $arrData = array(
        "chart" => array(
            "caption" => "KPI for ".$dep['deptName']." Department",
            "subCaption"=> "KPI with target",
            "xAxisName"=> "KPI Name",
            "yAxisName"=> "KPI ID",
            "paletteColors"=> "#993399,#993399,#FDD90E",//"#993399",//1FD6D1
            "yAxisMaxValue"=> "10",
            "numberPrefix" => "",
            "baseFont"=> "Open Sans",
            "showHoverEffect" => "1",
            "exportEnabled"=>"1",

            "defaultAnimation"=>"1",
            "exportAtClientSide" => "1",
            "exportFileName" => "boardwalk_dashboard",
            "legendItemFontColor"=> "#666666",
            "theme"=> "elegant"
            )
          );
          // creating array for categories object

          $categoryArray=array();
          $dataseries1=array();
          $dataseries2=array();
          $dataseries3=array();

            $arrData["data"] = array();
          // pushing category array values
          while($row = mysqli_fetch_array($result)) {
            array_push($categoryArray, array(
            "label" => $row["category"]
          )
        );
        array_push($dataseries1, array(
          "value" => $row["value1"]
          )
        );

        array_push($arrData["data"], array(
          "value" => "newchart-json-" . $row["value1"],
            "label" => $row["category"],
            "value" => $row["value2"],
            "value" => $row["value3"]
        ));
        
          
      
        array_push($dataseries2, array(
          "value" => $row["value2"]
          )
        );
        array_push($dataseries3, array(
          "value" => $row["value3"]
          )
        );

      }

      $arrData["categories"]=array(array("category"=>$categoryArray));
      // creating dataset object
      $arrData["dataset"] = array(array("seriesName"=> "KPI", "data"=>$dataseries1), array("seriesName"=> "Target Value",  "renderAs"=>"line", "data"=>$dataseries2),array("seriesName"=> "Value to reach Target",  "renderAs"=>"area", "data"=>$dataseries3));


      //Data for Linked Chart will start from here, SQL query from quarterly_sales table 

   
            
        $jsonEncodedData = json_encode($arrData, JSON_PRETTY_PRINT);
        
        $columnChart = new FusionCharts("mscombi2d", "haha" , "940", "450", "chart-container", "json", "$jsonEncodedData"); 
        
        $columnChart->render();    //Render Method
             
       // $dbhandle->close(); //Closing DB Connection
     
    }


?>
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
        <a href="Details.php" class="waves-effect waves-light">My Details</a> <a href="ChangePassword.php" class="waves-effect waves-light">Change Password</a> <a href=
        "logout.php?logout" class="waves-effect waves-light">Log Out</a>
    </div><!-- Main Menu -->
    <div class="tab-menu screen">
        <div class="back"></div>
        <ul class="tab-menu">
            <li class="selected">
                <svg class="init">
                <path style="fill: black;" d="M6,7H1V2h5V7z M13,2H8v5h5V2z M6,9H1v5h5V9z M13,9H8v5h5V9z" xmlns="http://www.w3.org/2000/svg">
                </path></svg><span>Dashboards</span></a>
            </li>
            <li>
                <a href="reports.php?deptId=1" class="waves-effect waves-light"><svg class="init">
                <path d=
                "M8,4L1,1v11l7,3l7-3V1 M8,4 M7,13l-5-2V3l5,2V13z M14,11l-5,2V5l5-2V11z M3,5l3,1v2L3,7V5z M3,8l3,1v2l-3-1V8z M13,7l-3,1 V6l3-1V7z M13,10l-3,1V9l3-1V10z"
                xmlns="http://www.w3.org/2000/svg"></path></svg><span>Reports</span></a>
            </li>
            <li>
                <a href="dataentry.php?deptId=1"><svg class="init">
                <path d="M17,8h-4v4h-2V8H7V6h4V2h2v4h4V8z M1,4h8V2H1V4z M1,8h5V6H1V8z M1,12h8v-2H1V12z" xmlns=
                "http://www.w3.org/2000/svg"></path></svg><span>Data entry</span>
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
                                $res2=mysql_query("SELECT * FROM departments");
                                //$depts=mysql_fetch_array($res2);
                                $no=1;
                                while($depts=mysql_fetch_assoc($res2)){

                                        echo '
                                        <a href="dashboards.php?deptId='.$depts['deptId'].'" class="category">
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
                                <h1 id="h1Name"><?php echo $dep['deptName']; ?> | Dashboard</h1>
                                <h2 id="h1Dateito"><?php echo $printdate;?></h2>
                            </div>
                        </div>
     <!-- DOM element for Chart -->
     <?php echo "<script type=\"text/javascript\" >
			   FusionCharts.ready(function () {
			FusionCharts('myFirstChart').configureLink({     
			overlayButton: {            
			message: 'Back',
			padding: '10',
			fontSize: '13',
			fontColor: '#F7F3E7',
			bold: '0',
			bgColor: '#993399',           
			borderColor: '#D5555C'         }     });
			 });
			</script>" 
?>
         <div id="chart-container">FusionCharts will render here</div>
         
             <div class="reports-options screen"></div>
            <div id="linked-chart"></div>
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
    <script src="assets/js/waves.js"></script>
    </div>

</body>
</html>