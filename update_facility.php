<!DOCTYPE html>
<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>



<div><center>
	  <a href="facility.php" class="button">Back</a>
	</div>

<?php

  //open connection
	$connection = mysql_connect ('localhost','root','') or die
	('Unable to connect!');
	
	//select a DB
	mysql_select_db('sal') or die ('Unable to select a DB!');
	

$query="SELECT * FROM  center";
	
	//execute query
	$result = mysql_query($query) or die("Error in query: $query. " . mysql_error());
	
	
	if (mysql_num_rows ($result) > 0)
	{
		//print HTML table
		echo '<table width=100% cellpading=10 cellspacing=0 border=1>';
		echo
		'<tr><td><b>ID</b></td><td><b>Name</b></td><td><b>Location</b></td><td><b>Address</b><td><b>Prices</b></td><td><b>Rating</b></td><td><b>Contact Number</b></td></td></tr>';
		
		// iterate over record set
		// print each field
		while ($row = mysql_fetch_row ($result))
		{
		echo '<tr>';
		echo '<td>' . $row[0] . '</td>';
		echo '<td>' . $row[1] . '</td>';
		echo '<td>' . $row[2] . '</td>';
		echo '<td>' . $row[3] . '</td>';
		echo '<td>' . $row[4] . '</td>';
		echo '<td>' . $row[5] . '</td>';
		echo '<td>' . $row[6] . '</td>';
		echo '</tr>';
		}
		echo '</table>';
	}
	else
	{
		//print error message
		echo 'No rows found';
	}
	// once processing is complete
	// free result set
	mysql_free_result ($result);
	
	


?>
<center>
<style>
.button {
    background-color: #6698FF;
	align:right;
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
.button1 {
    background-color: #837E7C;
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

<title>Update Facility Information</title>
</head>
<body>
<?php  $time=date('Y-m-d H:i:s');

echo "Update Facility<br><br>";

echo $time; echo "<br>";?>


<br/>
<form method="post" action="update.php">
<label>ID</label>
<input type="text" name="ID" />
<br />
<label>Prices</label>
<input type="text" name="Prices" />
<br />
<label>Rating</label>
<input type="text" name="Rating" />
<br />
<br />
<input type="submit" value="Update" name="update" class="button">
</form>
 

 
 
</body>
</html>



</body>
</html>
	

 
 
