<?php
 $conn=mysqli_connect("localhost", "root", "", "MyDB"); 
 $username = $_POST['username'];
 $pwd = $_POST['pwd'];
 $SQLStr = "SELECT * FROM userinfo where username='$username' and pwd='$pwd'"; 
 echo $SQLStr ;
 $result=mysqli_query($conn, $SQLStr); 

 if ($row=mysqli_fetch_assoc($result)) 
 	  echo "<br>OK<br>";
  else 
 	  echo "<br>false<br>";

    mysqli_free_result($result);

    mysqli_close($conn);  
?>