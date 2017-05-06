

<center>
<br><br>

<?php
if(isset($_POST['submit'])){
  $Location=$_POST['Location'];
  $Prices=$_POST['Prices'];
  $Rating=$_POST['Rating'];
  $connection = mysql_connect ('localhost','root','') or die
  ('Unable to connect!');
  //select a DB
  mysql_select_db('sal') or die ('Unable to select a DB!');
  $query=mysql_query("SELECT * FROM center WHERE Location='$Location' AND Prices>='$Prices' AND Rating>='$Rating'");
 if(mysql_num_rows($query)>0){
  {
		//print HTML table
		echo '<table width=100% cellpading=10 cellspacing=0 border=1>';
		echo
		'<tr><td><b>ID</b></td><td><b>Name</b></td><td><b>Location</b></td><td><b>Address</b><td><b>Prices</b></td><td><b>Rating</b></td><td><b>Contact Number</b></td></td></tr>';
		
		// iterate over record set
		// print each field
		while ($row = mysql_fetch_row ($query))
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
 }
  
  else{
 	{
		//print error message
		echo 'No rows found';
	}
	// once processing is complete
	// free result set
	mysql_free_result ($query);
	
}
}
?>


<br><br>
Find the Recycling Center
<br><br>
<div>
<table>
<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
<tr>
<td> Select Location</td>
<td>
<select name="Location">
<?php 
$connection = mysql_connect ('localhost','root','') or die
  ('Unable to connect!');
  
  //select a DB
  mysql_select_db('sal') or die ('Unable to select a DB!');
$sql = mysql_query("SELECT DISTINCT Location FROM center");


while ($row = mysql_fetch_array($sql)){

?>

<?php echo "<option value=\"".$row['Location']."\">".$row['Location']."</option>" ?>



<?php
// close while loop 
}

?></select>
</td>
</tr>
<tr>
<td>Prices Focus</td>
<td>
<input list="Prices" name="Prices">
  <datalist id="Prices">
    <option value="10">
    <option value="20">
    <option value="30">
    <option value="40">
    <option value="50">
  </datalist>
</td>
</tr>
<tr>
<td>Rating </td>
<td>
<input list="Rating" name="Rating">
  <datalist id="Rating">
    <option value="1">
    <option value="2">
    <option value="3">
    <option value="4">
    <option value="5">
  </datalist>
</td>
</tr>
<tr>
<td>
<input type="submit" name="submit" value="submit">
</td>
</tr>
</form>
</table>
</div>