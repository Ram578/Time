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
							<li class="active"><a href="<?=base_url();?>certilescores">Certile Scores</a></li>
							<li><a href="<?=base_url();?>subscores">Sub Scores</a></li>
							<li class="pull-right"><a href="<?=base_url();?>admindashboard/logout">Log Out</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</nav>
			<!-- Header ends here -->
			<!-- Body Content goes here -->
			<section class="adminDashboardView">
				<div class="CertileScoresView container">
					<div class="pull-right" style="color:#a94442; font-size:13px; padding:0 0 10px 0;">
						<?php
							print_r($this->session->flashdata('Errors'));
						?>
					</div>
					<div>
						<a id="btnAddRow" class="btn btn-primary pull-right col-md-1 col-sm-1" data-toggle="modal" data-target="#myModal" style="width:150px; min-width:inherit; margin-bottom:2%;"> Add Row </a>
					</div>
					<div class="testupload-data-view">
						<table width="100%" id="certileScoresList" cellspacing="0" cellpadding="0" class="table table-responsive table-striped">
							<thead>
								<tr>
									<th>Age</th>
									<th>Gender</th>
									<th>Score</th>
									<th>Certile</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($certile_scores as $row): ?>
									<tr>
										<td><?=$row['age'];?></td>
										<td><?=$row['gender'];?></td>
										<td><?=$row['score'];?></td>
										<td><?=$row['certile'];?></td>
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
						<h4 class="modal-title" id="myModalLabel">Add Row</h4>
					</div>
					<div class="modal-body">
						<form role="form" id="addOrEditRow">
							<input type="hidden" id="id" name="id" value="" />
							<div class="row">
								<div class="col-md-6 col-sm-12 col-xs-12">
									<div class="form-group">
										<label for="">Age</label>
										<input type="text" id="age" class="form-control" placeholder="" value="" />
									</div>
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12">
									<label class="control-label col-sm-4" style="padding-left:0;">Gender : </label><br/>
									<div class="col-md-6 col-sm-6 col-xs-6" style="width:100%;padding-top:2%;">
										<div class="row">
											 <div class="col-sm-5" style="padding-left:0;">
												<label class="radio-inline">
													<input type="radio" id="Male" name="sex" value="Male">Male
												</label>
											</div>
											<div class="col-sm-5">
												<label class="radio-inline">
													<input type="radio" id="Female" name="sex" value="Female">Female
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<div class="form-group">
										<label for="">Score</label>
										<input type="text" id="score" class="form-control" placeholder="" value="" />
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<div class="form-group">
										<label for="">Certile</label>
										<input type="number" id="certile" class="form-control" placeholder="" value="" />
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
		<script type="text/javascript" src="<?=base_url();?>resources/js/certileScores.js"></script>
<?php include 'admin_footer.php'; ?>