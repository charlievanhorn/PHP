<!DOCTYPE>
<html>
	<head>
		<title>PHP jQuery AJAX CRUD</title>
	</head>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
	<script> 
		function test(){
			alert('In the function!');
		};
	</script>
	<body>
		<label>First Name: </label><input type="text" name="firstName" />
		<label>Last Name: </label><input type="text" name="lastName" />
		<button type="submit" id="submit" onClick="test()" />Submit </button>
		<div id="msg"></div>
	</body>
</html>