$(document).ready(function(){
	
	$('#subScoresList').DataTable();
	
	//Add a new row
	$( ".subScoresView" ).on("click", "#btnAddRow", function() {
		$('#myModalLabel').text("New Subscore");
		//append the values to the edit form
		$('#id').val("");
		$('#questions').val("");
		$('#score-range').val("");
	});
	
	$( ".subScoresView" ).on("click", ".editBtn", function() {
		$('#myModalLabel').text("Edit Subscore");
		editId = $(this).data("id");
		currentRow  = $(this).closest('tr');
		var questions = currentRow.find("td:eq(0)").text();
		var scoreRange = currentRow.find("td:eq(1)").text();
		
		//append the values to the edit form
		$('#id').val(editId);
		$('#questions').val(questions);
		$('#score-range').val(scoreRange);
	});
	//modal form submit
	$("#addOrEditRow").submit(function(e) {
		e.preventDefault();
		var url = strBaseURL+'subscores/edit_subscores'; 
		var id = $('#id').val();
		var questions = $('#questions').val();
		var scoreRange = $('#score-range').val();
		if(questions != "" && scoreRange != "") {
			var formData = {
				'id' : id,
				'questions'    : questions,
				'score_range' : scoreRange
			}; 
	
			$.ajax({
				type: "POST",
				url: url,
				data: formData,
				success: function (result) {
					var data = JSON.parse(result);
					$("#myModal").modal('hide');
					if(data.success != "failed") {
						if(data.status == "update") {
							//get current row TD's & replace the text with the updated text
							currentRow.find("td:eq(0)").text(questions);
							currentRow.find("td:eq(1)").text(scoreRange);
							swal("Update!", data.message, "success");
						} else {
							location.reload(true);
							swal("Insert!", data.message, "success");
							// swal("Warning!", "Something went wrong.", "warning");
						}
					} else {
						swal("Warning!", "Something went wrong.", "warning");
					}
				},
				error: function (err) {
					console.log(err);
				}
			}); 
		} else {
			swal("Warning!", "Please fill out the empty fields.", "warning");
		}
	}); //on submit end
	
	// Save the sub scores active status on onchange event.
	$( ".subScoresView" ).on("change", "#activeSubscores", function(e) {
		var row_id = $(this).data("id");
		
		if ($(this).is(":checked"))
		{
			// it is checked
			var active = 1;
		} else {
			var active = 0;
		}
		
		$.ajax({
			'type'		: 'POST',
			'url'		: strBaseURL+'subscores/inactive_subscores', 
			'ajax' 		: true,
			'data' 		: { rowId : row_id, active : active },
			'success' 	: function(){},
			'failure' 	: function(){}
		});
		
	});
	
	
	$( ".subScoresView" ).on("click", ".deleteBtn", function() {
		var row_id = $(this).data("id");
		// var id = $(this).data("id");
		var row = $(this).closest('tr');
		
		// showing bootstrap sweet alert for confirming the item deleting.
		swal({
		  title: "Are you sure?",
		  text: "You will not be able to recover this item!",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonClass: "btn-danger",
		  confirmButtonText: "Delete",
		  closeOnConfirm: false
		},
		function(){
			var url = strBaseURL+'subscores/delete_row'; 
			var formData = {
				'id'  : row_id
			};
			$.ajax({
				type: "POST",
				url: url,
				data: formData,
				success: function (result) {
					console.log(result);
					if(result == "success") {
						row.remove();
						swal("Deleted!", "Your item has been deleted.", "success");
					} else {
						swal("Warning!", "Something went wrong.", "warning");
					}
				},
				error: function (err) {
					console.log(err);
				}
			}); 
		}); 
	}); 
	
	// added checkbox on subscores 
	$( ".testupload-data-view" ).on("click", ".status", function(e) {
		var url = strBaseURL+'subscores/subscore_subcheck'; 
		// if($(this).is(":checked"))
		
		if($(this).val() == "yes")
		{
			// it is checked
			var subscoreCheck = 1;
		} else {
			var subscoreCheck = 0;
		}
		
		var formData = {
				'active'  : subscoreCheck
			};
		
		$.ajax({
			'type'		: 'POST',
			'url'		: url, 
			'ajax' 		: true,
			'data' 		: formData,
			'success' 	: function(){},
			'failure' 	: function(){}
		});
		
	});
	
 });
	

