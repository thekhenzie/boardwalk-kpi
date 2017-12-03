<?PHP

    ob_start();
    session_start();
    require_once 'dbconnect.php';
  // Original PHP code by Chirp Internet: www.chirp.com.au
  // Please acknowledge use of this code by including this header.

  function cleanData(&$str)
  {
    if($str == 't') $str = 'TRUE';
    if($str == 'f') $str = 'FALSE';
      /*if(preg_match("/0/",$str)){
      $str = "$str";
      preg_match("/^0/", $str) || 
      }*/
    if(preg_match("/^\+?\d{8,}$/", $str) || preg_match("/^\d{4}.\d{1,2}.\d{1,2}/", $str)) {
      $str = "'$str";
    }

    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }

  // filename for download
  $filename = "boardwalk_dataentry" . date('Ymd') . ".csv";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: text/csv");

  $out = fopen("php://output", 'w');
  $deptId = $_GET['deptId'];
  $flag = false;
  $result = mysql_query("SELECT
            dkAdded as Date_Added,
              (
                SELECT
                  fName
                FROM
                  formula f,
                  kpis k
                WHERE
                  k.kpiId = d.kpiId
                AND f.fName = k.kpiName
            AND f.deptId = k.deptId
              ) AS Kpi_Name,
              fA as Constraint_A,
              dkA as Value_A,
            fB as Constraint_B,
              dkB as Value_B,
            fC as Constraint_C,
              dkC as Value_C,
            fD as Constraint_D,
              dkD as Value_D,
              dkResult as RESULT

            FROM
              datakpi d,
              formula f,
              kpis k
            WHERE
              k.kpiId = d.kpiId
            AND f.fName = k.kpiName
            AND k.deptId = $deptId
ORDER BY kpiName,dkAdded desc") or die('Query failed!');
  while(false !== ($row = mysql_fetch_assoc($result))) {
    if(!$flag) {
      // display field/column names as first row
      fputcsv($out, array_keys($row), ',', '"');
      $flag = true;
    }
    array_walk($row, __NAMESPACE__ . '\cleanData');
    fputcsv($out, array_values($row), ',', '"');
  }

  fclose($out);
  exit;
?>