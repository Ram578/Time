var showAlert;

var swiper;

var showGuessAlert;

function fnSaveUserAnswer(questionid, selectedoption)
{
	$.ajax({
		'type'		: 'POST',
		'url'		: strBaseURL+'tonaltest/saveuseranswer', 
		'ajax' 		: true,
		'data' 		: { questionid : questionid, selectedoption : selectedoption },
		'success' 	: function(){},
		'failure' 	: function(){}
	});
}

function fnShowAlert() {
	clearInterval(showAlert);

	clearTimeout(showGuessAlert);

	$('.alert-danger').fadeIn().delay(3000).fadeOut(100);
			
	showGuessAlert = setTimeout(function(){
		$('.alert-warning').fadeIn().delay(9000).fadeOut(100);
	}, 12000);
}

//
$('document').ready(function()
{
	function disableF5(e) { if ((e.which || e.keyCode) == 116 || (e.which || e.keyCode) == 82) e.preventDefault(); };

	$(document).on("keydown", disableF5);
	
	// More Info Audio
	setTimeout(function(){
		$(function () {
		 //Find the audio control on the page
			var audioPlay = document.getElementById('TestAudioData');
		  // Attaches an event ended and it gets fired when current playing song get ended
			audioPlay.addEventListener('ended', function() {

		   		clearInterval(showAlert);

				clearTimeout(showGuessAlert);
				
				//Enable the radio buttons
				$(":radio[name='SelectOption']").attr("disabled", false);
				
				$('.tonal-test-wrapper .tonal-test-view .option-view label').css('pointer-events','inherit');
				
				if((parseInt($("#hdnQuestionNo").val())) == 0 || (parseInt($("#hdnQuestionNo").val())) == 1) {
					$('[data-img-id="1"], [data-img-id="2"]').hide();
					$('.tonal-test-view').show();
				}
				
				showAlert = setInterval(function(){
					fnShowAlert();
				},8000);
			});
	   });
	},200);

	$('.swiper-container').on('click', "input.custom-radio-button", function()
	{
		if(parseInt($("#hdnQuestionNo").val()) == 0) 
		{
			$('[data-img-id="2"]').show();
			$('.tonal-test-view').hide();
		}
		else if((parseInt($("#hdnQuestionNo").val())+1) == 2) 
		{			
			$('[data-img-id="2"]').hide();
			$('[data-role-option="1"] + label').text('Higher');
			$('[data-role-option="2"] + label').text('Lower');
			
			//Add swiper to the practice test questions.
			swiper = new Swiper('.swiper-container', {
				loop: true,
				slidesPerView: 1,
				simulateTouch: false
			});
			
		}
		
		if(!$("input.custom-radio-button:checked").val())
		{
			fnShowAlert();			
		}
		else
		{
			clearInterval(showAlert);

			clearTimeout(showGuessAlert);

			fnSaveUserAnswer($("input.custom-radio-button:checked").attr("data-role-id"), $("input.custom-radio-button:checked").attr("data-role-option"));
			
			//Disable the radio buttons
			$(":radio[name='SelectOption']").attr("disabled", true);
			
			setTimeout(function(){

				if((parseInt($("#hdnQuestionNo").val())+1) == arrQuestions.length)
				{
					setTimeout(function(){
						window.location.href = $("#tonal-more-branch").attr('href');
					},2000);
				}
				else if((parseInt($("#hdnQuestionNo").val())+1) > 2) 
				{
					swiper.slideNext(null, 800);
				}

				var intNextQuestion = parseInt($("#hdnQuestionNo").val())+1;

				if(arrQuestions.length > intNextQuestion)
				{
					$("#hdnQuestionNo").val(intNextQuestion);
					
					$("#TestAudioData").attr('src', strBaseURL+arrQuestions[intNextQuestion].audiopath);

					$("input.custom-radio-button").attr("checked",false);
					
					//Change the data-role-id for Current Question id.
					$("#id_1").attr('data-role-id', arrQuestions[intNextQuestion].id);
					$("#id_2").attr('data-role-id', arrQuestions[intNextQuestion].id);
					
					$('.tonal-test-wrapper .tonal-test-view .option-view label').css('pointer-events','none');

					audioPlay1 = document.getElementById('TestAudioData');

					audioPlay1.play();

					$("#h1QuestionCode").html(arrQuestions[intNextQuestion].questioncode);
				}
		
			}, 1000);
		}
	});
				   
});