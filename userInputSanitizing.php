<?php
	
	function sanitizeData($data)
	{
		return esc_sql($data);
	}
	
	if ( is_user_logged_in() )
	{
		$user_id=get_current_user_id();
	}
	else {
		$user_id = -1;
	}
	$jobTitle = sanitizeData($_POST['job']);
	$avgSalary = sanitizeData($_POST['salary']);
	$Industry = sanitizeData($_POST['industry']);
	$JobFunction = sanitizeData($_POST['jobfunction']);
	$sql = "INSERT INTO wp_tk_tcc_answers (CustId, JobTitle,AvgSalary,Industry,JobFunction,TCCVersion,DateAdded,Remote_IP";
	//Columns in MySQL
	for ($i = 1; $i <=47; $i++)
	{
		$sql .= " ,c" . $i;
	}
	$sql .= ") VALUES (";
	
	
	
 for ($j = 1; $j <=44; $j++)
        {
			if ($j == 31 )
			{
               $sql .= ",'" . sanitizeData(getTCC(c31)) . "'";
			}
			elseif ($j == 32 )
			{
				 $sql .= ",'" . sanitizeData(getTCC(c32)) . "'";
			}
			elseif ($j == 33 )
			{ 
				 $sql .= ",'" . sanitizeData(getTCC(c33)) . "'";
			}
			elseif ($j == 36 )
			{
				 $sql .= ",'" . sanitizeData(getTCC(c36)) . "'";
			}
			elseif ($j == 39 )
			{
				 $sql .= ",'" . sanitizeData(getTCC(c39)) . "'";
			}
        }
	$sql .= ",'" . sanitizeData($fld40) . ",'" . sanitizeData($fld41) . "','" . sanitizeData($fld42) . "','" . sanitizeData($fld43) . "','" . sanitizeData($fld44) . "','" . sanitizeData($fld45) . "','" . sanitizeData($fld46) . "','" . sanitizeData($fld47) . "')";
	echo $sql;
?>


 INSERT INTO wp_tk_tcc_answers (CustId,JobTitle,AvgSalary,Industry,JobFunction,TCCVersion,DateAdded,Remote_IP ,c1 ,c2 ,c3 ,c4 ,c5 ,c6 ,c7 ,c8 ,c9 ,c10 ,c11 ,c12 ,c13 ,c14 ,c15 ,c16 ,c17 ,c18 ,c19 ,c20 ,c21 ,c22 ,c23 ,c24 ,c25 ,c26 ,c27 ,c28 ,c29 ,c30 ,c31 ,c32 ,c33 ,c34 ,c35 ,c36 ,c37 ,c38 ,c39 ,c40 ,c41 ,c42 ,c43 ,c44 ,c45 ,c46 ,c47 ,c48 ,c49 ,c50 ,c51 ,c52) 
 VALUES 
 ('-1','testing','$200,000.00','Aerospace','Operations', 1 ,now(),'75.112.66.253','$1.00','$1.00','$1.00','$1.00','$1.00','$5.00','$1.00','$1.00','$1.00','$3.00','$1.00','$1.00','$1.00','$1.00','$11.00','$1.00','$1.00','$1.00','$1.00','$1.00','$1.00','$1.00','$22.00','$1.00','$1.00','$1.00','$1.00','$4.00','$34.00','$24,000.00','','','','$100.00','44.00','','$100.00','2','','$4,400.00','$100.00','$4,500.00','$36,666.67','$-32,166.67','$34.00','$-32,166.67','$32,200.67') 