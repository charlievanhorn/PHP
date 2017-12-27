<?php 

	echo ' IP Address:  ' .  $_SERVER['REMOTE_ADDR'];
	echo ' Time: ' . time();
	$text = 'test test test ';
	echo "hey I'm doing things {$text} and other things <br />";
	echo 'test {$text} ';
?> 