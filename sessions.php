<html>
	<head>
		<title>
			Sessions
		</title>
		<script type="text/javascript" src="/js/jquery-3.0.0.min.js"></script>
		<script type="text/javascript" language="javascript">
			$(document).ready(function()
			{
				$('#setSessionStarted').click(function()
				{
					<?php  $_SESSION["status"] = "STARTED";  ?>
					$('#status').html('<?php echo $_SESSION["status"]; ?>');
				});
				
				$('#setSessionStopped').click(function()
				{
					<?php $_SESSION["status"] = "STOPPED"; ?>
					$('#status').html('<?php echo $_SESSION["status"]; ?>');
				});
			});
		</script>
		
		<script>
			alert('<?php echo $_SESSION["status"]; ?>');
		</script>
	</head>
	<body>		
		<div id="status">
		</div>
		<input type="button" id="setSessionStarted" value="Turn Session: STARTED" />
		<input type="button" id="setSessionStopped" value="Turn Session: STOPPED" />
	</body>
</html>