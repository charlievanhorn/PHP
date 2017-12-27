<?php
	echo 'Array 1:  ';
	$myArray = array('Red','Green','Blue');
	print_r($myArray);
	echo '<br /> ';
	echo $myArray[0];
	echo '<br /> ';
	echo '<br />Array 2:  ';
	$myArray2 = array
		(
			0 => 'Red',
			1 => 'Green',
			2 => 'Blue Melodies'
		);
	print_r($myArray2);
	echo '<br /> ';
	echo $myArray2[1];
	echo '<br /> ';
fdafd

	echo '<br />Array 3:   ';
	$myArray3 = array
		(
				'Apple' => 'Red',
				'Grass' => 'Green',
				'Sky'	=> 'Blue'
		);
	print_r($myArray3);
	echo '<br /> ';
	echo $myArray3['Sky'];
	echo '<br /> ';
	$arrayName = array(array(1,3,4),
			array(3,2,1));
		echo	$arrayName[0][2];
?>
