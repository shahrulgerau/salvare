<html>
<style>
.box {padding: 7px;border: #F0F0F0 1px solid;border-radius: 4px;}
.btn {padding: 10px;background-color: #09F;border: 0;color: #FFF;cursor: pointer;}
.frm{
	border: solid gray 1px;
	width: 20%;
	border-radius: 5px;
	margin: 100px auto;
	background: white;
	padding: 50px;
}
</style>


<center>
<table>

<tr>
Insert Facility Data
</tr>
<br><br>

<form action="insert.php" method="post" class="frm">
<tr><td>Name</td>
<td><input type="text" name="Name" class="box"></td>
</tr>
<br>
<tr>
<td>Location</td>
<td><input type="text" name="Location" class="box"></td>
</tr>
<tr>
<td>Address</td>
<td><input type="text" name="Address" class="box"></td>
</tr>
<tr>
<td>Prices</td>
<td><input type="text" name="Prices" class="box"></td>
</tr>
<tr>
<td>Rating</td>
<td><input type="text" name="Rating" class="box"></td>
</tr>
<tr>
<td>Contact Number</td>
<td><input type="text" name="Num" class="box"></td>
</tr>

<tr>
<td><input type="submit" id="submit" class="btn">
<input name="reset" type="reset" value="Clear" class="btn"/>
</td>
</tr>
</form>

</table>
</center>
</html>