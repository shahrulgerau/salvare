

<center>
<br><br>
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

<td>Rating</td>
<td><input type="radio" name="Rating" value="poor" <?php if(isset($_POST['Rating']) && $_POST['Rating']=="poor") { ?>checked<?php  } ?>> 1-2
<input type="radio" name="Rating" value="medium" <?php if(isset($_POST['Rating']) && $_POST['Rating']=="medium") { ?>checked<?php  } ?>> 2.1-3.4
<input type="radio" name="Rating" value="excel" <?php if(isset($_POST['Rating']) && $_POST['Rating']=="excel") { ?>checked<?php  } ?>> 3.5-5
</td>
<tr>
<td>Prices</td>
<td><input type="radio" name="Prices" value="bad" <?php if(isset($_POST['Prices']) && $_POST['Rating']=="bad") { ?>checked<?php  } ?>> less than 20%
<input type="radio" name="Prices" value="medium" <?php if(isset($_POST['Prices']) && $_POST['Rating']=="medium") { ?>checked<?php  } ?>> more than 20%
<input type="radio" name="Prices" value="good" <?php if(isset($_POST['Prices']) && $_POST['Rating']=="good") { ?>checked<?php  } ?>> not more than 50%
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