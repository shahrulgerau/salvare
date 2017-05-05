<?php


/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "sal");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_POST['Name']);
$location= mysqli_real_escape_string($link, $_POST['Location']);
$address = mysqli_real_escape_string($link, $_POST['Address']);
$price= mysqli_real_escape_string($link, $_POST['Prices']);
$rating = mysqli_real_escape_string($link, $_POST['Rating']);
$num= mysqli_real_escape_string($link, $_POST['Num']);

 
 if(!empty($name)&&($location)&&($address)&&($price)&&($rating)&&($num)){

	$sql = "INSERT INTO center (Name,Location,Address,Prices, Rating, Num) VALUES ('$name','$location', '$address', '$price', '$rating','$num')";
if(mysqli_query($link, $sql)){
    echo "Click Here to insert more<a href=facility.php>Insert</a>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 }
 else{
	 echo "Please enter the details";
	   echo "Click Here to insert<a href=facility.php>Insert</a>";
	 
 }
 
 
 
// attempt insert query execution




 
// close connection
mysqli_close($link);
?>