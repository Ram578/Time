<?php include 'admin_header.php'; ?>
	<script type="text/javascript">
		var strBaseURL = "<?=base_url();?>";
		var arrQuestions = <?php echo json_encode($Questions); ?>
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
			<section class="adminDashboardView">
				<div class="UploadQuestionsList container">
					<div class="pull-right" style="color:#a94442; font-size:13px; padding:0 0 10px 0;">
						<?php
							print_r($this->session->flashdata('Errors'));
						?>
					</div>
					<div>
						<a id="btnNewQuestion" class="btn btn-primary pull-right col-md-1 col-sm-1" data-toggle="modal" data-target="#myModal" style="width:150px; min-width:inherit; margin-bottom:2%;">New Question</a>
					</div>
					<div class="testupload-data-view">
						<table width="100%" id="uploadQtnsList" cellspacing="0" cellpadding="0" class="table table-responsive table-striped">
							<thead>
								<tr>
									<th>S.No.</th>
									<th>Item No</th>
									<th>Audio</th>
									<th>Actual Answer</th>
									<th>Actions</th>
									<th>Active</th>
									<th>Includein Scoring</th>
								</tr>
							</thead>
							<tbody>
								<?php
									foreach($Questions as $key => $question)
									{

										$intQuestionID = $question['id'];
										$intIncludeInScore = $question['includeinscoring'];
								?>
									<tr>
										<td><?=$question['serial_number'];?></td>
										<td><?=$question['questioncode'];?></td>
										<td><?=$question['audiofilename'];?></td>
										<td><?=$question['answer'];?></td>
										<td>
											<button type="button" class="btn btn-default btn-xs editBtn" title="Edit" data-id="<?=$question['id'];?>" data-toggle="modal" data-target="#myModal">
												<span class="glyphicon glyphicon-pencil"></span>
											</button>
											<button type="button" class="btn btn-default btn-xs deleteBtn" title="Delete" data-id="<?=$question['id'];?>">
												<span class="glyphicon glyphicon-trash"></span>
											</button> 
										</td>
										<td class="text-center">
											<input type="checkbox" id="activeQuestion" name="active" <?php if($question['active']){ echo "checked"; } ?> data-id="<?=$question['id'];?>" />
										</td>
										<td class="text-center">
											<input type="checkbox" id="includeinQuestion" name="includeinscoring" <?php if($question['includeinscoring']){ echo "checked"; } ?> data-id="<?=$question['id'];?>" />
										</td>
									</tr>
								<?php
									}
								?>
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
						<h4 class="modal-title" id="myModalLabel">New Question</h4>
					</div>
					<div class="modal-body">
						<form role="form" id="uploadQuesForm" enctype="multipart/form-data">
							<input type="hidden" name="id" value="-1" id="hdnQuestionID">
							<input type="hidden" name="new_or_edit" value="new" id="newOrEdit">
							<div class="row">
								<div class="col-md-6 col-sm-12 col-xs-12">
									<div class="form-group">
										<label for="uploadFile">Item Code:</label>
										<input type="text" class="form-control" id="quesItemCode" name="questioncode" placeholder="Item Code" value="" />
									  </div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<div class="form-group">
										<label for="email">Choose Correct Answer:</label>
										<select name="answer" id="cboCorrectAnswer" class="form-control">
											<option value="-1"></option>
											<option value="1">1</option>
											<option value="2">2</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-12 col-xs-12">
									<div class="form-group">
										<label for="serialNumber">Serial No.</label>
										<input type="text" class="form-control" id="serialNumber" name="serial_number" placeholder="1" value="" />
									  </div>
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12" id="uploadQuesDiv">
									<div class="form-group">
										<label for="uploadFile">Please Upload Audio:</label>
										<input type="file" name="audioname" id="sleFile" class="form-control" />
									</div>
								</div>
							</div>
							<div align="center">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	<script type="text/javascript" src="<?=base_url();?>resources/js/questionupload.js"></script>
<?php include 'admin_footer.php'; ?>