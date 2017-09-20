$(document).ready(function(){
	
	$('#certileScoresList').DataTable();
	
	//Clear the form values when click the add new row button
	$( ".CertileScoresView" ).on("click", "#btnAddRow", function(e) {
		$('#myModalLabel').text("New Row");
		$('#id').val("");
		$('#age').val("");
		$('#score').val("");
		$("input[name='sex']").attr("checked", false);
		$('#Male').attr('checked', 'checked');	
		$('#certile').val("");
	});
	
	
	//Edit the row
	$( ".CertileScoresView" ).on("click", ".editBtn", function() {
		editId = $(this).data("id");
		currentRow  = $(this).closest('tr');
		var age = currentRow.find("td:eq(0)").text();
		var gender = currentRow.find("td:eq(1)").text();
		var score = currentRow.find("td:eq(2)").text();
		var certile = currentRow.find("td:eq(3)").text();
		
		//append the values to the edit form
		$('#myModalLabel').text("Edit Row");
		$('#id').val(editId);
		$('#age').val(age);
		$('#score').val(score);
		$("input[name='sex']").attr("checked", false);
		$('#'+gender).attr('checked', 'checked');
		$('#certile').val(certile);
	});
	
	//modal form submit
	$("#addOrEditRow").submit(function(e) {
		e.preventDefault();
		var url = strBaseURL+'certilescores/add_or_edit_certile_scores'; 
		var id = $('#id').val();
		var age = $('#age').val();
		var gender = $('[name="sex"]:checked').val();
		var score = $('#score').val();
		var certile = $('#certile').val();
		
		// console.log(id+","+age+","+gender+","+score+","+certile);
		var formData = {
			'id' : id,
			'age'    : age,
			'gender' : gender,
			'score' : score,
			'certile' : certile
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
						currentRow.find("td:eq(0)").text(age);
						currentRow.find("td:eq(1)").text(gender);
						currentRow.find("td:eq(2)").text(score);
						currentRow.find("td:eq(3)").text(certile);
						swal("Update!", data.message, "success");
					} else {
						location.reload(true);
						swal("Insert!", data.message, "success");
					}
				} else {
					swal("Warning!", "Something went wrong.", "warning");
				}
			},
			error: function (err) {
				console.log(err);
			}
		 }); 
	});
	
	//Delete the row
	$( ".CertileScoresView" ).on("click", ".deleteBtn", function() {
		var itemId = $(this).data("id");
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
			var url = strBaseURL+'certilescores/delete_row'; 
			var formData = {
				'id'  : itemId
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
	
});
