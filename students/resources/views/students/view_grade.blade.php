<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('dbcon.php'); ?>

    <div class="container">
		<div class="margin-top">
			<div class="row">	
				<?php include('head.php'); ?>
			<div class="span2">		
               <?php include('user_sidebar.php'); ?>
			</div>	
			<div class="span12" style="max-width:948px;margin-left: 50px;max-height: 100%">
			  		<?php
			  		
			$student_query="select * from students where student_id = '$session_id'";

			$vg = $conn ->query($student_query);

			$row = mysqli_fetch_array($vg);
			$school_year = $row['year_level'];
			$term = $row['term'];
			$student_status = $row['student_status'];
		
			?>
			<div class="name">
			
				<span>COURSE:<strong><?php echo $row['course']; ?></strong></span>
				<span id="print_right">
				<span><?php echo $row['year_level']; ?> :<strong> <?php echo $row['term']; ?> &nbsp; term</strong></span>
				<span>Status:<strong><?php echo $row['student_status']; ?> </strong></span>
				</span>
			</div>
		
			
			<hr>
			<?php include('grade_option.php'); ?>
			<hr>
			
			<div class="span2">
			<div id="add">
							
							
							
				<br>			
			</div>
			</div>
			<div class="span10">
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">                      
                                <thead>
                                    <tr>
                                        <th width="100">Course Code</th>
                                        <th width="400">Course Description</th>
                                        <th>Units</th>                                 
                                        <th>Gen Ave.</th>       
                                        <th>Remarks</th>       
                                     
												<!-- 
                                        <th>Term</th>                                                                                 
                                        <th>Year Level</th>                                                                                 
                                        <th>Remarks</th>                                                                                 
                                        <th>Action</th>
										
										-->
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query="select * from grade where student_id = '$session_id' and school_year = '$school_year' and semester = '$term' ";
                                  $vg1 = $conn ->query($user_query);

									while($row=mysqli_fetch_array($vg1)){
									$id=$row['grade_id'];
									$remarks = $row['remarks'];
									$subject_id = $row['subject_id'];
									/* subject */
									$subject_query = "select * from subject where subject_id = '$subject_id'";
									$vg2 = $conn ->query($subject_query);

									while($subject_row=mysqli_fetch_array($vg2)){
									?>
									<tr>
                                    <td><?php echo $subject_row['subject_code']; ?></td> 
                                    <td><?php echo $subject_row['subject_title']; ?></td> 
                                    <td><?php echo $subject_row['subject_unit']; ?></td>                                 
                                    <td width="100">
										<?php echo $row['gen_ave']; ?>
									</td>      
									<!--									
                                    <td><?php echo $row['semester']; ?></td>                                                                              
                                    <td><?php echo $row['school_year']; ?></td>    
									-->
								
									<?php if ($remarks == 'Very Good'){ ?>
									<td><span class="very_good"><?php echo $row['remarks']; ?></span></td>   
									<?php }else if($remarks == 'Excellent'){ ?>
									<td><span class="Excellent"><?php echo $row['remarks']; ?></span></td>   
									<?php }else if($remarks == 'Satisfactory'){ ?>  
									<td><span class="sat"><?php echo $row['remarks']; ?></span></td> 
									<?php }else if($remarks == 'Fair'){ ?>
									<td><span class="fair"><?php echo $row['remarks']; ?></span></td> 
									<?php }else if($remarks == 'Failed'){ ?>
									<td><span class="failed"><?php echo $row['remarks']; ?></span></td> 
									<?php }else if($remarks == 'Incomplete'){ ?>
									<td><span class="failed"><?php echo $row['remarks']; ?></span></td> 
									<?php }else if($remarks == 'Officially Dropped'){ ?>
									<td><span class="drop"><?php echo $row['remarks']; ?></span></td> 
									<?php }else if($remarks == 'Passed'){ ?>
									<td><span class="Excellent"><?php echo $row['remarks']; ?></span></td> 
									<?php }else if ($remarks == ''){ ?> 
										<td><?php echo $row['remarks']; ?></td> 
									 <?php } ?>
									 
									<?php include('toolttip_edit_delete.php'); ?>
                                  
									
                                    </tr>
									<?php  }}  ?>
									
									
								
                                </tbody>
								<tfoot>
									<?php include('units_table.php'); ?>
									<?php include('gwa_table.php'); ?>
									<?php include('cwa_table.php'); ?>
						
								</tfoot>
                            </table>
							
							
					

							