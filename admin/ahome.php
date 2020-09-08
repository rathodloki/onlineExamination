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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>S_home</title>
    
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

  </style>

</head>


<body>
    <form id="form1" >
     <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="shome.php">Online<span class="logo_colour">Examination</span></a></h1>
          <h2>MHCET | BSCIT | JEE</h2>
          </div>
      <div class="logoutk wd" id="dropdownl" onmouseover="myFunction()"><p class="dropbtn"><?php print"$user"?> <i class="fa fa-angle-down" style="margin-left:1px;"></i></button></br><div class="dropdown-content" id="dropcontent" style=" margin-left: 10px; border-radius:5px;border-bottom-color:#FF8E00;">
        <a href="alogout.php">Logout</a></div></div>
      </div>
        </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="ahome.php">Home</a></li>
          <li class="dropdown"style="display:"inline-block">


          <a  href="javascript:void(0)" class="dropbtn" style="width:112px;" >ManageExam</a>
          
          
          <div class="dropdown-content">
            <a href="mcourse.php"  style="color: #fc9c04;width:112px;">ManageCourse</a><br />
            
             <a href="msubject.php"  style="color: #fc9c04;width:112px;">ManageSubject</a><br />
             <a href="addcourse.php"  style="color: #fc9c04;width:112px;">AddCourses</a><br />
             <a href="addsub.php"  style="color: #fc9c04;width:112px;">AddSubject</a><br />
             
              
          
          </div>
         </li>
          
          <li><a href="help.php">Help</a></li>
          <li><a href="about.php">About Us</a></li>
        </ul>


      </div>
    <div id="site_content" style="background-image: none">
      <div class="sidebar">
      <p></p>
      
      </div>
      <div id="content" 
            style=" width: 1000px; height: auto;min-height:590px">
            &nbsp;<p style="height:10px;width:422px; font-size:25px; " align="center;">Admin Dashboard</p>
            <br />

           <img src="style/start.png" 
                style="width: 600px; height: 400px;border:solid;    
             border-color:#fc9c04;border-radius:10px;box-shadow: 0px 0px 20px rgba(0,0,0,0), 
             0px 0px 10px rgba(0,0,0,1); left: 20%;top: 400px;"/> 
    <br />
   
    </div>
    <div class="text" 
            style="font-size: 25px; text-align: center;width:700px; font-weight: bold;">Online Examination System</div>
    </div>
    </div>
 </div>
    
    <div id="footer">
      <p><a href="index.php">Home</a> | <a href="examples.php">Examples</a> | <a href="register.php">rigister</a> | <a href="help.php">help</a> | <a href="about.php">about Us</a></p>
      <p>Copyright &copy; night_sky_2 | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.php5webtemplates.co.uk">Website templates</a></p>
    </div>
  </div>
    </form>
 </div> 
 <script>

function myFunction(x) {
var wid=x.offsetWidth;
document.getElementById("dropcontent").style.width = wid;
}
</script>         
</body>
</html>
