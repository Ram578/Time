<?=$Header;?>
<!-- Body content goes here -->
	<section class="intro-wrapper nextbranch-view" style="background:#f4b081 url('resources/img/30.jpg');">
		<div class="container">
			<div class="row">
				<div class="thankyou-view">
					<div class="thankyou_01">
						<h1 class="result-header">Your Test Result</h1>
						<div class="text-center">
							<h1 class="result">
								You have completed the AIMS Time Discrimination exercise. You correctly answered <span class="score"><?=$CorrectAns;?></span> of the <span class="score"><?=$NoOfQtsAttempted;?></span> items.
							</h1>
							<h2 class="color-white result">
								This indicates that you have <span class="color:"><?=$Grade;?></span> Time Discrimination ability. 
							</h2>
						</div>
					</div>
					<div class="thankyou_02 text-center">
						<p class="color-white">Thank you for your effort!</p>
						<p class="color-white continue">Continue with any unfinished work..</p>
					</div>
				</div>
            </div>
		</div>
	</section>
<!-- Body content ends here -->
<!-- JS files will load here -->
<script type="text/javascript">
	$(document).ready(function(){
		
		$(".thankyou_01, .thankyou_02").hide();
		timer = setTimeout(function () {
			$('.thankyou_01').show();
		}, 100);
		timer = setTimeout(function () {
			$('.thankyou_02').show();
			$('.thankyou_01').hide();
		}, 15000);
			
		setTimeout(function(){
			$.ajax({
				'type'		: 'POST',
				'url'		: strBaseURL+'thankyou/logout', 
				'ajax' 		: true,
				'data' 		: {},
				'success' 	: function(response){ window.location.href = strBaseURL; },
				'failure' 	: function(){}
			});
		},25000);
	});
</script>
<?=$Footer;?>