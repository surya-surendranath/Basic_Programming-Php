<?php 
	class shape {
		var $x;
		var $y;

		function shape() {
			print("Shape constructor called <br> />");
		}
		function get_x() {
			return $this->x;
		}
		function get_y() {
			return $this->y;
		}
		function set_x($x) {
			$this->x = $x;
		}
		function set_y($y) {
			$this->y = $y;
		}
		function move_to($x, $y) {
			$this->x = $x;
			$this->y = $y;
		}
		function print_data() {
			print("Shape is currently at " . $this->get_x() . ":" .
				                             $this->get_y() . "<br />");
		}
		function draw()
		{}
	}

	class rectangle extends shape 
	{
		function rectangle($x, $y) {
			$this->move_to($x, $y);
		}

		function draw() {
			print("Rectangle currenytly at " . $this->get_x() . ":" .
											   $this->get_y() . "<br />");
		}
	}

$rect1 = new rectangle(100, 100);
$rect1->draw();
$rect1->print_data();
?>