<?php

include_once 'dbconnect.php';
$printdate = date('Y-m-d',strtotime("+3 days"));
$deptId = $_GET['deptId'];
$userId = $_GET['userId'];
	
	$tempres3=mysql_query("SELECT * FROM users WHERE userId = $userId");
	$tempkpi=mysql_fetch_assoc($tempres3);
	


?>

<script language="javascript">
			  function isNumberKey(evt)
			  {
				 var charCode = (evt.which) ? evt.which : event.keyCode
				 if (charCode > 31 && (charCode < 48 || charCode > 57))
					return false;

				 return true;
			  }
</script>
<form name="frmOne" class="profile-picture surround" action="exeadddataemployeepp.php?deptId=<?php echo $deptId;?>" method="post" enctype="multipart/form-data">
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
                            <label for="deResult">Enter CSF Score for <?php echo $tempkpi['Name']?></label>

                            <div>
                                <input id="deResult" maxlength="150" name="deResult" style="width:335px" type="text" value="" onkeypress='return event.charCode >= 48 && event.charCode <= 57'">
                            </div>
                        </div>

                        <div class="field-row" style="display:none">
                            <label for="userId">Enter CSF Score for <?php echo $tempkpi['Name']?></label>

                            <div>
                                <input id="userId" maxlength="150" name="userId" style="width:335px" type="text" value="<?php echo $userId; ?>" onkeyup="isNumberKey()">
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