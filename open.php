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




<a href="open.php"><button class="tablink" onclick="openCity('Tutorial', this, 'red')" id="defaultOpen">Tutorial</button></a>
<a href="oa2.php"><button class="tablink" onclick="openCity('Innovation', this, 'green')">Innovation</button></a>
<a href="oa3.php"><button class="tablink" onclick="openCity('Find', this, 'blue')">Find</button></a>
<a href="oa4.php"><button class="tablink" onclick="openCity('Contact', this, 'orange')">Contact</button></a>

<div id="Contact" class="cc">
  <h3>Cojjjjj</h3>
  <p>Get to know the Salvare Project.</p>
</div>
<script>

     
</body>
</html> 
