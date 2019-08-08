<?php
	require 'vendor/autoload.php';
	/*To insert a document in a collection*/
	$mclient = new MongoDB\Client;
	$msdb = $mclient->company;
	$empcollection = $msdb->emp;
	$countinit=$empcollection->count();
	$id = $_GET['_id'];
	$name = $_GET['name'];
	$dob = $_GET['dob'];
	$doj = $_GET['doj'];
	$designation = $_GET['designation'];
	$salary = $_GET['salary'];
	$contact = $_GET['contact'];
	$address = $_GET['address'];
	$insertOneResult = $empcollection->insertOne(
    ['_id' => $id,'name' => $name,'dob' => $dob,'doj'=> $doj,'designation' => $designation,'salary' => $salary,'contact' => $contact,'address' => $address]);
	$countfin=$empcollection->count();
    if($countfin>$countinit)
    {
      echo '<script type="text/javascript">'; 
	  echo 'alert("Inserted Successfully!");'; 
	  echo 'window.location.href = "index.php";';
	  echo '</script>';
	}
	else
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("Could not Insert!");'; 
		echo '</script>';
	}
?>