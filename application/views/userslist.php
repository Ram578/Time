<?php include 'admin_header.php'; ?>
	<script type="text/javascript">
		var strBaseURL = "<?=base_url();?>";
	</script>
		<!-- Admin Dashboard Starts here -->
			<!-- Header goes here -->
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<a class="navbar-brand" href="<?=base_url();?>admindashboard">Dashboard</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav" style="float:none;">
							<li class="active"><a href="<?=base_url();?>userslist">Users List</a></li>
							<li><a href="<?=base_url();?>usertestresult">Test Result</a></li>
							<?php 
								$status = $this->session->userdata['EmployeeRole'];
								if($status == "admin") {
							?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Test Questions<span class="caret" style="margin-left:10px;"></span></a>
								<ul class="dropdown-menu navbar-inverse">
									<li><a href="<?=base_url();?>uploadquestions">Upload Test Item</a></li>
									<li><a href="<?=base_url();?>uploadquestions/display_questions_order">Display Order</a></li>
								</ul>
							</li>
							<li><a href="<?=base_url();?>certilescores">Certile Scores</a></li>
							<li><a href="<?=base_url();?>subscores">Sub Scores</a></li>
							<?php
								}
							?>
							<li class="pull-right"><a href="<?=base_url();?>admindashboard/logout">Log Out</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</nav>
			<!-- Header ends here -->
			<!-- Body Content goes here -->
			<section class="adminDashboardView">
				<div class="UserListView container">
					<div>
						<a id="btnExport" class="btn btn-primary pull-right col-md-1 col-sm-1" target="_blank" href="<?=base_url();?>userslist/export" style="width:150px; min-width:inherit; margin-bottom: 2%;"> Export </a>
					</div>
					<table width="100%" id="tblCustomerList" cellspacing="0" cellpadding="0" class="table table-responsive table-striped">
						<thead>
							<tr>
								<th>Age</th>
								<th>Gender</th>
								<th>File Number</th>
								<th>Joined Date</th>
								<th>Completed Date</th>
								<th>Score</th>
								<th>Certile</th>
							</tr>
						</thead>
						<tbody>
							<?php
								foreach($Users as $user){
							?>
								<tr>
									<td><?=$user['age'];?></td>
									<td><?=$user['gender'];?></td>
									<td><?=$user['filenumber'];?></td>
									<td><?=$user['addeddate'];?></td>
									<td><?=$user['completeddate'];?></td>
									<td><?=$user['score'];?></td>
									<td><?=$user['certile'];?></td>
								</tr>
							<?php
								}
							?>
						</tbody>
					</table>
				</div>
			</section>
			<!-- Body Content ends here -->
		<!-- Admin Dashboard ends here -->
		
		<!-- JS file  -->
		<script type="text/javascript" src="<?=base_url();?>resources/js/userslist.js"></script>
<?php include 'admin_footer.php'; ?>