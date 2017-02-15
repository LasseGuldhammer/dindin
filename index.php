<!DOCTYPE html>
<html>
	<head>

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,700,700i" rel="stylesheet"> 

		<link rel="stylesheet" media="all" type="text/css" href="css/stylesheet.css">
		
        <title>this needs a title</title>
<link rel="icon" type="image/png" href="images/dindinlogofav.png">
	</head>

<header>
	<?php include('header.php') ?>
</header>

<body>

<div class="flex-container">
	<h1>Plan your dinner for the week with one click</h1>
	<button class="button1" onclick="loadDoc()">GENERATE</button>
</div>

<!-- week generator -->

<div class="section group">

    <div id="demo"></div>
   
    <script src="ajax/generator.js"></script>


<!-- four -->


<div class="section group">

	<div class="col span_1_of_4">
	<img src="images/400x400.jpg" alt="her er border" />
    <h2>Recipe name</h2>
    </div>

	<div class="col span_1_of_4">
	<img src="images/400x400.jpg" alt="her er border" />
    <h2>Recipe name</h2>
	</div>

	<div class="col span_1_of_4">
	<img src="images/400x400.jpg" alt="her er border" />
    <h2>Recipe name</h2>
    </div>

	<div class="col span_1_of_4">
	<img src="images/400x400.jpg" alt="her er border" />
    <h2>Recipe name</h2>
	</div>

</div>

<div class="section group">

	<div class="col span_1_of_4">
	 <img src="images/400x400.jpg" alt="her er border" />
    <h2>Recipe name</h2>
    </div>

	<div class="col span_1_of_4">
	<img src="images/400x400.jpg" alt="her er border" />
    <h2>Recipe name</h2>
	</div>

	<div class="col span_1_of_4">
	<img src="images/400x400.jpg" alt="her er border" />
    <h2>Recipe name</h2>
    </div>

	<div class="col span_1_of_4">
	<img src="images/400x400.jpg" alt="her er border" />
    <h2>Recipe name</h2>
	</div>

</div>


<?php include('footer.php') ?>
</body>
   

</html>