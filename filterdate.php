<?php
    require_once 'dbconnect.php';
        $date1  = date('Y-m-d');
    $date2 = date('Y-m-d',strtotime("+7 days"));

?>

  <form action="exefilterdate.php" class="profile-picture surround" method="post">
    <div class="field-table">
      <div class="field-row"></div>

      <div class="field-row">
        <label for="reportDate">Date From</label>

        <div>
          <input id="dateFrom" maxlength="150" name="reportDate" style="width:335px" type="date" value=
          "<?php echo $date1;?>" />
        </div>
      </div>

      <div class="field-row">
        <label for="reportDate">Date To</label>

        <div>
          <input id="dateTo" maxlength="150" name="reportDate" style="width:335px" type="date" value=
          "<?php echo $date2;?>" />
        </div>
      </div>

      <div class="submit-row">
        <div>
          <input class="button-green" name="btn-signupp" type="submit" value="Save Changes" />
        </div>
      </div>
    </div>
  </form>
</body>
</html>
