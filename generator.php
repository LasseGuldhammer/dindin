<?php 
	include('recipe.class.php');
	include('recipe.data.php');
?>
<div class="splitter"></div>
<div class="flex-container2">
	<h1>YOUR DIN DIN PLAN FOR THE WEEK</h1>
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

<div id="print-content">
<div class="col span_1_of_7" >
	  



  <div>
<div class="weekstyle <?php echo ${$recipe_1}->filename . "_bg" ?>">
</div>
    
    <h2>MONDAY</h2>

        <!-- Trigger/Open The Modal -->
    <button class="modal-button" href="#myModal1">SEE RECIPE</button>

	<h3><?php echo ${$recipe_1}->name; ?></h3>

    

  
          

            <!-- The Modal -->
            <div id="myModal1" id="basil_pomodoro_modal" class="modal">

                 <!-- Modal content -->
                <div class="modal-content">
                <div class="modal-header">
                <span class="close">×</span>
                
               
                <h2 class="modal-header">MONDAY</h2>
                 <h2 class="modal-header"><?php echo ${$recipe_1}->name; ?></h2>
                </div>
                <div class="modal-body">
                  
                <p><?php echo ${$recipe_1}->text; ?></p>
               
                </div>
                <div class="modal-footer">
                <h3><img class="modalimg" src ="images/dindinlogo.png" alt="dindin"/></h3>
                </div>
                </div>

            </div>


</div>
</div>

<div class="col span_1_of_7">
	<div>
	<div class="weekstyle <?php echo ${$recipe_2}->filename . "_bg" ?>">
    </div>
    <h2>TUESDAY</h2>

     <!-- Trigger/Open The Modal -->
                <button class="modal-button" href="#myModal2">SEE RECIPE</button>
	<h3><?php echo ${$recipe_2}->name; ?></h3>


               

            <!-- The Modal -->
            <div id="myModal2" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                <div class="modal-header">
                <span class="close">×</span>
                <h2 class="modal-header">TUESDAY</h2>
                <h2 class="modal-header"><?php echo ${$recipe_2}->name; ?></h2>
                </div>
                <div class="modal-body">
                <p><?php echo ${$recipe_2}->text; ?></p>
              
                </div>
                <div class="modal-footer">
                <h3><img class="modalimg" src ="images/dindinlogo.png" alt="dindin"/></h3>
                </div>
                </div>

            </div>

</div> 
</div>

<div class="col span_1_of_7">
	<div>
	<div class="weekstyle <?php echo ${$recipe_3}->filename . "_bg" ?>">
	</div>
    <h2>WEDNESDAY</h2>

 <!-- Trigger/Open The Modal -->
                <button class="modal-button" href="#myModal3">SEE RECIPE</button>

	<h3><?php echo ${$recipe_3}->name; ?></h3>


               

            <!-- The Modal -->
            <div id="myModal3" class="modal">

                 <!-- Modal content -->
                <div class="modal-content">
                <div class="modal-header">
                <span class="close">×</span>
                <h2 class="modal-header">WEDNESDAY</h2>
                <h2 class="modal-header"><?php echo ${$recipe_3}->name; ?></h2>
                </div>
                <div class="modal-body">
                <p><?php echo ${$recipe_3}->text; ?></p>
                </div>
                <div class="modal-footer">
                <h3><img class="modalimg" src ="images/dindinlogo.png" alt="dindin"/></h3>
                </div>
                </div>

            </div>

</div>   
</div>

<div class="col span_1_of_7">
	<div>
	<div class="weekstyle <?php echo ${$recipe_4}->filename . "_bg" ?>">
	</div>
    <h2>THURSDAY</h2>

