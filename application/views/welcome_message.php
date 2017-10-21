<?=$Header;?>	
	<!-- Body content goes here -->
	<section class="intro-wrapper">
			<div class="container">
				<div class="row">
					<!-- When the page loads Audio will auto play -->
					<audio id="ctrlaudio" controls="controls" runat="server" class="audio-control" autoplay display-type="image">
						   <source src='resources/audio/introduction/1.mp3'></source>
					</audio>
				<!-- Audio Play count list -->
				<!--<div class="ttl-view text-center">
					<h1>Instructions</h1>
				</div>  -->
					<div id="ctrlcount" class="text-center img-view">
						<img src="resources/img/introduction/1.jpg" alt="" title="" />
					</div>
					<!-- When the page loads the fourth screen will display this div -->
					<div class="content" id="divs" style="display:none; height:100%;">
						<div class="one" style="padding-top: 1em; padding-bottom:8em;">
							<div class="row" style="margin-top:10%;">
								<div class="col-xs-4 col-sm-4 col-md-4 col-xs-offset-4 col-sm-offset-4 col-md-offset-4 animate" id="demoa" style="width:3%;"></div>
							</div>
							<div class="row" style = "margin-top:30px;">
								<div class="col-xs-4 col-sm-4 col-md-4 col-xs-offset-4 col-sm-offset-4 col-md-offset-4 animate" id="demob" style="width:7%;"></div>
							</div>
							<div class="row" style = "margin-top:30px;">
								<div class="col-xs-4 col-sm-4 col-md-4 col-xs-offset-4 col-sm-offset-4 col-md-offset-4 animate" id ="democ" style=" width:13%;"></div>
							</div>
							<div class="row" style = "margin-top:30px;">
								<div class="col-xs-4 col-sm-4 col-md-4 col-xs-offset-4 col-sm-offset-4 col-md-offset-4 animate" id="demod" style="width:16%;"></div>
							</div>
							<div class="row" style = "margin-top:30px;">
								<div class="col-xs-4 col-sm-4 col-md-4 col-xs-offset-4 col-sm-offset-4 col-md-offset-4 animate" id="demoe" style="width:26%;"></div>
							</div>
						</div>
					</div>
								<!-- Auido Play count list ends here -->
							
						<!-- Next and New example Buttons will appear once the Audio will finish -->
						<!-- Screen to check next or new example -->
					<div class="intro-screen-01 col-md-8 col-sm-8 col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2" style="display:none;">
						<a href="nextbranch" class="next-button col-md-4 col-sm-4 col-xs-4 text-center col-md-offset-1 col-sm-offset-1 col-xs-offset-1" id="branch">NEXT</a>
						<a href="newexample" class="blue-button col-md-5 col-sm-5 col-xs-5 text-center col-md-offset-1 col-sm-offset-1 col-xs-offset-1">MORE EXAMPLES</a>
					</div>
					<!-- Screen to check next or new example ends -->
				</div>
			</div>
	</section>
	<!-- Body content ends here -->
	
	<!-- JS files will load here -->
	<script type="text/javascript" src="<?=base_url();?>resources/js/intro.js"></script>
<?=$Footer;?>
