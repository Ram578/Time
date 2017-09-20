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
     <title>AIMs - Admin Panel</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link href="<?=base_url();?>resources/css/cssBundle.css" rel="stylesheet" />
	<link href="<?=base_url();?>resources/css/intro.css" rel="stylesheet" />
    <script src="<?=base_url();?>resources/js/modernizr-2.6.2.min.js"></script>
</head>
<body>
	<div class="intro-wrapper registrer-wrapper">
	<!-- Registration Block goes here -->
        <form class="form-horizontal col-lg-4 col-md-5 col-sm-6 col-xs-6" role="form" id="AdminLoginForm" action="admin/login" method="POST" autocomplete="false">
			<div class="pull-right" style="color:#a94442; font-size:13px; padding:0 0 10px 0;">
				<?php
					echo $this->session->flashdata('Errors');
				?>
			</div>
			<div class="clearfix"></div>
            <!--h2>Registration Form</h2-->
			<div class="form-group">
				<label for="Username" class="">User Name : </label>
				<input type="text" id="Username" placeholder="User Name" class="form-control" maxlength="8" minlength="5" name="userame" autocomplete="off" />
			</div>
			<div class="form-group">
				<label for="Password" class="">Password : </label>
				<input type="password" id="Password" placeholder="Password" class="form-control" maxlength="8" minlength="5" name="password" autocomplete="off"  />
			</div>
			<div class="form-group">
				<button disabled="disabled" type="submit" id="LoginBtn" class="btn btn-primary btn-block">Login</button>
			</div>
        </form> <!-- /form -->
    	<!-- Registration Block ends here -->
		</div>
		<!-- JS files will load here -->
		<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		-->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="resources/js/formValidator.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#AdminLoginForm').bootstrapValidator({
					message: 'This value is not valid',
					fields: {
						username: {
							validators: {
								notEmpty: {
									message: 'The Username is required and can\'t be empty'
								},
								stringLength: {
									min: 5,
									max: 8,
									message: 'The username must be more than 5 and less than 8 characters long'
								},
								regexp: {
									regexp: /^[a-zA-Z0-9_\.]+$/,
									message: 'The firstname can only consist of alphabetical, number, dot and underscore'
								}
							}
						},
					   password: {
							validators: {
								notEmpty: {
									message: 'The Password is required and can\'t be empty'
								},
								stringLength: {
									min: 5,
									max: 8,
									message: 'The Password must be more than 5 and less than 8 characters long'
								}
								
							}
						}
					}
				});
			}); //document end
		</script>
	</body>
</html>