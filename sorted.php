<?php
	include('search_algos.php');

	$sq_test_data=randomise(1000000, 1000000000, true);

	$target=$sq_test_data[array_rand($sq_test_data)];
	echo('Target: '.$target.PHP_EOL.PHP_EOL);	
	$time=microtime(true);
	echo('Target found at: '.search($target, $sq_test_data).PHP_EOL);
	echo('Sequential Search Time: '.(microtime(true)-$time).PHP_EOL.PHP_EOL);
	
	$time=microtime(true);	
	echo('Target found at: '.binary_search($target, $sq_test_data).PHP_EOL);
	echo('Biniary Search Time: '.(microtime(true)-$time).PHP_EOL);	
?>
