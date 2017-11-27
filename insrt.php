<?php
   $var1= $_POST['r1'];
   $var2= $_POST['r2'];
   $var3= $_POST['r3'];
   $var6=$_POST['r6'];

   $conn=mysqli_connect("localhost","root","","test");
   $sql="INSERT INTO `leave`(`sdate`, `edate`, `reason`,`email`) VALUES('$var1','$var2','$var3','$var6')";
   mysqli_query($conn,$sql);

?>