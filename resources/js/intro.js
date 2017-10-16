    $('document').ready(function(){
		
		//Save the user response of clicking next or more examples
		//next -> 0 and more examples -> 1
		$(".container").on("click", ".next-button, .blue-button", function()
		{
			var btnText = $(this).text();
			
			$.ajax({
				'type'		: 'POST',
				'url'		: strBaseURL+'welcome/save_user_status', 
				'ajax' 		: true,
				'data' 		: { user_status : btnText },
				'success' 	: function(){},
				'failure' 	: function(){}
			});
		});
		
		//
		var innerHTML = "<source src='audio/introduction/1.mp3'></source>";
		ctrlaudio.InnerHtml = innerHTML;
		//ctrlcount.InnerHtml = innerHTML;
		hdTuneNames = "audio/introduction/1.mp3" + "," + "audio/introduction/2.mp3" + "," + "audio/introduction/3.mp3" + "," + "audio/introduction/4.mp3" + "," + "audio/introduction/5.mp3" + "," + "audio/introduction/6.mp3" + "," + "audio/introduction/7.mp3" + "," + "audio/introduction/8.mp3" + "," + "audio/introduction/9.mp3" + "," + "audio/introduction/10.mp3";
		hdImgNames = "img/introduction/1.jpg" + "," + "img/introduction/2.jpg" + "," + "img/introduction/3.jpg" + "," + "img/" + "," + "img/introduction/5.jpg" + "," + "img/introduction/6.jpg" + "," + "img/introduction/7.jpg" + "," + "img/introduction/8.jpg"  + "," + "img/introduction/9.jpg"  + "," + "img/introduction/10.jpg";
		
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
				// in welcome page screen of fourth is animated div to display
			   if (curPlaying + 1 == lstTuneNames.length ) {
					$('.intro-screen-01').show();
					$('.intro-wrapper .img-view').hide();
				   } else if(curPlaying + 1 == 3) {
						$('.intro-wrapper .img-view').hide();
						$('.content').show();
				   } else {
					   $('.content').hide();
					   $('.intro-wrapper .img-view').show();
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