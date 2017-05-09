<html>
<head>
<style>
body {font-family: "Lato", sans-serif;}

.tablink {
    background-color: #1a1aff;
    color: white;
    float: left;
    border: none;
    outline: 1;
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

#Nappies {background-color:#e6e6e6;}
#Chemical {background-color:#e6e6e6;}
#Broken {background-color:#e6e6e6;}
#Polystrene {background-color:#e6e6e6;}
</style>
</head>
<body>

<a href="open.php" class="button1">Back</a>

<br>
<button class="tablink" onclick="openCity('Nappies', this, '#e6e6e6')" id="defaultOpen">Nappies</button>
<button class="tablink" onclick="openCity('Chemical', this, '#e6e6e6')">Chemical</button>
<button class="tablink" onclick="openCity('Broken', this, '#e6e6e6')">Broken</button>
<button class="tablink" onclick="openCity('Polystrene', this, '#e6e6e6')">Polystrene</button>

<div id="Nappies" class="tabcontent">
<img src="img/nap.jpg" height="300" width="300">
  <h3>Nappies</h3>
  <p>The diry nappies cannot be recyle</p>
</div>

<div id="Chemical" class="tabcontent">
<img src="img/cem.jpg" height="300" width="300">
  <h3>Chemical</h3>
  <p>The chemical subtances must be separated from other waste</p> 
</div>

<div id="Broken" class="tabcontent">
<img src="img/broke.jpg" height="300" width="300">
  <h3>Broken Window Glass</h3>
  <p>The broken mirror is dangerous and crockery can't recyle but we can innovate from it </p>
</div>

<div id="Polystrene" class="tabcontent">
<img src="img/poly.jpg" height="300" width="300">
  <h3>Polystrene</h3>
  <p>Polystyrene foam is 95% air so it is not cost-effective to store or ship.</p>
  <p>It is often contaminated with food or drink, and it is difficult to clean because it is so porous. </p>
</div>

<center>
<div id="Recycle">
<h1>Dont Forget</h1>
<h4>Your Bin</h4>
<p>Place the recylable waste into the BLACK bin</p> 
<p>1)Prepare any bins and label it as BLACK bin</p>
<p>2)Separate the recylable waste based on the recyclable item above</p>
<img src="img/black.jpg" height="300" width="300">
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