<?php 
	include('recipe.class.php');
	include('recipe.data.php');
?>


<!DOCTYPE html>
<html>
	<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,700,700i" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

		<link rel="stylesheet" media="all" type="text/css" href="css/stylesheet.css">
		
        <title>din din planer</title>
<link rel="icon" type="image/png" href="images/dindinlogofav.png">

	</head>

<header>
	
</header>
<body>


<div class="flex-cover">

<img class="logo" src="animation/whitecoverlogo400.png" alt="Recipe" />


<h1 class="covertext">PLAN YOUR DINNER FOR THE WEEK WITH ONE CLICK</h1>







<div class="topanimation1"><img src="animation/knife.svg" alt="Recipe" /></div>

<div class="topanimation2"><img src="animation/fork.svg" alt="Recipe" /></div>

<img class="arrow" src="animation/arrow.png" alt="Recipe" />

<div class="movebutton">
<button class="button2">GENERATE WEEK PLAN</button>
</div>
</div>


<div class="center" >
<div id="fireajax"></div>
<script src="js/ajax.js"></script>




</div>

<div class="splitter"></div>










<!-- Footer include -->
<?php require('footer.php') 
?>
	





</body>
   

</html>






 

