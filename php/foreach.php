<?php
$arr = array(1,2,3,4);

foreach($arr as &$value) {
	$value =$value * 2;

}
foreach($arr as $key => $value) {

	echo "{$key} => {$value}    ";
	//print_r($arr);
}

?>