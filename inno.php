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

.box {padding: 7px;border: #F0F0F0 1px solid;border-radius: 4px;}

.button1 {
    background-color: #46C9CF;
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

.center{
	text-align: center;
}
</style>
</head>
<body>




<a href="open.php"><button class="tablink" onclick="openCity('Tutorial', this, 'red')" id="defaultOpen">Tutorial</button></a>
<a href="inno.php"><button class="tablink" onclick="openCity('Innovation', this, 'green')">Innovation</button></a>
<a href="find.php"><button class="tablink" onclick="openCity('Find', this, 'blue')">Find</button></a>
<a href="oa4.php"><button class="tablink" onclick="openCity('Contact', this, 'orange')">Contact</button></a>

<div id="Contact" >





<Center><h2>Waste Innovation Type</h2></center>

<center>
<table>
<form action="<?php echo $_SERVER ['PHP_SELF']?>" method="post">
<tr>
<td class="center">
Metal
<br>
<input type="image" src="img/Tin-Market.jpg" name="metal" value="metal" alt="Submit" width="150" height="150">
</td >
<td class="center">
Glass
<br>
<input type="image" src="img/glass.jpg" name="glass" value="glass" alt="Submit" width="150" height="150">
</td>
<tr>
<td class="center">
Paper
<br>
<input type="image" src="img/paper.jpg" name="paper" value="paper" alt="Submit" width="150" height="150">
</td>
<td class="center">
Bottle
<br>
<input type="image" src="img/bottle.jpg" name="bottle" value="bottle" alt="Submit" width="150" height="150">
</td>
</tr>


</form>
</table>
</center>
<center>
<br>

<?php
if (isset($_POST['metal'])&&$_POST['metal']=="metal"){




	echo "METAL OR TINS";
	echo "<br>";
	echo "CLICK GO to watch the DIY video";
	?>
	<a href="metal.php" class="button1">GO</a>
	<?php
}
if (isset($_POST['glass'])&&$_POST['glass']=="glass"){
	echo "GLASS";
	echo "<br>";
	echo "CLICK GO to watch the DIY video";
	?>
	<a href="glass.php" class="button1">GO</a>
	
	<?php
}
if (isset($_POST['paper'])&&$_POST['paper']=="paper"){
	echo "PAPER";
	echo "<br>";
	echo "CLICK GO to watch the DIY video";
	?>
	<a href="paper.php" class="button1">GO</a>
	
	<?php
}
if (isset($_POST['bottle'])&&$_POST['bottle']=="bottle"){
	echo "BOTTLE";
	echo "<br>";
	echo "CLICK GO to watch the DIY video";
	?>
	<a href="bottle.php" class="button1">GO</a>
	
<?php
}

?>

</center>
</div>



     
</body>
</html> 
