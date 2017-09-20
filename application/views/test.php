<?=$Header;?>	
<script type="text/javascript">
	var arrQuestions = <?php echo json_encode($Questions); ?>
</script>
<body>

<div class="container-fluid animation" style="background-color:gray; width:100%; height:100vh;">
 
		 <div class="row" style = "margin-top:15%;">
			<div class="col-sm-4 col-md-offset-4" style="background-color:lightblue; width:3%; height:35px;"></div>
		 </div>
		 <div class="row" style = "margin-top:15px;">
			<div class="col-sm-4 col-md-offset-4" style="background-color:lightblue; width:7%; height:35px;"></div>
		 </div>
		 <div class="row" style = "margin-top:15px;">
			<div class="col-sm-4 col-md-offset-4" style="background-color:lightblue; width:13%; height:35px;"></div>
		 </div>
		 <div class="row" style = "margin-top:15px;">
			<div class="col-sm-4 col-md-offset-4" style="background-color:lightblue; width:20%;height:35px;"></div>
		 </div>
		 <div class="row" style = "margin-top:15px;">
			<div class="col-sm-4 col-md-offset-4" style="background-color:lightblue; width:26%; height:35px;"></div>
		 </div>
</div>

</body>
  <script type="text/javascript" src="<?=base_url();?>resources/js/nextbranch.js"></script>
<?=$Footer;?>