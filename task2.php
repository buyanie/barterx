<?php
//variable-length parameter
function dynamic_args() {
echo "<table border='1'><td>Function received 5 arguments<br>";
for($i=0; $i < func_num_args(); $i++){
echo "Argument $i = " . func_get_arg($i) . "<br>";
}
}
$Argument= dynamic_args('H','e','l','l','o');

function dynamic_args1() {
echo "<td><br />Function received 8 arguments" . "<br />";
for($i=0; $i < func_num_args(); $i++){
echo "Argument $i = " . func_get_arg($i) . "<br />";
}
}
$Argument= dynamic_args1('F','e','e','-','f','i','-','f','o');
echo "</table>";
echo "<br />";
?>
