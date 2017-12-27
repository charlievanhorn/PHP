<?php

include('inc/connections.php');

$sql = 'INSERT INTO tk_tcc (cust_id, job_name) VALUES (1,"test name")';

if (mysqli_query($localdb, $sql))
	{
		echo 'New record successfully created.';
	}
else 
	{
		echo 'Error: ' . $sql . '<br>' . mysqli_error($localdb);
	}
	mysqli_close($localdb)
?>