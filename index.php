<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<title>Console</title>

	<style type="text/css">
		form
		{
			text-align: center;
			display: inline-grid;
			margin-left: 150px;
			margin-bottom: 200px;
			font-family: "comic sans MS";
			color:black;

		}
		hr
		{
			color: black;
			padding-bottom: 5px;
			font-family: "Trebuchet MS";
		}
		

		p
		{
			color: black;
			font-family: "comic sans MS";
		}

		body
		{
			background-image: url("background3.jpg");
			background-position: center;
		}

		h2
		{
			color: black;
			font-family: "comic sans MS"
		}

	</style>
</head>
<body>
	<div id="toppart">
	<hr><h2 align="center" font-family="Trebuchet MS">LIFESIZE TECHNOLOGIES</h2><hr><br><br></div>
	<p align="center"><marquee direction="right">Select the Project operation you wish to perform</marquee></p><br>
	<form action="insertpro.php" id="proadd"><br>
		<button type="submit" form="proadd" class="btn btn-success" value="add">Add a project</button>
	</form>
	<form action="updatepro.php" id="proupdate"><br>
		<button type="submit" form="proupdate" class="btn btn-success" value="update">Update a project</button>
	</form>
	<form action="deletepro.php" id="prodelete"><br>
		<button type="submit" form="prodelete" class="btn btn-success" value="delete">Remove a project</button>
	</form>
	<form action="pro_query.php" id="proshow"><br>
		<button type="submit" form="proshow" class="btn btn-success" value="show">Show projects</button>
	</form><br>
	<p align="center"><marquee direction="left">Select the employee operation you wish to perform</marquee></p><br>
	<form action="insertform.php" id="empadd">
		<button type="submit" form="empadd" class="btn btn-success" value="add1">Add Employees</button>	
	</form>
	<form action="updateform.php" id="empupdate">
		<button type="submit" form="empupdate" class="btn btn-success" value="update1">Update Employee Details</button>
	</form>
	<form action="deleteform.php" id="empdelete">
		<button type="submit" form="empdelete" class="btn btn-success" value="delete1">Remove Employee</button>
	</form>
	<form action="emp_query.php" id="empshow">
		<button type="submit" form="empshow" class="btn btn-success" value="show1">Show Employees</button>
	</form>
</body>
</html>