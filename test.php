<?php
   include('con.php');
   $emv=$_POST['em1'];
   $num=$_POST['nm1'];
   $pasv=$_POST['pas1'];
   $stmt = $conn->prepare("INSERT INTO cloud_info(email, numbe, pass) VALUES (?, ?, ?)");
   $stmt->bind_param("sss", $emv, $num, $pasv);
   $stmt->execute();
   
?>