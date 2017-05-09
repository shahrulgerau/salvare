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
	border: 3px solid #73AD21;
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

.bord{
	border: 3px solid #73AD21;
}
.center{
	text-align: center;
	font-weight: bold;
}
.font-style{
	font-family:'Segoe UI',Arial,sans-serif;
}
</style>
</head>
<body>




<a href="open.php"><button class="tablink" onclick="openCity('Tutorial', this, 'red')" id="defaultOpen">Tutorial</button></a>
<a href="inno.php"><button class="tablink" onclick="openCity('Innovation', this, 'green')">Innovation</button></a>
<a href="find.php"><button class="tablink" onclick="openCity('Find', this, 'blue')">Find</button></a>
<a href="oa4.php"><button class="tablink" onclick="openCity('Contact', this, 'orange')">Contact</button></a>

<div id="back">




<Center><h2 class="font-style">Waste Classification</h2></center>

<center>
<table>
<form action="<?php echo $_SERVER ['PHP_SELF']?>" method="post">
<tr>
<td class="center">
Recyclable
<br>
<input type="image" class="bord" src="img/recycle.jpg" name="recycle" value="recycle" alt="Submit" width="150" height="150">
</td>
<td class="center">
Non-Recyclable
<br>
<input type="image" class="bord" src="img/non.jpg" name="non" value="non" alt="Submit" width="150" height="150">
</td>
<tr>
<td class="center">
Compostable
<br>
<input type="image" class="bord" src="img/compost.jpg" name="compost" value="compost" alt="Submit" width="150" height="150">
</td>
<td class="center">
Partially Recyclable
<br>
<input type="image" class="bord" src="img/part.jpg" name="part" value="part" alt="Submit" width="150" height="150">
</td>
</tr>


</form>
</table>
</center>
<center>
<br>
<?php
if (isset($_POST['recycle'])&&$_POST['recycle']=="recycle"){




	echo "Recyclable Item";
	echo "<br>";
	echo "CLICK GO to know more about recyclable waste ";
	?>
	<a href="recycle.php" class="button1">GO</a>
	<?php
}
if (isset($_POST['non'])&&$_POST['non']=="non"){
	echo "Non-Recyclable Waste";
	echo "<br>";
	echo "CLICK GO to know more about Non-Recyclable waste";
	?>
	<a href="non.php" class="button1">GO</a>
	
	<?php
}
if (isset($_POST['compost'])&&$_POST['compost']=="compost"){
	echo "Compostable Waste";
	echo "<br>";
	echo " CLICK GO to know more about Compostable waste";
	?>
	<a href="compost.php" class="button1">GO</a>
	
	<?php
}
if (isset($_POST['part'])&&$_POST['part']=="part"){
	echo "Partially Recyclable Waste<br>";
	echo "<br>";
	echo " CLICK GO to know more about Partially Recyclable waste";
	?>
	<a href="part.php" class="button1">GO</a>
	
<?php
}

?>

</center>

</div>

</body>
</html> 
