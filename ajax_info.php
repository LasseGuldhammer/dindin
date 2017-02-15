<div class="flex-container-week">
<h1>Your din din plan for the week</h1>

</div>


<?php
$input = range(1,14);
$rand_keys = array_rand($input,7);
?>

<!-- seven -->

<div class="section group">



<div class="col span_1_of_7">
	<div class="weekstyle">
	<img src="images/400x400.jpg" alt="Recipe" />
	<h2>MONDAY</h2>
	<h3>Title</h3>

	<p> 
	<?php echo $input[$rand_keys[0]] . "\n"; 
	?> 

	</p>
	<!-- Trigger/Open The Modal -->
	<div class="button1"<button  Id="myBtn">SEE RECIPE</button></div>


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
	
	<p>MONDAY</p>
		<p> 
	<?php echo $input[$rand_keys[1]] . "\n"; 
	?> 
	</p>


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
	
	<p>MONDAY</p>
		<p> 
	<?php echo $input[$rand_keys[2]] . "\n"; 
	?> 
	</p>


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
	
	<p>MONDAY</p>
		<p> 
	<?php echo $input[$rand_keys[3]] . "\n"; 
	?> 
	</p>


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
	
	<p>MONDAY</p>
		<p> 
	<?php echo $input[$rand_keys[4]] . "\n"; 
	?> 
	</p>


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
	
	<p>MONDAY</p>
		<p> 
	<?php echo $input[$rand_keys[5]] . "\n"; 
	?> 
	</p>


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
	
	<p>MONDAY</p>
	<p> 
	<?php echo $input[$rand_keys[6]] . "\n"; 
	?> 
	</p>


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




