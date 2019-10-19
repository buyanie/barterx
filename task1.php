
<?php
		//include a navigation link page 'menu.inc'
		include('menu.inc');

	function whatever($required,$default = '9'){
		$total = $required * $default;
		return $total;
	}
	echo "Whatever (50); // This function call must return the value " . whatever(50) . "<br />";
	echo "whatever(12,12);// This function call must return the value " . whatever(12,12);
	?>