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
table1 {
    border-collapse: collapse;
    width: 100%;
	background-color: #f2f2f2
}
</style>
</head>
<body>




<a href="open.php"><button class="tablink" onclick="openCity('Tutorial', this, 'red')" id="defaultOpen">Tutorial</button></a>
<a href="inno.php"><button class="tablink" onclick="openCity('Innovation', this, 'green')">Innovation</button></a>
<a href="find.php"><button class="tablink" onclick="openCity('Find', this, 'blue')">Find</button></a>
<a href="contact.php"><button class="tablink" onclick="openCity('Contact', this, 'orange')">Contact</button></a>

<center>
<h1> About Us </h1>
<table><center>

<tr>
<td><center><img src="img/like.jpg" width="75" height="75">
<p><font size="4" color="#290972">Shahrul Nizam Bin Ismail </p>
         <p> Faculty of Science Computer and Information Technology, <br>University Malaya</p>
          <p>Bachelor of Information Technology (Management)</p>
</font>
<a href="https://www.facebook.com/shahrul.gerau22" target="blank"><img src="img/fb.png" width="75" height="75"></a>
<a href="https://www.instagram.com/nizami_smail/" target="blank"><img src="img/insta.png" width="65" height="65"></a>
<a href="https://twitter.com/nizami_smail/" target="blank"><img src="img/twitter.png" width="65" height="65"></a>
</td>


<td><center><img src="img/wae.jpg" width="75" height="75">
<p><font size="4" color="#290972"> Muhammad Ridhuan Bin  Mohd Salleh</p>
           <p> Faculty of Science Computer and Information Technology, <br>University Malaya</p>
          <p>Bachelor of Information Technology (Management)</p>
</font>

<a href="https://www.facebook.com/ridhuan.salleh" target="blank"><img src="img/fb.png" width="75" height="75"></a>
<a href="https://www.instagram.com/ridhuansalleh /" target="blank"><img src="img/insta.png" width="65" height="65"></a>

</td>
</tr>
<center>
</table>
<h3> OR </h3>_____________________________________
<h2> Feedback </h2>
<form action="thanks.php" method="post">
Full name:<br>
  <input type="text" name="name" value=""><br>
Contact Number:<br>
  <input type="text" name="fon" value=""><br>  
Comment:<br>
  <textarea name="comments"></textarea>
<br>
<input type="submit" name="submit" value="send" >
</form>


<p>&copy; 2017 THE SALVARE<p>

</body>
</html>