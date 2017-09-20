<?=$Header;?>
<script type="text/javascript">
	var arrQuestions = <?php echo json_encode($Questions); ?>;
	var subScores = <?php echo json_encode($subscores); ?>;
	var subscore_status = <?php echo json_encode($subscore_status); ?>;
</script>
<?php 
	//var_dump($Questions);
?>
<!-- Body content goes here -->
	
	<section class="intro-wrapper tonal-test-wrapper">
		<div class="container">
			<?php foreach($Questions as $key=>$question){ if($key == 0){ ?>
			<div class="row" id="tonal-test" style="display:none;">
				<input type="hidden" id="hdnQuestionNo" value="<?=$key;?>" />

			 <!-- When the page loads Audio will auto play -->
                <audio id="TestAudioData" class="audio-control" controls="controls" runat="server" autoplay>
                    <source id="srcAudioPath" src='<?php echo base_url().$question["audiopath"];?>' ></source>
                </audio>
				
				<!-- Audio Play count list -->
				<!-- show test item code -->
				<h1 id="h1QuestionCode" class="text-center color-white"><?=$question['serial_number'];?></h1>
				
				<!-- Acutal test starts here -->
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="tonal-test-view text-center swiper-slide">
							<div class="option-view">
								<input data-role-id="<?=$question['id'];?>" data-role-option="1" id="id_1" type="radio" name="SelectOption" class="radiobtn-custom-green custom-radio-button" />
								<label id="lbl_1" for="id_1" class="btn-green">Longer</label>
							</div>
							<div class="option-view">
								<input data-role-id="<?=$question['id'];?>" data-role-option="2" id="id_2" type="radio" name="SelectOption" class="radiobtn-custom-green custom-radio-button" />
								<label id="lbl_2" for="id_2" class="btn-green">Shorter</label>
							</div>
						</div>
					</div>
				</div>
				 <!-- Actual test ends here -->
				 
				<div class="alert alert-danger text-center col-md-6 col-sm-6 col-xs-6 col-md-offset-3 col-sm-offset-3 col-xs-offset-3" style="display:none; position:absolute;">
				  <strong>Why haven’t you made a response! <br> Make a guess!</br></strong> 
				</div>
				<div class="alert alert-warning text-center col-md-4 col-sm-4 col-xs-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4" style="display:none; position:absolute;">
				  <strong> You have not answered the last problem. <br> <br> If you are having a problem and cannot continue, please talk to an AIMS staff member <font size="4"> Immediately! </font> </strong> 
				</div>
            </div>
            <?php } } ?>
			
			<div class="intro-screen-01  col-md-12 col-sm-12 col-xs-12 text-center">
                <a id="fullscreen" class="next-button">Start</a>
            </div>
		 </div>
		
		<div class="NextButtonWrapper" style="display:none;">
			<button id="test-completed">Test Completed</button>
			<a id="aNextButtonWrapper" href="<?php echo base_url().'thankyou';?>" ><?php echo "Finish"; ?></a> 
		</div>
	</section>
<!-- Body content ends here -->

<!-- JS files will load here -->
<script type="text/javascript" src="<?=base_url();?>resources/js/Itemtest.js"></script>
<?=$Footer;?>