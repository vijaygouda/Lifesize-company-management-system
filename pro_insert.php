<?php
	
	require 'vendor/autoload.php';
	/*To insert a document in a collection*/
	$mclient = new MongoDB\Client;
	$msdb = $mclient->company;
	$mobcollection = $msdb->pro;
	$countinit=$mobcollection->count();
	$id = $_GET['id'];
	$proname = $_GET['proname'];
	$country = $_GET['country'];
	$client = $_GET['client'];
	$start_date = $_GET['start_date'];
	$insertOneResult = $mobcollection->insertOne(
    ['_id' => $id,'proname' => $proname,'country'=> $country,'client' => $client,'start_date' => $start_date]);
    $countfin=$mobcollection->count();
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