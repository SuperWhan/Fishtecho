<title>All Users for fishtecho</title></head>
<body>
<br><br>
<?php
   $dbhost = 'localhost';
   $dbuser = 'fishtech_admin';
   $dbpass = 'abcdadmin';
   $dbname = 'fishtech_user_db';
   $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
   // Check connection
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   }
   print("<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 \">
              <table border = '1' cellpadding = '3' cellspacing = '2' >
                <tr><td>First Name</td><td>Last Name</td><td>Address</td><td>Email</td><td>Cell Phone</td><td>Mobile Phone</td></tr>
        ");

     $sql = "SELECT * FROM user ";
     $result = $conn->query($sql);
    // output data of each row
      if ($result->num_rows>0) {
        while($row = $result->fetch_assoc()) {
          print ("<tr>");
          foreach ($row as $key => $value )
          print ("<td>$value</td>");
          print ("</tr>");
         }
        print("</table></div></div></div><hr>");
     }
     else {
          print("
                 <h3> Invalid Search!</h3>
            ");
       }

$conn->close();

?>

</body>
</html>
