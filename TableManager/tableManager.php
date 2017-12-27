<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MySQL Table Manager with Bootstrap/jQuery/Ajax/PHP/MySQL</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container" style="margin-top:30px;">
		
		<div id="tableManager" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h2 class="modal-title">Country Name</h2>
					</div>
					
					<div class="modal-body">
						<input type="text" class="form-control" placeholder="Country Name..." id="countryName"><br />
						<textarea class="form-control" id="shortDesc" placeholder="Short Country Description"></textarea><br />
						<textarea class="form-control" id="longDesc" placeholder="Long Country Description"></textarea><br/>
					</div>
					
					<div class="modal-footer">
						<input type="button" onclick="manageData()" id="save" value="Save" class="btn btn-success" />
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>Table Manager</h2>
				
				<input style="float:right" id="addNew" type="button" class="btn btn-success" value="Add New" />
				<br /><br />
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<td>ID</id>
							<td>Country Name</td>
							<td>Info</td>
						</tr>
					</thead>
				<table>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
	<script type="text/javascript">
		$(document).ready(function()
		{
			$("#addNew").on('click', function() 
			{
				$("#tableManager").modal('show');
			});
			
			function manageData(key) 
			{
				var name = $("#countryName");
				var shortDesc = $("#shortDesc");
				var longDesc = $("#longDesc");
				
				if ( isNotEmpty(name) && isNotEmpty(shortDesc) && isNotEmpty(longDesc))
				{
					alert('here');
				}
				
				function isNotEmpty(caller)
				{
					if (caller.val() == '') 
					{
						caller.css('border', '1px solid red');
						return false;
					}
					else
					{
						caller.css('border', '');
						return true;
					}
				}
			}
		});
	</script>
	
</body>
</html>