<?php

	$a = 'test';
	$b = '1';
	$str = $a . $b;
	$encodedURL =  base64_encode($str);
	echo 'Encoded: ' . $encodedURL . "\r\n";
	$decodedURL = base64_decode($encodedURL);
	echo 'Decoded: ' . $decodedURL; 
	echo $_GET['name'];
	echo $_POST['name'];
	?>
	<html>
	<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
	<input type="text" name="name" />
    <input type="submit" value="Submit" />  
	</form>
	<?php echo $_SERVER['PHP_SELF']; ?>
	<?php echo $_GET['name']; ?>
</html>