<!-- Trigger/Open The Modal -->
                <button class="modal-button" href="#myModal4">SEE RECIPE</button>

	<h3><?php echo ${$recipe_4}->name; ?></h3>



                

            <!-- The Modal -->
            <div id="myModal4" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                <div class="modal-header">
                <span class="close">×</span>
                <h2 class="modal-header">THURSDAY</h2>
                <h2 class="modal-header"><?php echo ${$recipe_4}->name; ?></h2>
                </div>
                <div class="modal-body">
                <p><?php echo ${$recipe_4}->text; ?></p>
                </div>
                <div class="modal-footer">
                <h3><img class="modalimg" src ="images/dindinlogo.png" alt="dindin"/></h3>
                </div>
                </div>

            </div>
  
</div>   
</div>

<div class="col span_1_of_7">
	<div>
	<div class="weekstyle <?php echo ${$recipe_5}->filename . "_bg" ?>">
</div>
    <h2>FRIDAY</h2>


                <!-- Trigger/Open The Modal -->
                <button class="modal-button" href="#myModal5">SEE RECIPE</button>

	<h3><?php echo ${$recipe_5}->name; ?></h3>



            <!-- The Modal -->
            <div id="myModal5" class="modal">

                 <!-- Modal content -->
                <div class="modal-content">
                <div class="modal-header">
                <span class="close">×</span>
                <h2 class="modal-header">FRIDAY</h2>
                <h2 class="modal-header"><?php echo ${$recipe_5}->name; ?></h2>
                </div>
                <div class="modal-body">
                 <p><?php echo ${$recipe_5}->text; ?></p>
                </div>
                <div class="modal-footer">
                <h3><img class="modalimg" src ="images/dindinlogo.png" alt="dindin"/></h3>
                </div>
                </div>

            </div>
 
</div>    
</div>

<div class="col span_1_of_7">
	<div>
	<div class="weekstyle <?php echo ${$recipe_6}->filename . "_bg" ?>">
	</div>
    <h2>SATURDAY</h2>

     <!-- Trigger/Open The Modal -->
                <button class="modal-button" href="#myModal6">SEE RECIPE</button>

	<h3><?php echo ${$recipe_6}->name; ?></h3>


           

            <!-- The Modal -->
            <div id="myModal6" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                <div class="modal-header">
                <span class="close">×</span>
                <h2 class="modal-header">SATURDAY</h2>
               <h2 class="modal-header"><?php echo ${$recipe_6}->name; ?></h2>
                </div>
                <div class="modal-body">
                <p><?php echo ${$recipe_6}->text; ?></p>
                </div>
                <div class="modal-footer">
                <h3><img class="modalimg" src ="images/dindinlogo.png" alt="dindin"/></h3>
                </div>
                </div>

            </div>

 
</div>    
</div>


<div class="col span_1_of_7">
	<div>
	<div class="weekstyle <?php echo ${$recipe_7}->filename . "_bg" ?>">
	</div>
    <h2>SUNDAY</h2>

 <!-- Trigger/Open The Modal -->
                <button class="modal-button" href="#myModal7">SEE RECIPE</button>

	<h3><?php echo ${$recipe_7}->name; ?></h3>


               

            <!-- The Modal -->
            <div id="myModal7" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                <div class="modal-header">
                <span class="close">×</span>
                <h2 class="modal-header">SUNDAY</h2>
                <h2 class="modal-header"><?php echo ${$recipe_7}->name; ?></h2>
                </div>
                <div class="modal-body">
              <p><?php echo ${$recipe_7}->text; ?></p>
                </div>
                <div class="modal-footer">
                <h3><img class="modalimg" src ="images/dindinlogo.png" alt="dindin"/></h3>
                </div>
                </div>

            </div>

  

</div>

</div>



<div class="movebutton2">
<button class="button3" onclick="printDiv('print-content')" value="print a div!">SAVE WEEK PLAN</button>

</div>



<script src="js/modal.js"></script>

<script>

function printDiv(divName) {

 var printContents = document.getElementById(divName).innerHTML;
 w=window.open();
 w.document.write(printContents);
 w.print();
 w.close();
}
</script>