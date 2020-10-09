<?php
	include('search_algos.php');
	
	$sq_test_data=randomise(5000000, 1000000000);
	$bin_test_data=$sq_test_data;
	
	$target=$sq_test_data[array_rand($sq_test_data)];
	echo('Target: '.$target.PHP_EOL.PHP_EOL);
	$time=microtime(true);
	echo('Target found at: '.search($target, $sq_test_data).PHP_EOL);
	echo('Sequential Search Time: '.(microtime(true)-$time).PHP_EOL.PHP_EOL);
	
	$time=microtime(true);
	sort($bin_test_data);
	$search_time=microtime(true);
	echo('Sorting Time: '.(microtime(true)-$time).PHP_EOL);
	echo('Target found at: '.binary_search($target, $bin_test_data).PHP_EOL);
	echo('Biniary Search Time: '.(microtime(true)-$search_time).PHP_EOL);
	echo('Total Search Time: '.(microtime(true)-$time).PHP_EOL);
?>
