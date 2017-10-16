<?=$Header;?>	
	<!-- Body content goes here -->
	<section class="intro-wrapper">
			<div class="container">
				<div class="row">
					<!-- When the page loads Audio will auto play -->
					<audio id="ctrlaudio" controls="controls" runat="server" class="audio-control" autoplay>
						   <source src='resources/audio/moreinfo/1.mp3'></source>
					</audio>
				<!-- Audio Play count list -->
				<!--<div class="ttl-view text-center">
					<h1>Instructions</h1>
				</div>  -->
					<div id="ctrlcount" class="text-center img-view">
						<img src="resources/img/moreinfo/1.jpg" alt="" title="" />
					</div>
				<!-- Auido Play count list ends here -->
				
					<div class="intro-screen-01  col-md-12 col-sm-12 col-xs-12 	text-center" style="display:none;">
						<a id="tonal-start" href="<?php echo base_url() . "tonaltest";?>" class="next-button">Start</a>
					</div>
				</div>
			</div>
	</section>
	<!-- Body content ends here -->
	
	<!-- JS files will load here -->
	<script type="text/javascript" src="<?=base_url();?>resources/js/moreInfo.js"></script>
<?=$Footer;?>
