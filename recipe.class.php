<?php
// Recipe class

class Recipe {
	public $name;
	public $vegetarian;
	public $ingredients;
	public $calories;
	public $cost;
	public $time;
	
	public function __construct($name, $vegetarian, $ingredients, $cost, $time) {
		$this->name = $name;
		$this->vegetarian = $vegetarian;
		$this->ingredients = $ingredients;		
		$this->cost = $cost;
		$this->time = $time;
		$this->cal_cal();
	}
	
	public function cal_cal() {
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