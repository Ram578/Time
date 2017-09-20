<?php include 'admin_header.php'; ?>
	<script type="text/javascript">
		var strBaseURL = "<?=base_url();?>";
	</script>
	
		<!-- Admin Dashboard Starts here -->
			<!-- Header goes here -->
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="uploadQuestionspage container">
					<div class="navbar-header">
					  <a class="navbar-brand" href="#">Dashboard</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav" style="float:none;">
							<li><a href="<?=base_url();?>userslist">Users List</a></li>
							<li><a href="<?=base_url();?>usertestresult">Test Result</a></li>
							<li class="dropdown active">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Test Questions<span class="caret" style="margin-left:10px;"></span></a>
								<ul class="dropdown-menu navbar-inverse" >
									<li><a href="<?=base_url();?>uploadquestions">Upload Test Item</a></li>
									<li><a href="<?=base_url();?>uploadquestions/display_questions_order">Display Order</a></li>
								</ul>
							</li>
							<li><a href="<?=base_url();?>certilescores">Certile Scores</a></li>
							<li><a href="<?=base_url();?>subscores">Sub Scores</a></li>
							<li class="pull-right"><a href="<?=base_url();?>admindashboard/logout">Log Out</a></li>
						</ul>
					</div><!--/.nav-collapse -->
			  </div>
			</nav>
			<!-- Header ends here -->
			<!-- Body Content goes here -->
			<!-- Practice Questions sorting list section start -->
			<div class="saveBtn">
				<a id="saveQuestionOrder" class="btn btn-primary pull-right col-md-1 col-sm-1" style="width:150px; min-width:inherit; margin:0px 15% 2% 0px;">Save</a>
			</div>
		<!--	<section class="adminDashboardView">
				<div class="DisplayQuestionsOrder container">
					<h3>Practice Questions:</h3>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h1 class="panel-title">Sorting List</h1>
									</div>
									<div id="container1" class="panel-body box-container">
										<ul id="practiceSortable" class="list-group">
											<?php
												// foreach($questions['practice'] as $row)
												// {
											?>
												<li class="list-group-item" id="<?//=$row['id'];?>"><?//=$row['questioncode'];?>-<?//=$row['audiofilename'];?></li>
											<?php
												// }
											?>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> -->
			<!-- Practice Questions sorting list section end -->
			<!-- Test Questions sorting list section start -->
			<section class="adminDashboardView">
				<div class="DisplayQuestionsOrder container">
					<h3>Test Questions:</h3>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h1 class="panel-title">Sorting List</h1>
									</div>
									<div id="container1" class="panel-body box-container">
										<ul id="testSortable" class="list-group">
											<?php
												foreach($questions['test'] as $row)
												{
											?>
												<li class="list-group-item" id="<?=$row['id'];?>"><?=$row['serial_number'];?> - <?=$row['audiofilename'];?></li>
											<?php
												}
											?>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Test Questions sorting list section end -->
			<!-- Body Content ends here -->
		<!-- Admin Dashboard ends here -->
	<script type="text/javascript" src="<?=base_url();?>resources/js/questionupload.js"></script>
<?php include 'admin_footer.php'; ?>