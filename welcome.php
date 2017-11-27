<style>
.bite,#bit{
       
                -moz-box-shadow: 0px 1px 0px 0px #f0f7fa;
	-webkit-box-shadow: 0px 1px 0px 0px #f0f7fa;
	box-shadow: 0px 1px 0px 0px #f0f7fa;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #33bdef), color-stop(1, #019ad2));
	background:-moz-linear-gradient(top, #33bdef 5%, #019ad2 100%);
	background:-webkit-linear-gradient(top, #33bdef 5%, #019ad2 100%);
	background:-o-linear-gradient(top, #33bdef 5%, #019ad2 100%);
	background:-ms-linear-gradient(top, #33bdef 5%, #019ad2 100%);
	background:linear-gradient(to bottom, #33bdef 5%, #019ad2 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#33bdef', endColorstr='#019ad2',GradientType=0);
	background-color:#33bdef;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #057fd0;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px -1px 0px #5b6178;
        width: 200px;
        

}
.clat{
        border: 0.4px solid black;
               border-radius: 4px;
               padding: 6px;
        
               width: 300px;
}

#jike{
        width:800px;
        height:300px;
        margin-top:15px;
        border: 0.8px solid black;
        padding:10px;
        border-radius:8px;
        color: black;
        font-family:sans-serif;
        display: inline-block;
        -webkit-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75);
}
.jik1{
        width:300px;
        height:220px;
        margin:10px;
        border: 0.8px solid black;
        padding:10px;
        border-radius:8px;
        color: black;
        font-family:sans-serif;
        float:center;
}
#did1{
        height:430px;
        width:850px;
        border-radius:8px;
        -webkit-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75);
}

#ln1{
        font-family:sans-serif;
        font-size:15px;
        text-align:center;
        background-color : dodgerblue;
        padding: 10px 20px 10px 20px;
        margin-top:10px;
        color: white;
        border-radius:6px;
}
#error
{
        font-size:12px;
        background-color : #FFC0CB;
        border : 0.5px solid red;
        font-family:sans-serif;
        color : red;
        padding:15px;
        border-radius:10px;
}
a{
        margin-top:15px;
        text-decoration: none;
        color:green;
        font-family: sans-serif;
         border: 0.8px solid green;
         padding: 10px 25px 10px 25px; 
        border-radius: 5px;
        background: lightgreen;
}
</style>
<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/smooth-scroll/SmoothScroll.js"></script>
<!--[if lte IE 9]>
  <script src="assets/jquery-placeholder/jquery.placeholder.min.js"></script>
<![endif]-->
<script src="assets/mobirise/js/script.js"></script>
<script src="assets/formoid/formoid.min.js"></script>
<script>
        function bn_click()
        {
                var r1=document.getElementById('d1').value;
                var r2=document.getElementById('d2').value;
                var r3=document.getElementById('d3').value;
                var r4=document.getElementById('ln1').innerHTML;
                var r5=r4.substring(8,r4.length);
                var r6=r5.trim();
                alert(r5);
                $.ajax({
                     type: "post",
                     url: "insrt.php",
                     data: {r1:r1,r2:r2,r3:r3,r6:r6},
                     cache:false,
                     success: function(html){
                     alert("Leave Applied successfully");
                }

            });
            alert("Applying Leave");
            location.reload();
        }
      
</script>
<?php
if(isset($_POST['submit1']))
{
        $pwd=md5($_POST['t3']);
        $emai=$_POST['t1'];
        $conn=mysqli_connect("localhost","root","");
        mysqli_select_db($conn,"test");
        $count=0;
        $result=mysqli_query($conn,"select email,numbe from cloud_info where email='$_POST[t1]' && pass='$pwd'");
        $count=mysqli_num_rows($result);
        if(empty($_POST['t1']) || empty($_POST['t3']))
        {
              echo '<center><div id="error"></div></center>';
        }
        else if($count==0)
        {
                echo '<center><div id="error">Invalid username/password combination &nbsp &nbsp &nbsp
                <a href="http://localhost/Lock/login.php">Back to Login</a></div></center>';
        }
        else if($count>0)
        {
                while($roww=$result->fetch_assoc())
                {
                        $emal=$roww['email'];
                        $numbb=$roww['numbe'];
                        session_start();
                        ob_start();
                        $_SESSION['emm']=$emal;
                        $_SESSION['number']=$numbb;
                        //$_SESSION['var']='myin';
                        echo '<center><div id="did1"></br>&nbsp
                        <label id="ln1">Welcome '.$_SESSION['emm'].'</label></br></br>
                        
                        <div class="jik1">Photo</br>
                        <img src="prof.jpg" id="im1" height="110" width="110" ></br>
                        &nbsp &nbsp</br>
                        <form method="post" action="welcome.php" enctype="multipart/form-data">
                        <center></center>
                        </div></br>
                        <label style="font-family:sans-serif;
                        font-size:15px;
                        text-align:center;
                        background-color : dodgerblue;
                        padding: 10px 20px 10px 20px;
                        margin-top:10px;
                        color: white;
                        border-radius:6px;">Phone-number : '.$_SESSION['number'].'</label></br></br>
                        <a href="http://localhost/Lock/login.php" class="bite">Logout</a></br>
                        </div></center>';
                        echo '<center><div id="jike"></br></br>
                        <form>Start Date : <input id="d1" type="datetime-local" class="clat"></br></br>
                        End Date : <input type="datetime-local" id="d2" class="clat"></br></br>
                        <textarea class="clat"placeholder="Reason of leaving" rows="4" id="d3" cols="50"></textarea></br></br>
                        <input type="button" id="b1" class="bite" name="submit2" value="Submit" onclick="bn_click()">
                        </form>
                        </div></center></br>';
                        echo '<center><label id ="lb1" style="font-family:sans-serif;
                        font-size:15px;
                        text-align:center;
                        background-color : dodgerblue;
                        padding: 10px 20px 10px 20px;
                        margin-top:10px;
                        color: white;
                        border-radius:6px;">Prior Leaves</label></center></br>';
                        print_leaves($emal);
                        
                }
        }
        
}
function print_leaves($eman)
{
        $connn=mysqli_connect("localhost","root","","test");
        $coun=0;
        $varr;
        $reslt=mysqli_query($connn,"SELECT `sdate`, `edate`, `reason` FROM `leave` WHERE email='$eman'");
        while($rower=$reslt->fetch_assoc())
        {
                $varr=substr($rower['sdate'],0,10);
                $var1=substr($rower['sdate'],11,19);
                $var2=substr($rower['edate'],0,10);
                $var3=substr($rower['edate'],11,19);
                $var4=$rower['reason'];
                echo '<center><div style="padding:15px;border:0.7px solid black;width:700px;border-radius:6px;
                -webkit-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.75);
                -moz-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.75);
                box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.75);">
                <label style="font-family:sans-serif;">Start Date (yyyy-dd-mm) : '.$varr.'</label> &nbsp &nbsp
                <label style="font-family:sans-serif;">Start Time (24 hour format) : '.$var1.'</label></br></br>
                <label style="font-family:sans-serif;">End Date (yyyy-dd-mm) : '.$var2.'</label> &nbsp &nbsp
                <label style="font-family:sans-serif;">End Time (24 hour format) : '.$var3.'</label></br></br>
                <label style="font-family:sans-serif;">Reason of Leave : '.$var4.'</label>
                </div></center></br>';
        }
}
   //echo 'user is '.$_POST['t1'];
?>
