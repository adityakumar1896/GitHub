
<style>
        body{
              
              overflow-x:auto;
              width: 1250px;
        }
        #em,#num,#pass,#pass1{
                border: 0.4px solid black;
               border-radius: 4px;
               padding: 6px;
               align-self: auto;
               width: 300px;   
        }
          .topnav.responsive a {
            float: none;
            display: block;
            text-align: left;
          }
        }
                
             
        .cred{
               border: 0.4px solid black;
               border-radius: 4px;
               padding: 6px;
               align-self: auto;
               width: 300px;
       }
        /* Style the links inside the navigation bar */
        
        /* Change the color of links on hover */
        .topnav {
                background-color: #333;
                overflow: hidden;
            }
            
            /* Style the links inside the navigation bar */
            .topnav a {
                float: center;
                display: inline-block;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }
            
            /* Change the color of links on hover */
            .topnav a:hover {
                background-color: #ddd;
                color: black;
            }
            
            
        
        
        /* Hide the link that should open and close the topnav on small screens */
        
        .bite:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #019ad2), color-stop(1, #33bdef));
	background:-moz-linear-gradient(top, #019ad2 5%, #33bdef 100%);
	background:-webkit-linear-gradient(top, #019ad2 5%, #33bdef 100%);
	background:-o-linear-gradient(top, #019ad2 5%, #33bdef 100%);
	background:-ms-linear-gradient(top, #019ad2 5%, #33bdef 100%);
	background:linear-gradient(to bottom, #019ad2 5%, #33bdef 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#019ad2', endColorstr='#33bdef',GradientType=0);
	background-color:#019ad2;
}
        .bite{
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
        width: 300px;
        }
        #f1{
                -webkit-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75);
                        -moz-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75);
                        box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75);
                        width: 300px;
                        padding: 40px;
                        border-radius: 6px;
                        margin-bottom: 50px;
        }
                .dol
                {
                        background-color: dodgerblue;
                        color: white;
                        font-family:cursive;
                        -webkit-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75);
                        -moz-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75);
                        box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75);
                        border-radius: 6px;
                }
                #headd{
                        padding: 30px;
                }
                #headd1{
                        padding: 30px;
                }
                #para
                {
                        padding-bottom: 30px;
                }
                #para1{
                        padding: 30px;
                }
                #lab1
                {
                        color:green;
                        font-family: sans-serif;
                        border: 0.8px solid green;
                        padding: 10px 25px 10px 25px; 
                        border-radius: 5px;
                        background: lightgreen;
                }
                .dol1
                {
                        background-color: white;
                        color: dodgerblue;
                        margin: 20px 20px 0px 20px;
                        
                        height: 600px;
                        font-family:cursive;
                        -webkit-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75);
                        -moz-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75);
                        box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75);
                        border-radius: 6px;
                }
        
        </style>
        <body>
                <center>
                        <div class="dol">
                                <h1 id="headd">Welcome to LMS</h1>
                                <p id="para">A Leave management system for you</p>
                                <div class="topnav" id="myTopnav">
                                        <a href="index.html">About</a>
                                        <a href="signup.php">Sign Up</a>
                                        <a href="login.php">Login</a>
                                        <a href="contact.html">Contact</a>
                                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
                                </div>
                                              
                               
                        </div>
                        <div class="dol1">
                                <h2 id="headd1">Sign up</h2>
                                <form id="f1" action=""method="post">
                                        <input id="em"class="cred"type="email" name="t1"placeholder="Email" required></br></br>
                                        <input id="num"class="cred"type="number" name="t2"placeholder="Phone number" maxlength="10"></br></br>
                                        <input id="pass"class="cred"type="password" name="t3"placeholder="Password" maxlength="9"required pattern="^[A-Za-z0-9]+"></br></br>
                                        <input id="pass1"class="cred"type="password" name="t4"placeholder="Confirm password" maxlength="9"required pattern="^[A-Za-z0-9]+"></br></br>
                                        <input class="bite"type="submit" name="submit1" value="Sign Up"></br></br>
                                        <label id="lab1">Please enter you information</label>
                                </form>
                                
                        </div>
                </center>
        
        </body>
<?php
       if(isset($_POST['submit1']))
       {
               $conn=mysqli_connect("localhost","root","");
               mysqli_select_db($conn,"test");
               $count=0;
               $usnm=$_POST['t1'];
               $numb=$_POST['t2'];
               $pass=$_POST['t3'];
               $pasc=$_POST['t4'];
               $result=mysqli_query($conn,"select * from cloud_info where email = '$_POST[t1]'");
               $count=mysqli_num_rows($result);
               if($count>0)
               {
                       ?>
                             <script type="text/javascript">
                                      var eg=document.getElementById('lab1');
                                      eg.innerHTML="Account already registered with this email id";
                                      eg.style.padding="5px";
                                      eg.style.fontSize="12px";

                                      //alert('Account already registered with this Email id');
                             
                             </script>
                       <?php
               }
               else if($pass!=$pasc)
               {
                       ?>
                       <script type="text/javascript">
                               
                                      var eg=document.getElementById('lab1');
                                      eg.innerHTML="Passwords not matching";
                                      eg.style.padding="5px";
                                      eg.style.fontSize="12px";
                                      eg.style.backgroundColor = "#FFC0CB";
                                      eg.style.border = "0.5px solid red";
                                      eg.style.color="red";
                                      setTimeout(myFunc, 3000);
                                      function myFunc()
                                      {

                                      }
                       </script>
                       <?php
               }
               else
               {
                     $usnm=$_POST['t1'];
                     $numb=$_POST['t2'];
                     $pass=$_POST['t3'];
                     $pasc=$_POST['t4'];
                     $pasn=md5($pass);
                     mysqli_query($conn,"insert into cloud_info values('$_POST[t1]','$_POST[t2]','$pasn')");
                     ?>
                       <script type="text/javascript">
                                      var eg=document.getElementById('lab1');
                                      eg.innerHTML="Your Account has been created";
                                      eg.style.padding="5px";
                                      eg.style.fontSize="12px";
                       </script>
                     <?php
               }
               

       }     
?>