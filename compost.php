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

#Food {background-color:#bbff33;}
#Gardening {background-color:#99e600;}
#Degradable {background-color:#77b300;}
#BioPolystrene{background-color:green;}
</style>
</head>
<body>

<a href="open.php" class="button1">Back</a>

<br>
<button class="tablink" onclick="openCity('Food', this, '#bbff33')" id="defaultOpen">Food</button>
<button class="tablink" onclick="openCity('Gardening', this, '#99e600')">Gardening</button>
<button class="tablink1" onclick="openCity('Degradable', this, '#77b300')">Degradable</button>
<button class="tablink1" onclick="openCity('BioPolystrene', this, 'green')">Bio-Polystrene</button>

<div id="Food" class="tabcontent">
<img src="img/paper.jpg" height="300" width="300">
  <h3>Food</h3>
  <p>All kind of paper can be recycle</p>
</div>

<div id="Gardening" class="tabcontent">
  <h3>Gardening</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Degradable" class="tabcontent">
  <h3>Degradable</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<div id="BioPolystrene" class="tabcontent">
  <h3>Polystrene</h3>
  <p>Oslo is the capital of Norway.</p>
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