<?php include 'admin_header.php'; ?>
	<script type="text/javascript">
		var strBaseURL = "<?=base_url();?>";
	</script>
		<!-- Admin Dashboard Starts here -->
			<!-- Header goes here -->
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">Dashboard</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav" style="float:none;">
							<li><a href="<?=base_url();?>userslist">Users List</a></li>
							<li><a href="<?=base_url();?>usertestresult">Test Result</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Test Questions<span class="caret" style="margin-left:10px;"></span></a>
								<ul class="dropdown-menu navbar-inverse">
									<li><a href="<?=base_url();?>uploadquestions">Upload Test Item</a></li>
									<li><a href="<?=base_url();?>uploadquestions/display_questions_order">Display Order</a></li>
								</ul>
							</li>
							<li><a href="<?=base_url();?>certilescores">Certile Scores</a></li>
							<li class="active"><a href="<?=base_url();?>subscores">Sub Scores</a></li>
							<li class="pull-right"><a href="<?=base_url();?>admindashboard/logout">Log Out</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</nav>
			<!-- Header ends here -->
			<!-- Body Content goes here -->
			<section class="adminDashboardView">
				<div class="subScoresView container">
					<div class="testupload-data-view" id="checked">
						<?php 
							if($subscore_status['subscore_check'])
							{
								$subscore_status_code = "yes"; 
							}
							else {
								$subscore_status_code = "no";
							}
							// if($subscore_status['subscore_check']){ echo "unchecked"; }
						?>
						<label> Activate Subscore?</label >
						<label style="padding-left:10px;">Yes</label>
						<input type="radio" class="status" name="active" value="yes" <?php echo $subscore_status_code == "yes"?"checked":""; ?>> 
						<label style="padding-left:10px;"> No</label>
						<input type="radio" class="status" name="active" value="no" <?php echo $subscore_status_code == "no"?"checked":""; ?>> 
					</div>
					
					  <div>
						<a id="btnAddRow" class="btn btn-primary pull-right col-md-1 col-sm-1" data-toggle="modal" data-target="#myModal"   style="width:130px; min-width:inherit; margin-bottom:2%;"> Add Subscore </a>
						</div>
						 <table width="100%" id="subScoresList" cellspacing="0" cellpadding="0" class="table table-responsive table-striped">
							<thead>
								<tr>
									<th>Questions</th>
									<th>Score Range</th>
									<th>Status</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($sub_scores as $row): ?>
									<tr>
										<td><?=$row['questions'];?></td>
										<td><?=$row['score_range'];?></td>
										<td class="text-center">
											<input type="checkbox" id="activeSubscores" name="active" <?php if($row['subscore_status']){ echo "checked"; } ?> data-id="<?=$row['id'];?>" />
										</td>
										<td>
											<button type="button" class="btn btn-default btn-xs editBtn" title="Edit" data-id="<?=$row['id'];?>" data-toggle="modal" data-target="#myModal">
												<span class="glyphicon glyphicon-pencil"></span>
											</button>
											<button type="button" class="btn btn-default btn-xs deleteBtn" title="Delete" data-id="<?=$row['id'];?>">
												<span class="glyphicon glyphicon-trash"></span>
											</button> 
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</section>
			<!-- Body Content ends here -->
		<!-- Admin Dashboard ends here -->
		
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Add SubScore</h4>
					</div>
					<div class="modal-body">
						<form role="form" id="addOrEditRow">
							<input type="hidden" id="id" name="id" value="" />
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<div class="form-group">
										<label for="">Questions</label>
										<input type="text" id="questions" class="form-control" placeholder="" value="" />
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<div class="form-group">
										<label for="">Score Range</label>
										<input type="text" id="score-range" class="form-control" placeholder="" value="" />
									</div>
								</div>
							</div>
							<div align="center">
								<button type="submit" name="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="<?=base_url();?>resources/js/subScores.js"></script>
<?php include 'admin_footer.php'; ?>