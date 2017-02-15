<?php
// Recipe class

class Recipe {
	public $number;
	public $name;
	public $vegetarian;
	public $ingredients;
	public $calories;
	public $cost;
	public $time;
	public $filename;
	public $text;
	
	public function __construct($number, $name, $vegetarian, $ingredients, $cost, $time, $filename, $text) {
		$this->number = $number;
		$this->name = $name;
		$this->vegetarian = $vegetarian;
		$this->ingredients = $ingredients;
		$this->calCal();
		$this->cost = $cost;
		$this->time = $time;
		$this->filename = $filename;
		$this->text = $text;
	}
	
	public function calCal() {
		global $ingredient_list;
		$total_calories = 0;
		foreach ($this->ingredients as $amount) {
			foreach ($ingredient_list as $calories) {
				if ($amount[0] === $calories[0]) {
					$total_calories += $amount[1] * $calories[1];
				}
			}
		}
		$this->calories = $total_calories;
	}
}
?>