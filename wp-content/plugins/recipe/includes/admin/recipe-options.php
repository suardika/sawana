<?php 

function r_recipe_options_mb() {

	?>
	    <div class="form-group">
	        <label>Ingredients</label>
	        <input type="text" class="form-control" name="r_inputIngredients">
	    </div>
	    <div class="form-group">
	        <label>Cooking Time</label>
	        <input type="text" class="form-control" name="r_inputTime">
	    </div>
	    <div class="form-group">
	        <label>Cooking Utensils</label>
	        <input type="text" class="form-control" name="r_inputUtensils">
	    </div>
	    <div class="form-group">
	        <label>Cooking Level</label>
	        <select class="form-control" name="r_inputLevel">
	            <option value="Beginner">Beginner</option>
	            <option value="Intermediate">Intermediate</option>
	            <option value="Expert">Expert</option>
	        </select>
	    </div>
	    <div class="form-group">
	        <label>Meal Type</label>
	        <input type="text" class="form-control" name="r_inputMealType">
	    </div>
	<?php

}