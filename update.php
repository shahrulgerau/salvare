<html>
   
   <head>
      <title>Update a Record in MySQL Database</title>
   </head>
   
   <body>
      <?php
         if(isset($_POST['update'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
			
            $id=($_POST['ID']);
			$price=trim($_POST['Prices']);
			$rating=mysql_real_escape_string($_POST['Rating']);
            
            $sql = "UPDATE center SET Prices=('$price'),Rating=('$rating') WHERE ID='$id'" ; 

            mysql_select_db('sal');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not update data: ' . mysql_error());
            }
            echo "Updated data successfully\n\n <a href=\"update_facility.php\">click here to update more.</a>";
            
            mysql_close($conn);
         }else {
            ?>
               Can't Update!
            <?php
         }
      ?>
      
   </body>
</html>