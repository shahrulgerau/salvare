<!DOCTYPE html>
<html>
<head>
<style>
body {font-family: "Lato", sans-serif;}

.tablink {
    background-color: #555;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 25%;
}

.tablink:hover {
    background-color: #777;
}

/* Style the tab content */
.tabcontent {
    color: white;
    display: none;
    padding: 50px;
    text-align: center;
}

#Tutorial {background-color:red;}
#Innovation {background-color:green;}
#Find {background-color:blue;}
#Contact {background-color:orange;}
#back {background-color:#99e6ff;}

.box {padding: 7px;border: #F0F0F0 1px solid;border-radius: 4px;}

.button1 {
    background-color:#663300;
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
</head>
<body>




<a href="open.php"><button class="tablink" onclick="openCity('Tutorial', this, 'red')" id="defaultOpen">Tutorial</button></a>
<a href="inno.php"><button class="tablink" onclick="openCity('Innovation', this, 'green')">Innovation</button></a>
<a href="find.php"><button class="tablink" onclick="openCity('Find', this, 'blue')">Find</button></a>
<a href="contact.php"><button class="tablink" onclick="openCity('Contact', this, 'orange')">Contact</button></a>

<center>
<br>
<div id="back">
<br><br>
<br><br>
Find the Recycling Center
<br><br>
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


<center>
<br><br>


<div id="table1">
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
		echo '<table width=100% cellpading=10 cellspacing=0 border=0 background-color=green>';
		echo
		'<tr><td><b>Name</b></td><td><b>Location</b></td><td><b>Address</b><td><b>Prices</b></td><td><b>Rating</b></td><td><b>Contact Number</b></td></td></tr>';
		
		// iterate over record set
		// print each field
		while ($row = mysql_fetch_row ($query))
		{
		echo '<tr>';
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
		echo 'No recycling center found';
	}
	// once processing is complete
	// free result set
	mysql_free_result ($query);
	
}
}
?>
</div>

