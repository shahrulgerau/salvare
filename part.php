<html>
<head>
<style>
body {font-family: "Lato", sans-serif;}

.tablink {
    background-color: #ff6666;
    color: white;
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

#Mobile {background-color:#ff6666;}
#PC {background-color:#ff6666;}
#Gadget {background-color:#ff6666;}
#Wire{background-color:#ff6666;}
</style>
</head>
<body>

<a href="open.php" class="button1">Back</a>

<br>
<button class="tablink" onclick="openCity('Mobile', this, '#660000')" id="defaultOpen">Mobile</button>
<button class="tablink" onclick="openCity('PC', this, '#660000')">PC</button>
<button class="tablink" onclick="openCity('Gadget', this, '#660000')">Gadget</button>
<button class="tablink" onclick="openCity('Wire', this, '#660000')">Wire and Cable</button>

<div id="Mobile" class="tabcontent">
<img src="img/fon.jpg" height="400" width="400">
  <h3>Mobile</h3>
  <p>All the handphone part can be recyle</p>
  <br><br>
  <h4>MORE INFO</h4>
  <img src="img/smart.png" height="800" width="900">

</div>

<div id="PC" class="tabcontent">
<img src="img/pc.jpg" height="300" width="300">
  <h3>PC</h3>
  <p>Laptop and also personal computer part can be recycle</p> 
</div>

<div id="Gadget" class="tabcontent">
<img src="img/gajet.jpg" height="300" width="300">
  <h3>Gadget</h3>
  <p>example: Camera, Mouse, cooling fan, </p>
</div>

<div id="Wire" class="tabcontent">
<img src="img/wire.jpg" height="300" width="300">
  <h3>Wire and Cable</h3>
  <p>Unused and non-function wire and also cable</p>
</div>

<center>
<div id="Recycle">
<h1>Dont Forget</h1>
<h4>Your Bin</h4>
<p>Place the recylable waste into the Special BLUE bin</p> 
<p>1)Prepare any bins and label it as Special BLUE bin</p>
<p>2)Separate the electronic based on the classification</p>
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