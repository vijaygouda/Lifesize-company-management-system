<?php
	
	require 'vendor/autoload.php';
	/*To insert a document in a collection*/
	$mclient = new MongoDB\Client;
	$msdb = $mclient->company;
	$mobcollection = $msdb->pro;
	$list = $mobcollection->find();

    echo "<html> <style>body
    {
        background-image: url('img2.jpg');
        background-position: center;
        background-repeat: no-repeat;
    }
      h2
    {
        color:yellow;
    }
    </style><hr><h2 align='center'>Existing Project Records</h2><hr> </html>";
	$pro_details  = "<table style='border:1px solid red; margin-left:400px; margin-top:80px;  align='center'";
    $pro_details .= "border-collapse:collapse' border='1px'>";
    $pro_details .= "<thead>";
    $pro_details .= "<tr>";
    $pro_details .= "<th bgcolor='orange'>PROJECT ID</th>";
    $pro_details .= "<th bgcolor='orange'>PROJECT NAME</th>";
    $pro_details .= "<th bgcolor='orange'>COUNTRY</th>";
    $pro_details .= "<th bgcolor='orange'>CLIENT</th>";
    $pro_details .= "<th bgcolor='orange'>START_DATE</th>";
    $pro_details .= "</tr>";
    $pro_details .= "</thead>";
    $pro_details .= "<tbody>";
    
	foreach ($list as $item) 
	{
		$pro_details .= "<tr>";
        $pro_details .= "<td bgcolor='orange'>" . $item['_id'] . "</td>";
        $pro_details .= "<td bgcolor='orange'>" . $item['proname']."</td>";
        $pro_details .= "<td bgcolor='orange'>" . $item['country']."</td>";
        $pro_details .= "<td bgcolor='orange'>" . $item['client']."</td>";
        $pro_details .= "<td bgcolor='orange'>" . $item['start_date']."</td>";
        $pro_details .= "</tr>";
	}

	$pro_details .= "</tbody>";
    $pro_details .= "</table>";
    echo $pro_details;
    
?>

<!DOCTYPE html>
<html>
<body>

    <style type="text/css">
        .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
        }
    </style>

    <br><br><br><br><br>
    <center>
        <form action="index.php">
            <button type="submit" class="button" value="submit">Back!</button>
        </form>
    </center>
</body>
</html>