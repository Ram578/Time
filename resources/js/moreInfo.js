    $('document').ready(function(){
		
		//
		var innerHTML = "<source src='audio/moreinfo/1.mp3'></source>";
		ctrlaudio.InnerHtml = innerHTML;
		//ctrlcount.InnerHtml = innerHTML;
		hdTuneNames = "audio/moreinfo/1.mp3" + "," + "audio/moreinfo/2.mp3";
		hdImgNames = "img/moreinfo/1.jpg" + "," + "img/moreinfo/2.jpg";
		
		$(function () {
		 //Find the audio control on the page
		   var audio = document.getElementById('ctrlaudio');
		   var ImgCount = document.getElementById('ctrlcount');
		   //songNames holds the comma separated name of songs
		   var TuneNames = hdTuneNames;
		   var ImgNames = hdImgNames;
		   var lstTuneNames = TuneNames.split(',');
		   var lstImgNames = ImgNames.split(',');
		   var curPlaying = 0;
		   var ImgPlaying = 0;
		   // Attaches an event ended and it gets fired when current playing song get ended
		   audio.addEventListener('ended', function() {
			//alert(lstTuneNames.length);
			   if (curPlaying + 1 == lstTuneNames.length ) {
					setTimeout(function(){
						window.location.href = $("#tonal-start").attr('href');
					},2000);
			   }
				
			   var urls = audio.getElementsByTagName('source');
			   // Checks whether last song is already run
			   if (urls[0].src.indexOf(lstTuneNames[lstTuneNames.length - 1]) == -1) {
				   //replaces the src of audio song to the next song from the list
				   urls[0].src = urls[0].src.replace(lstTuneNames[curPlaying], lstTuneNames[++curPlaying]);
				   //Loads the audio song
				   audio.load();
				   //Plays the audio song
				   audio.play();
				}
				
				 var Imgurls = ImgCount.getElementsByTagName('img');
			   // Checks whether last song is already run
			   if (Imgurls[0].src.indexOf(lstImgNames[lstImgNames.length - 1]) == -1) {
				   //replaces the src of audio song to the next song from the list
				   Imgurls[0].src = Imgurls[0].src.replace(lstImgNames[ImgPlaying], lstImgNames[++ImgPlaying]);
				  
				}
				
			 });
	   });
	});