<?php 
	include('recipe.class.php');
	include('recipe.data.php');
?>


<div class="flex-container-week">
<h1>Your Din Din plan for the week</h1>

</div>


<?php
$input = range(1,14);
$rand_keys = array_rand($input,7);

$recipe_1 = $recipe_list[$rand_keys[0]];
$recipe_2 = $recipe_list[$rand_keys[1]];
$recipe_3 = $recipe_list[$rand_keys[2]];
$recipe_4 = $recipe_list[$rand_keys[3]];
$recipe_5 = $recipe_list[$rand_keys[4]];
$recipe_6 = $recipe_list[$rand_keys[5]];
$recipe_7 = $recipe_list[$rand_keys[6]];

?>

<!-- seven -->

<div class="section group">



<div class="col span_1_of_7">
	<div class="weekstyle">
	<img src="images/400x400.jpg" alt="Recipe" />
	<h2>MONDAY</h2>
	<h3><?php echo ${$recipe_1}->name; ?></h3>

	<p> 
	<?php echo $input[$rand_keys[0]] . "\n"; 
	?> 

	</p>
	<!-- Trigger/Open The Modal -->
	<div class="button1"><button  Id="myBtn">SEE RECIPE</button></div>


	</div>	
			<!-- The Modal -->
			<div Id="myModal" class="modal">
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<p>content content content content content</p>
			</div>

	
</div>
</div>
<!-- this script is not working? -->
<script src="js/modal.js"></script>

<div class="col span_1_of_7">
	
	<p>TUESDAY</p>
		<h3><?php echo ${$recipe_2}->name; ?></h3>


			<!-- Trigger/Open The Modal -->
			<button Id="myBtn">Open Modal</button>
			<!-- The Modal -->
			<div Id="myModal" class="modal">
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<p>content content content content content</p>
			</div>
</div>
</div>

<div class="col span_1_of_7">
	
	<p>WEDNESDAY</p>
		<h3><?php echo ${$recipe_3}->name; ?></h3>


			<!-- Trigger/Open The Modal -->
			<button Id="myBtn">Open Modal</button>
			<!-- The Modal -->
			<div Id="myModal" class="modal">
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<p>content content content content content</p>
			</div>
</div>
</div>

<div class="col span_1_of_7">
	
	<p>THURSDAY</p>
		<h3><?php echo ${$recipe_4}->name; ?></h3>


			<!-- Trigger/Open The Modal -->
			<button Id="myBtn">Open Modal</button>
			<!-- The Modal -->
			<div Id="myModal" class="modal">
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<p>content content content content content</p>
			</div>
</div>
</div>

<div class="col span_1_of_7">
	
	<p>FRIDAY</p>
		<h3><?php echo ${$recipe_5}->name; ?></h3>


			<!-- Trigger/Open The Modal -->
			<button Id="myBtn">Open Modal</button>
			<!-- The Modal -->
			<div Id="myModal" class="modal">
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<p>content content content content content</p>
			</div>
</div>
</div>

<div class="col span_1_of_7">
	
	<p>SATURDAY</p>
		<h3><?php echo ${$recipe_6}->name; ?></h3>


			<!-- Trigger/Open The Modal -->
			<button Id="myBtn">Open Modal</button>
			<!-- The Modal -->
			<div Id="myModal" class="modal">
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<p>content content content content content</p>
			</div>
</div>
</div>

<div class="col span_1_of_7">
	
	<p>SUNDAY</p>
		<h3><?php echo ${$recipe_7}->name; ?></h3>

			<!-- Trigger/Open The Modal -->
			<button Id="myBtn">Open Modal</button>
			<!-- The Modal -->
			<div Id="myModal" class="modal">
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<p>content content content content content</p>
			</div>
</div>
</div>

<!-- to close the block -->
</div>




