<?php

include_once 'dbconnect.php';
$printdate = date('Y-m-d',strtotime("+3 days"));
$deptId = $_GET['deptId'];
?>
<form class="profile-picture surround" action="exeaddreportpp.php?deptId=$deptId" method="post">
                    

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
                            
                        <div class="field-row" style="margin-bottom: 10px">
                            <label for="deptId">Department</label>

                            <div style="width:250px;">
                                <select name="deptId">
                                    <?php       
                                        $res2=mysql_query("SELECT * FROM departments WHERE deptId=$deptId");
                                
                                        while($depts=mysql_fetch_assoc($res2)){
                                                echo '
                                                    <option value="'.$depts['deptId'].'">
                                                        '.$depts['deptName'].'
                                                    </option>
                                                    ';
                                                }       

                                        ?>
                                </select>
                            </div>
                        </div>


                        <div class="field-row">
                            <label for="reportName">Project/Task Particulars</label>

                            <div>
                                <input data-val="true" data-val-required="Task is required." id="reportName" maxlength=
                                "150" name="reportName" style="width:335px" type="text" value=""> <span class=
                                "field-validation-valid" data-valmsg-for="reportName" data-valmsg-replace=
                                "true"></span>
                            </div>
                        </div>


                        <div class="field-row" style="margin-bottom: 10px">
                            <label for="reportStatus">Status</label>

                            <div style="width:250px;">
                                <select name="reportStatus">
                                    <option value="Not Started">
                                        Not Started
                                    </option>

                                    <option value="On-going">
                                        On-going
                                    </option>

                                    <option value="Complete">
                                        Complete
                                    </option>
                                </select>
                            </div>
                        </div>


                        <div class="field-row">
                            <label for="reportDate">Due Date</label>

                            <div>
                                <input autocomplete="off" id="reportDate" maxlength="150" name="reportDate" style=
                                "width:335px" type="date" value="<?php echo $printdate;?>"> <span class="field-validation-valid"
                                data-valmsg-for="reportDate" data-valmsg-replace="true"></span>
                            </div>
                        </div>


                        <div class="field-row">
                            <label for="reportStep">Next Step</label>

                            <div>
                                <input id="reportStep" maxlength="150" name="reportStep" style="width:335px" type=
                                "text" value="">
                            </div>
                        </div>


                        <div class="field-row">
                            <label for="reportConcern">Challenges/Concerns</label>

                            <div>
                                <input id="reportConcern" maxlength="150" name="reportConcern" style="width:335px"
                                type="text" value="">
                            </div>
                        </div>


                        <div class="field-row" style="margin-bottom: 10px">
                            <label for="reportLevel">Critical Level</label>

                            <div style="width:250px;">
                                <select name="reportLevel">
                                    <option value="low">
                                        Low
                                    </option>

                                    <option value="medium">
                                        Medium
                                    </option>

                                    <option value="high">
                                        High
                                    </option>
                                </select>
                            </div>
                        </div>


                        <div class="submit-row">
                            <label></label>

                            <div>
                                <input class="button-green" name="btn-signup" type="submit" value="Save Changes">
                            </div>
                        </div>
                    </div>
                </form>