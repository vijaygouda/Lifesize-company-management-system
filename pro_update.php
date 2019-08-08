<?php
	
	require 'vendor/autoload.php';
	/*To delete a document from a collection*/
	$mclient = new MongoDB\Client;
	$msdb = $mclient->company;
	$mobcollection = $msdb->pro;

	$id = file_get_contents("file1.txt");
	$valid = $mobcollection->findOne(
     ['_id' => $id]
    );

	if($valid)
	{
	$proname = $_POST['proname'];
	$start_date = $_POST['start_date'];
	if($proname!="")
		$update_result1 = $mobcollection->updateOne(['_id' => $id],['$set' =>['proname' =>$proname]]);
	if($start_date!="")
		$update_result2 = $mobcollection->updateOne(['_id' => $id],['$set' =>['start_date' =>$start_date]]);
	echo '<script type="text/javascript">'; 
	echo 'alert("Updated Successfully!");'; 
    echo 'window.location.href = "pro_query.php";';
	echo '</script>';
	}
	else {echo '<script type="text/javascript">'; 
	  echo 'alert("Could not Update!");'; 
	  echo 'window.location = "index.php";';
	  echo '</script>';}
?>