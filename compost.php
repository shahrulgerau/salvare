<html>
<head>
<style>
body {font-family: "Lato", sans-serif;}

.tablink {
    background-color: #e69900;
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

#Food {background-color:#e69900;}
#Gardening {background-color:#e69900;}
#Degradable {background-color:#e69900;}
#Other {background-color:#e69900;}

</style>
</head>
<body>

<a href="open.php" class="button1">Back</a>

<br>
<button class="tablink" onclick="openCity('Food', this, '#00cccc')" id="defaultOpen">Food</button>
<button class="tablink" onclick="openCity('Gardening', this, '#00cccc')">Gardening</button>
<button class="tablink" onclick="openCity('Degradable', this, '#00cccc')">Degradable</button>
<button class="tablink" onclick="openCity('Other', this, '#00cccc')">Other</button>


<div id="Food" class="tabcontent">
<img src="img/f1.jpg" height="300" width="300">
  <h3>Food</h3>
  <p>Compost your kitchen waste</p>
</div>

<div id="Gardening" class="tabcontent">
<img src="img/g1.jpg" height="300" width="300">
  <h3>Gardening</h3>
  <p>All the gardening waste including leaves and woody thing</p> 
</div>

<div id="Degradable" class="tabcontent">
<img src="img/c1.jpg" height="300" width="300">
  <h3>Compostable Product</h3>
  <p>Including the wood cutlery, paper cup and degradable polystrene</p>
</div>

<div id="Other" class="tabcontent">
<img src="img/hair.jpg" height="300" width="300">
  <h3>Others item</h3>
  <p>Including the our hairs, pet hair, tea bag, vacuum waste</p>
</div>



<center>
<div id="Recycle">
<h1>Dont Forget</h1>
<h4>Your Bin</h4>
<p>Place the recylable waste into the BROWN bin</p> 
<p>1)Prepare any bins and label it as BROWN bin</p>
<p>2)Separate the recylable waste based on the recyclable item above</p>
<img src="img/cbin.jpg" height="300" width="300">
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