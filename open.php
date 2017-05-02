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
</style>
</head>
<body>


<div id="Tutorial" class="tabcontent">
  <h3>Tutorial</h3>
  <p>This tutorial will show you how to differ type of waste</p>

</div>

<div id="Innovation" class="tabcontent">
  <h3>Lets do different things</h3>
  <p>5 minutes craft and compost step</p> 
</div>

<div id="Find" class="tabcontent">
  <h3>Find a recycling center</h3>
  <p>Get the best recyliing center.</p>
</div>

<div id="Contact" class="tabcontent">
  <h3>Contact US</h3>
  <p>Get to know the Salvare Project.</p>
</div>

<a href="open.php"><button class="tablink" onclick="openCity('Tutorial', this, 'red')" id="defaultOpen">Tutorial</button></a>
<a href="oa2.php"><button class="tablink" onclick="openCity('Innovation', this, 'green')">Innovation</button></a>
<a href="oa3.php"><button class="tablink" onclick="openCity('Find', this, 'blue')">Find</button></a>
<a href="oa4.php"><button class="tablink" onclick="openCity('Contact', this, 'orange')">Contact</button></a>

<div id="Contact" class="cc">
  <h3>Cojjjjj</h3>
  <p>Get to know the Salvare Project.</p>
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
</script>
     
</body>
</html> 
