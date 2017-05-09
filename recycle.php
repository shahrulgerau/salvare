<html>
<head>
<style>
body {font-family: "Lato", sans-serif;}

.tablink {
    background-color:#bbff33;
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
    color: black;
    display: none;
    padding: 50px;
    text-align: center;
}

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

#Paper {background-color:#bbff33;}
#Plastic {background-color:#bbff33;}
#Glass {background-color:#bbff33;}
#Tins {background-color:#bbff33;}
#Recycle {background-color:#f2f2f2;}
</style>
</head>
<body>

<a href="open.php" class="button1">Back</a>

<br>
<button class="tablink" onclick="openCity('Paper', this, 'green')" id="defaultOpen">Paper</button>
<button class="tablink" onclick="openCity('Plastic', this, 'green')">Plastic</button>
<button class="tablink" onclick="openCity('Glass', this, 'green')">Glass</button>
<button class="tablink" onclick="openCity('Tins', this, 'green')">Tins</button>



<div id="Paper" class="tabcontent">
<img src="img/paper.jpg" height="300" width="300">
  <h3>PAPER</h3>
  <p>All kind of paper can be recycle</p>
</div>

<div id="Plastic" class="tabcontent">
<img src="img/plastic.png" height="600" width="700">
  <h3>Plastic</h3>
  <p>For the future we need to recyle the plastic</p> 
</div>

<div id="Glass" class="tabcontent">
<img src="img/glass.jpg" height="300" width="300">
  <h3>Glass</h3>
  <p>Glass also are recyclable items.</p>
  <p>Including jars and glass bottle</p>

</div>

<div id="Tins" class="tabcontent">
<img src="img/tins.jpg" height="300" width="300">
  <h3>Tins</h3>
  <p>All the tins/metal product can be recyle </p>
</div>


<center>
<div id="Recycle">
<h1>Dont Forget</h1>
<h4>Your Bin</h4>
<p>Place the recylable waste into the BLUE bin</p> 
<p>1)Prepare any bins and label it as BLUE bin</p>
<p>2)Separate the recylable waste based on the recyclable item above</p>
<img src="img/blue.jpg" height="300" width="300">
</div>
</center>




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