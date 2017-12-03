<?php

include_once 'dbconnect.php';
$printdate = date('Y-m-d',strtotime("+3 days"));
$deptId = $_GET['deptId'];
	$kpiId = $_GET['kpiId'];
	
	$tempres3=mysql_query("SELECT * FROM kpis WHERE kpiId = $kpiId");
	$tempkpi=mysql_fetch_assoc($tempres3);
	

	$res3=mysql_query("SELECT * FROM kpis,formula WHERE kpis.deptId = $deptId AND kpiId = $kpiId AND kpiName LIKE CONCAT ('%',fName,'%')");
	$kpi=mysql_fetch_assoc($res3);
	


?>
<script type="text/javascript" language="Javascript">
	
	dkAtemp = document.frmOne.dkA.value;
	document.frmOne.dkResult.value = dkAtemp;
    function A(value){

		dkAtemp = document.frmOne.dkA.value;	
		document.frmOne.dkResult.value = dkAtemp;
    }
</script>
<script type="text/javascript" language="Javascript">
	
	dkAtemp = document.frmOne.dkA.value;
	dkBtemp = document.frmOne.dkB.value;
	result = (dkAtemp/dkBtemp);
	document.frmOne.dkResult.value = result;
    function ABp(value){

	dkAtemp = document.frmOne.dkA.value;
	dkBtemp = document.frmOne.dkB.value;
	result = (dkAtemp/dkBtemp);
	document.frmOne.dkResult.value = result;
    }
</script>
<script type="text/javascript" language="Javascript">
	
	dkAtemp = document.frmOne.dkA.value;
	dkBtemp = document.frmOne.dkB.value;
	result = (dkAtemp*dkBtemp);
	document.frmOne.dkResult.value = result;
    function ABm(value){

	dkAtemp = document.frmOne.dkA.value;
	dkBtemp = document.frmOne.dkB.value;
	result = (dkAtemp*dkBtemp);
	document.frmOne.dkResult.value = result;
    }
</script>
<script type="text/javascript" language="Javascript">
	
	dkAtemp = document.frmOne.dkA.value;
	dkBtemp = document.frmOne.dkB.value;
	result = (dkAtemp-dkBtemp);
	document.frmOne.dkResult.value = result;
    function ABs(value){

	dkAtemp = document.frmOne.dkA.value;
	dkBtemp = document.frmOne.dkB.value;
	result = (dkAtemp-dkBtemp);
	document.frmOne.dkResult.value = result;
    }
</script>
<script type="text/javascript" language="Javascript">
	
	dkAtemp = document.frmOne.dkA.value;
	dkBtemp = document.frmOne.dkB.value;
	result = (dkAtemp/dkBtemp)*100;
	document.frmOne.dkResult.value = result;
    function AB(value){

	dkAtemp = document.frmOne.dkA.value;
	dkBtemp = document.frmOne.dkB.value;
	result = (dkAtemp/dkBtemp)*100;
	document.frmOne.dkResult.value = result;
    }
</script>
<script type="text/javascript" language="Javascript">
	
	dkAtemp = document.frmOne.dkA.value;
	dkBtemp = document.frmOne.dkB.value;
	result = ((dkAtemp-dkBtemp)*dkAtemp)*100;
	document.frmOne.dkResult.value = result;
    function ABAd(value){

	dkAtemp = document.frmOne.dkA.value;
	dkBtemp = document.frmOne.dkB.value;
	result = ((dkAtemp-dkBtemp)*dkAtemp)*100;
	document.frmOne.dkResult.value = result;
    }
</script>
<script type="text/javascript" language="Javascript">
	
	dkAtemp = document.frmOne.dkA.value;
	dkBtemp = document.frmOne.dkB.value;
	result = ((dkAtemp-dkBtemp)/dkAtemp)*100;
	document.frmOne.dkResult.value = result;
    function ABAd(value){

	dkAtemp = document.frmOne.dkA.value;
	dkBtemp = document.frmOne.dkB.value;
	result = ((dkAtemp-dkBtemp)/dkAtemp)*100;
	document.frmOne.dkResult.value = result;
    }
</script>
<script type="text/javascript" language="Javascript">
	
	dkAtemp = document.frmOne.dkA.value;
	dkBtemp = document.frmOne.dkB.value;
	result = ((dkAtemp-dkBtemp)/dkBtemp)*100;
	document.frmOne.dkResult.value = result;
    function ABB(value){

	dkAtemp = document.frmOne.dkA.value;
	dkBtemp = document.frmOne.dkB.value;
	result = ((dkAtemp-dkBtemp)/dkBtemp)*100;
	document.frmOne.dkResult.value = result;
    }
</script>
<script type="text/javascript" language="Javascript">
	
	dkAtemp = document.frmOne.dkA.value;
	dkBtemp = document.frmOne.dkB.value;
	dkCtemp = document.frmOne.dkC.value;
	result = ((dkAtemp-dkBtemp)/dkCtemp)*100;
	document.frmOne.dkResult.value = result;
    function ABC(value){

	dkAtemp = document.frmOne.dkA.value;
	dkBtemp = document.frmOne.dkB.value;
	dkCtemp = document.frmOne.dkC.value;
	result = ((dkAtemp-dkBtemp)/dkCtemp)*100;
	document.frmOne.dkResult.value = result;
    }
