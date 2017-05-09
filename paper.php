<html>
<head>
<style>
body {font-family: "Lato", sans-serif;}

.tablink {
    background-color: #555;
    color: black;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 25%;
}
.tablink1 {
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
	position:static;
	margin-left:310px;
	margin-right:110px;
    color: black;
    display: none;
    padding: 10px;
    text-align: center;
}

.button1 {
	position:relative;
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

#Paper {background-color:#bbff33;}
#Plastic {background-color:#99e600;}
#Glass {background-color:#77b300;}
#Tins {background-color:green;}

ul {
	height=300;
	position: absolute;
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 300;
    background-color: #f1f1f1;
}

li a {
	height=300;
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}

.posit{
	position: absolute;
}

.tittle1{
	text-align: center;
	margin-left: 120px;
	margin-top: 0px;
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
}
</style>
</head>
<body>

<a href="inno.php" class="button1 posit">Back</a>


<br>
<h2 class="tittle1">PAPER</h2>
<div>
<ul>
	<li><a  href="#Paper" onclick="openCity('Paper', this, '#bbff33')" id="defaultOpen">IDEA 1</a></li>
	<li><a  href="#Plastic" onclick="openCity('Plastic', this, '#99e600')">IDEA 2</a></li>
	<li><a  href="#Glass" onclick="openCity('Glass', this, '#77b300')">IDEA 3</a></li>
	<li><a  href="#Tins" onclick="openCity('Tins', this, 'green')">IDEA 4</a></li>
</ul>
<div>
<div id="Paper" class="tabcontent">
	<iframe width="854" height="480" src="https://www.youtube.com/embed/r-xTXvQBIkg" frameborder="0" allowfullscreen></iframe>
  <h3>Paper Craft Ideas | DIY Origami Basket | HandiWorks #59</h3>
</div>

<div id="Plastic" class="tabcontent">
	<iframe width="854" height="480" src="https://www.youtube.com/embed/G9y-UrwgxVQ" frameborder="0" allowfullscreen></iframe>
  <h3>33 PAPER CRAFT Ideas You Will Love l ORIGAMI COMPILATON</h3>
</div>

<div id="Glass" class="tabcontent">
	<iframe width="854" height="480" src="https://www.youtube.com/embed/39S9nBf4vFg" frameborder="0" allowfullscreen></iframe>
  <h3>16 PAPER DIYs ANYONE CAN MAKE</h3>
</div>

<div id="Tins" class="tabcontent">
<iframe width="854" height="480" src="https://www.youtube.com/embed/iaoMAj1GCjw" frameborder="0" allowfullscreen></iframe>
  <h3>5 Paper Toy DIYs - 5 Minute Crafts - Things to Do When Bored</h3>
</div>
</div>


<script>
function openCity(cityName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(cityName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html> 