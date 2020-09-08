<?php

session_start();
if($_SESSION['user'])
{

}
else
{
  header("location: index.php");  
}
$user=$_SESSION['user'];
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>night_sky_2 - another page</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
     .logoutk p
{
    color:#FFAA40;
    float:right;
    margin:10px;
    height:10px;
    width:auto;
    text-decoration:none;
    background:white;
     border-radius: 5px;
     text-align:center;
     transition: all 0.3s ;
      line-height: 0px;
      font-size: 100%;

  
}
#dropdownl {
    position: relative;
    display: inline-block;
    float: right;
    height: 20px;
    text-align: center;

    margin-top: 4px;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    
    
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    
    z-index: 1;
   
   
  }  

.logoutk p:hover
{
    color: #FF8E00;
     box-shadow: 0px 0px 0px 3px #FFAA40;
}  
.dropdown-content a:hover {background-color: #fff; color: #FF8E00;}

#dropdownl:hover .dropdown-content {display: block;}

#dropdownl:hover .dropbtn {background-color: #fff;}
.btnupdate {
    display: block;
    position: relative;
    float: left;
    width: 200px;
    padding: 0;
    font-weight: 600;
    text-align: center;
    line-height: 50px;
    color: #fff;
    border: none;
    border-radius: 10px;
    transition: all 0.3s;
    font-size: 20px;
}
.btnupdate {
    background: #FFAA40;
}
.btnupdate{
    box-shadow: 0px 0px 0px 0px #a66615;
 
    left: 250px;
}
.btnupdate.btnupdate:hover {
    box-shadow: 0px 0px 0px 5px #a66615;
}
table { white-space: nowrap; }

  </style>
</head>


<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">Online<span class="logo_colour">Examination</span></a></h1>
          <h2>MHCET | BSCIT | JEE</h2>
        </div>
         <div class="logoutk wd" id="dropdownl" onmouseover="myFunction()"><p class="dropbtn"><?php print"$user"?> <i class="fa fa-angle-down" style="margin-left:1px;"></i></button></br><div class="dropdown-content" id="dropcontent" style=" margin-left: 10px; border-radius:5px;border-bottom-color:#fc9c04;;"><a href="profile.php">Profile</a>
        <a href="logout.php">Logout</a></div></div>
      </div>
        
      
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="shome.php">Home</a></li>
          <li class="dropdown"style="display:inline-block">


          <a href="javascript:void(0)"class="dropbtn">ChooseCourse</a>
          
          
          <div class="dropdown-content">
            <?php
                      $cone=mysqli_connect("localhost","root","","exam") or die(mysql_errno());
                      mysqli_select_db($cone,"exam") or die("cannot connect to database");
                      $query=mysqli_query($cone,"select cname,c_id from courses");
                      while ($course=mysqli_fetch_array($query)) 
                      {
                         print'<a href="sstart.php?course='.$course['c_id'].'"  style="color: #fc9c04;width:118px;">'.$course['cname'].'</a><br />';
                       }
              ?>
          
          </div>
         </li>
          
          <li class="selected"><a href="help.php">Help</a></li>
          <li><a href="about.php">About Us</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
    
      <div id="content">
        <div align="center"> <h1 style="height:10px;width:422px; font-size:25px;margin-left:330px;margin-top:20px;"> <?php print"$user"?>'s Profile</h1></div>
        <br>
        <div  style="font-size:20px;margin-left:200px;margin-top:40px;">


          <?php
              $cone=mysqli_connect("localhost","root","","first_db") or die(mysql_errno());
              mysqli_select_db($cone,"first_db") or die("cannot connect to database");
              $query=mysqli_query($cone,"select * from users where username='$user'");
                while ($row=mysqli_fetch_array($query))
                {
                   print '<table>';
                   print '<tr><td><p>Name:</td><td><p>'. $row['fullname'].'</td></tr>';                
                   print '<tr><td><p>DOB:</td><td><p>'.$row['dob'].'</td></tr>';
                   print '<tr><td><p>Contact:</td><td><p>'.$row['contact'].'</td></tr>';
                   #print '<tr><td><p>Username:</td><td><p>'.$row['username'].'</td></tr>';
                   #print '<tr><td><p>Password:</td><td><p>'.$row['password'].'</td></tr>';
                   print '<tr><td><p>Address:</td><td><p>'.$row['address'].'</td></tr>';
                   print '<tr><td><p>Email:</td><td><p>'.$row['email'].'</td></tr>';
                   print '<tr><td><p>Gender:</td><td><p>'.$row['gender'].'</td></tr>';
                   print '</table>';
                }
              ?>


        </div>
        <br>
        <a class="btnupdate" style="color:white;" href="update.php">Update</a>

 </div>
    </div>
    <div id="footer">
      <p><a href="index.php">Home</a> | <a href="examples.php">Examples</a> | <a href="register.php">rigister</a> | <a href="help.php">help</a> | <a href="about.php">about Us</a></p>
      <p>Copyright &copy; night_sky_2 | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.php5webtemplates.co.uk">Website templates</a></p>
    </div>
  </div>
</body>
</html>
