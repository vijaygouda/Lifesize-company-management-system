<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<title>Add a Project</title>
</head>
<style type="text/css">
	#insert
	{
		text-align: center;
		margin-top: 100px;
		font-family: "Trebuchet MS";
	}
	body
	{
		background-image: url("cmp.jpg");
		background-position: center;
		background-repeat: no-repeat;
	}
	#col
	{
		color: yellow;
		font-family: "Trebuchet MS";
	}
</style>
<body>
	<div id="col">
	<hr><h1 align="center">Add a Project</h1><hr>
	<div id="insert">
	<p>Fill in the following details</p>
		<form action="pro_insert.php" method="GET" id="insertform">
			Project ID:<br>
			<input type="text" name="id" required><br><br>
			Project Name:<br>
			<input type="text" name="proname" required><br><br>
			Country:<br>
			<input type="text" name="country" required><br><br>
			Client:<br>
			<input type="text" name="client" required><br><br>
			Start date:<br>
			<input type="text" name="start_date" required><br><br>
		</form>
		    <button type="submit" form="insertform" class="btn btn-success" value="Submit">Submit</button>
	</div>
</div>
</body>
</html>