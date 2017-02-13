<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Din Din</title>
</head>

<body>

<?php

class Recipe {
	public $name = 'Lasagna';
	public $vegetarian = false;
	public $ingredients = array
		(
			array("Ground beef", 800, 60),
			array("Mashed tomatoes", 600, 20),
			array("Onion", 2, 30),
			array("Garlic clove", 3, 2),
			array("Lasagna sheets", 10, 10),
			array("Bechamel sauce", 800, 50),
			array("Parmesan cheese", 250, 12)
		);
	
	function __construct() {		
	}
}
	
	
$lasagna = new Recipe();

?>

<h1><?php echo($lasagna->name); ?></h1>


<ul>
	<h3>Ingredients:</h3>
	<?php foreach($lasagna->ingredients as $ingredient) {
	echo "<li>" . $ingredient[0] . ", " . $ingredient[1] . "</li>";
} ?>
</ul>

<p>Total calories: <?php $calories = 0; foreach($lasagna->ingredients as $subtotal) {$calories += $subtotal[1] * $subtotal[2];} echo $calories; ?></p>

<p>Total cost: </p>

<p>Time to cook:</p>


</body>
</html>