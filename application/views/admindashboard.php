<!DOCTYPE html>
<!--[if lt IE 7]>   <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>      <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>      <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>      <html class="no-js ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		 <title>AIMs - Admin Dashboard</title>
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link href="<?=base_url();?>resources/css/cssBundle.css" rel="stylesheet" />
		<link href="<?=base_url();?>resources/css/admin.css" rel="stylesheet" />
		<script src="<?=base_url();?>resources/js/modernizr-2.6.2.min.js"></script>
		</head>
	<body>
		
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
					<li><a href="<?=base_url();?>uploadquestions">Upload Test Item</a></li>
					<li class="pull-right"><a href="<?=base_url();?>admindashboard/logout">Log Out</a></li>
				  </ul>
				</div><!--/.nav-collapse -->
			  </div>
			</nav>
			<!-- Header ends here -->
			<!-- Body Content goes here -->
			<section class="adminDashboardView">
				<div class="UserListView container">
						<table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered">
							<thead>
							<tr>
								<th width="20%">First Name</th>
								<th width="20%">Last Name</th>
								<th width="15%">Age</th>
								<th width="15%">Gender</th>
								<th width="15%">File Number</th>
								<th width="15%">Joined Date</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>Ravi</td>
								<td>Chandra</td>
								<td>24</td>
								<td>Male</td>
								<td>D-2016-2016</td>
								<td>2016-07-19 17:07:28</td>
							</tr>
							<tr>
								<td>Ravi</td>
								<td>Chandra</td>
								<td>24</td>
								<td>Male</td>
								<td>D-2016-2016</td>
								<td>2016-07-19 17:07:28</td>
							</tr>
							</tbody>
						</table>
				</div>
			</section>
			<!-- Body Content ends here -->
		<!-- Admin Dashboard ends here -->
		
		<!-- JS files will load here -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		
	</body>
</html>