<?php 
	include('recipe.class.php');
	include('recipe.data.php');
?>


<div class="flex-container-week">
	<h1>Your Din Din plan for the week</h1>
</div>
<hr>


<?php

// Generate 7 unique numbers between 1 and 14
$input = range(1,14);
$rand_keys = array_rand($input,7);

// Use the 7 numbers to pick 7 recipes and store them in new variables
$recipe_1 = $recipe_list[$rand_keys[0]];
$recipe_2 = $recipe_list[$rand_keys[1]];
$recipe_3 = $recipe_list[$rand_keys[2]];
$recipe_4 = $recipe_list[$rand_keys[3]];
$recipe_5 = $recipe_list[$rand_keys[4]];
$recipe_6 = $recipe_list[$rand_keys[5]];
$recipe_7 = $recipe_list[$rand_keys[6]];

?>

<!-- this script is not working? -->
<script type="text/javascript" src="js/modal.js"></script>

<!-- Insert data from the recipe objects into the 7 divs -->

<div class="section group">

<div id="monday" class="col span_1_of_7">
	<div class="weekstyle <?php echo ${$recipe_1}->filename . "_bg"; ?>">
	<h2 class="green_bg">MONDAY</h2>
	<h3 class="green_bg"><?php echo ${$recipe_1}->name; ?></h3>

	
	<!-- Trigger/Open The Modal -->
	<div><button id="basil_pomodoro" class="button1 button2">SEE RECIPE</button></div>


	</div>	
			<!-- The Modal -->
			<div id="basil_pomodoro_modal" class="modal">
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<p><?php echo ${$recipe_1}->text; ?></p>
			</div>

	
</div>
</div>



<div class="col span_1_of_7">
	<div class="weekstyle <?php echo ${$recipe_2}->filename . "_bg" ?>">
	<h2 class="green_bg">TUESDAY</h2>
	<h3 class="green_bg"><?php echo ${$recipe_2}->name; ?></h3>

	
	<!-- Trigger/Open The Modal -->
	<div><button id="basil_pomodoro" class="button1 button2">SEE RECIPE</button></div>


	</div>	
			<!-- The Modal -->
			<div id="myModal" class="modal">
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<p>content content content content content</p>
			</div>

	
</div>
</div>

<div class="col span_1_of_7">
	<div class="weekstyle <?php echo ${$recipe_3}->filename . "_bg" ?>">
	<h2 class="green_bg">WEDNESDAY</h2>
	<h3 class="green_bg"><?php echo ${$recipe_3}->name; ?></h3>

	
	<!-- Trigger/Open The Modal -->
	<div><button id="basil_pomodoro" class="button1 button2">SEE RECIPE</button></div>


	</div>	
			<!-- The Modal -->
			<div id="myModal" class="modal">
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<p>content content content content content</p>
			</div>

	
</div>
</div>

<div class="col span_1_of_7">
	<div class="weekstyle <?php echo ${$recipe_4}->filename . "_bg" ?>">
	<h2 class="green_bg">THURSDAY</h2>
	<h3 class="green_bg"><?php echo ${$recipe_4}->name; ?></h3>

	
	<!-- Trigger/Open The Modal -->
	<div><button id="basil_pomodoro" class="button1 button2">SEE RECIPE</button></div>


	</div>	
			<!-- The Modal -->
			<div id="myModal" class="modal">
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<p>content content content content content</p>
			</div>

	
</div>
</div>

<div class="col span_1_of_7">
	<div class="weekstyle <?php echo ${$recipe_5}->filename . "_bg" ?>">
	<h2 class="green_bg">FRIDAY</h2>
	<h3 class="green_bg"><?php echo ${$recipe_5}->name; ?></h3>

	
	<!-- Trigger/Open The Modal -->
	<div><button id="basil_pomodoro" class="button1 button2">SEE RECIPE</button></div>


	</div>	
			<!-- The Modal -->
			<div id="myModal" class="modal">
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<p>content content content content content</p>
			</div>

	
</div>
</div>

<div class="col span_1_of_7">
	<div class="weekstyle <?php echo ${$recipe_6}->filename . "_bg" ?>">
	<h2 class="green_bg">SATURDAY</h2>
	<h3 class="green_bg"><?php echo ${$recipe_6}->name; ?></h3>

	
	<!-- Trigger/Open The Modal -->
	<div><button id="basil_pomodoro" class="button1 button2">SEE RECIPE</button></div>


	</div>	
			<!-- The Modal -->
			<div id="myModal" class="modal">
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<p>content content content content content</p>
			</div>

	
</div>
</div>
<div class="col span_1_of_7">
	<div class="weekstyle <?php echo ${$recipe_7}->filename . "_bg" ?>">
	<h2 class="green_bg">SUNDAY</h2>
	<h3 class="green_bg"><?php echo ${$recipe_7}->name; ?></h3>

	
	<!-- Trigger/Open The Modal -->
	<div><button id="basil_pomodoro" class="button1 button2">SEE RECIPE</button></div>


	</div>	
			<!-- The Modal -->
			<div id="myModal" class="modal">
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<p>content content content content content</p>
			</div>

	
</div>
</div>

<!-- to close the block -->
</div>