</script>
<script type="text/javascript" language="Javascript">
	
	dkAtemp = document.frmOne.dkA.value;
	dkBtemp = document.frmOne.dkB.value;
	dkCtemp = document.frmOne.dkC.value;
	result = dkAtemp+dkBtemp-dkCtemp;
	document.frmOne.dkResult.value = result;
    function ABCa(value){

	dkAtemp = document.frmOne.dkA.value;
	dkBtemp = document.frmOne.dkB.value;
	dkCtemp = document.frmOne.dkC.value;
	result = dkAtemp+dkBtemp-dkCtemp;
	document.frmOne.dkResult.value = result;
    }
</script>
<script type="text/javascript" language="Javascript">
	
	dkAtemp = document.frmOne.dkA.value;
	dkBtemp = document.frmOne.dkB.value;
	dkCtemp = document.frmOne.dkC.value;
	result = ((dkAtemp/dkCtemp)*100-(dkBtemp/dkCtemp)*100);
	document.frmOne.dkResult.value = result;
    function ACBC(value){

	dkAtemp = document.frmOne.dkA.value;
	dkBtemp = document.frmOne.dkB.value;
	dkCtemp = document.frmOne.dkC.value;
	result = ((dkAtemp/dkCtemp)*100-(dkBtemp/dkCtemp)*100);
	document.frmOne.dkResult.value = result;
    }
</script>
<script language="javascript">
			  function isNumberKey(evt)
			  {
				 var charCode = (evt.which) ? evt.which : event.keyCode
				 if (charCode > 31 && (charCode < 48 || charCode > 57))
					return false;

				 return true;
			  }
</script>
<form name="frmOne" class="profile-picture surround" action="exeadddatakpipp.php?deptId=<?php echo $deptId;?>" method="post" enctype="multipart/form-data">
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
							
	<div class="field-row" style="display:none">
                            <label for="kpiId">KPI ID</label>

                            <div>
                                <input id="kpiId" maxlength=
                                "150" name="kpiId" style="width:335px" type="text" value="<?php echo $tempkpi ['kpiId']; ?>" readonly>
                            </div>
                        </div>
						
                        <div class="field-row">
                            <label for="kpiName">KPI Name</label>

                            <div>
                                <input id="kpiName" maxlength=
                                "150" name="kpiName" style="width:335px" type="text" value="<?php echo $tempkpi ['kpiName']; ?>" readonly>
                            </div>
                        </div>


                        <div class="field-row" >
                            <label for="kpiFormula">KPI Formula</label>

                            <div>
                                <input id="kpiFormula" maxlength=
                                "150" name="kpiFormula" style="width:335px" type="text" value="<?php echo $kpi ['fFormula']; ?>" readonly>
                            </div>
                        </div>
							
						<?php
	
							if(!$kpi['fA']==""){
								echo ' 
								<div class="field-row">
									<label for="dkA" >'.$kpi['fA'].'</label>
									<div>
									<input type="text" name="dkA" onkeyup="'.$kpi['fFunction'].'(this.value)" onkeypress="return event.charCode >= 48 && event.charCode <= 57" style="width:335px" required="required" />
									</div>
								</div>';
								
							}
							if(!$kpi['fB']==""){
								echo ' 
								<div class="field-row">
									<label for="dkB">'.$kpi['fB'].'</label>
									<div>
									<input type="text" name="dkB" onkeyup="'.$kpi['fFunction'].'(this.value)" onkeypress="return event.charCode >= 48 && event.charCode <= 57" style="width:335px" required="required" />
									</div>
								</div>';
								
							}
							if(!$kpi['fC']==""){
								echo ' 
								<div class="field-row">
									<label for="dkC">'.$kpi['fC'].'</label>
									<div>
									<input type="text" name="dkC" onkeyup="'.$kpi['fFunction'].'(this.value)" onkeypress="return event.charCode >= 48 && event.charCode <= 57" style="width:335px"  required="required"/>
									</div>
								</div>';
								
							}
							if(!$kpi['fD']==""){
								echo ' 
								<div class="field-row">
									<label for="dkD">'.$kpi['fD'].'</label>
									<div>
									<input type="text" name="dkD" onkeyup="'.$kpi['fFunction'].'(this.value)" onkeypress="return event.charCode >= 48 && event.charCode <= 57" style="width:335px" required="required" />
									</div>
								</div>';
								
							}
							
						?>
						
						<div class="field-row" >
                            <label for="dkResult">Result</label>
								
                            <div>
                                <input type = "Text" name = "dkResult" size = "35" value ="" style="width:335px" readonly>
                            </div>
                        </div>
							
						<div class="submit-row">
                            <label></label>	
							<div>
                                <input class="button-green" name="btn-signup" type="submit" value="Save Changes" onclick="return confirm('Once submitted, you cannot edit the data. Do you still want to continue?');" >
                            </div>
                        </div>
                    </div>
</form>