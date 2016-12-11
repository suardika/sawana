jQuery(function($){
	$("#recipe_rating").bind( "rated", function(){
		$(this).rateit("readonly", true );

		var formObj		=	{
			action: 		"r_rate_recipe",		
			rid: 			$(this).data("rid"),
			rating: 		$(this).rateit("value"),
		}

		// console.log(formObj);

		$.post( recipe_obj.ajax_url, formObj, function(data) {
			 console.log(data);
		});
	});

	$(document).on( 'submit', '#recipeForm', function(e) {
		e.preventDefault();
		$(this).hide();
		$("recipeStatus").html('<div class="alert alert-info">Please wait! We are submitting your recipe</div>');
		
		var formObj			=	{
			action: 		'r_submit_user_recipe',
			title: 			$("#r_inputTitle").val(),
			content: 		tinymce.activeEditor.getcontent(),
			ingredients: 	$("#r_inputIngredients").val(),
			time: 			$("#r_inputTime").val(),
			utensils: 		$("#r_inputUtensils").val(),
			level: 			$("#r_inputLevel").val(),
			meal_type: 		$("#r_inputMealType").val(),
		};

		$.post( recipe_obj.ajax_url, formObj, function(data) {
			console.log(data);
			if(data.status == 2) {
				$("#recipeStatus").html('<div class="alert alert-success">Recipe submitted successfully! An Admin will approve</div>');
			}else{
				$("#recipeStatus").html('<div class="alert alert-danger">Unable to submit recipe. Please fill in all field.</div>');
				$("#recipeForm").show();
			}
		});
	});
});