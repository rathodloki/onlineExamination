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
<head runat="server">
      <title>night_sky_2</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php 
$cone=mysqli_connect("localhost","root","","exam") or die(mysql_errno());
$course_id=mysqli_real_escape_string($cone,$_GET['course']);

$query=mysqli_query($cone,"SELECT s_id from subject where c_id=".$course_id."");
$qid=mysqli_fetch_array($query);
?>
<script>
    $(document).ready(function () {
        $("button").click(function () {
            $("#content").load("sques.php?qid=0");
            document.getElementById("orangebtn").style.display = "none";
            
        });
    });
    </script>
  <style>
      
      
      button.button {
  display: block;
  position: relative;
  width: 200px;
  padding: 0;
  margin-left: 50%;
  font-weight: 600;
  text-align: center;
  line-height: 70px;
  color: #FFF;
  border:none;
  border-radius: 10px;
  transition: all 0.3s ;
  font-size:20px;
 margin-left: -230px;
 margin-top: 0px;
  
}
.btnOrange {
  background: #FFAA40;
}
.btnFade.btnOrange:hover {
  background: #FF8E00;
}
.btnOrange.btnBorder {
  box-shadow: 0px 0px 0px 0px #A66615;
          top: 20px;
          left: 590px;
      }

.btnOrange.btnBorder:hover {
  box-shadow: 0px 0px 0px 5px #A66615;
}
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

.sub_info
{
  width:250px;
  height:150px;
  background-color: white;
  box-shadow: inset 1px 2px 4px rgba(0, 0, 0, 0.01), 0px 0px 8px rgba(0, 0, 0, 0.2);
   border-radius: 10px;
margin-left: 330px;
margin-top: 100px;
display:inline-block;
}
.head
{
  min-height: 30px;
  background-color: #FFAA40;
     border-top-left-radius: 10px;
     border-top-right-radius: 10px;

}
.sirno
{
  height: 25px;
    min-width: 50px;
    margin-top: 2px;
    margin-left: 40%;
    text-align: center;
    background-color: white;
    border-radius: 10%;
    display: inline-block;
    font-weight: bold;
    font-size: 15px;
    text-align: center;
}
.inadd
{
   
   width:80px;
   margin-left: 80px;
  margin-top: 20px;
 
   border: 1px solid #ccc;
   border-radius: 4px;
   background-color: white;
   border-color: lightgrey;
    padding: 5px 5px;
   transition: .18s ease-out;

}
.inadd:focus {
  color: #4b515d;
  border: 1px solid #B8B6B6;
  box-shadow: inset 1px 2px 4px rgba(0, 0, 0, 0.01), 0px 0px 8px rgba(0, 0, 0, 0.2);
}
.time
{
  display: inline-block;
}

  </style>
  <script>
 window.onload=loadXMLDoc;
function loadXMLDoc()
{
  var e = document.getElementById("drp_sub");
var maincat = e.options[e.selectedIndex].value;

if(maincat=="c++")
{
  maincat="cplusplus";
}
if(maincat=="c#")
{
  maincat="csharp";
}
var xmlhttp;
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
  {
document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","time.php?q="+maincat,true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("maincat_var=maincat");
}
function gofun()
{
  var e = document.getElementById("drp_sub");
  var subid = e.options[e.selectedIndex].value;
  if(subid=="c++")
  {
    location.href = "sques.php?subid=c%2B%2B";
  }
  else if(subid=="c#")
  {
    location.href = "sques.php?subid=c%23";
  }
  else
  {
  location.href = "sques.php?subid="+subid;
  }
}
</script>
</head>
<body>
     <div id="main">
    <div id="header">
      <div  id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">Online<span class="logo_colour">Examination</span></a></h1><br>
          <h2>MHCET | BSCIT | JEE</h2>
        </div>
      <div class="logoutk wd" id="dropdownl" ><p class="dropbtn"><?php print"$user"?> <i class="fa fa-angle-down" style="margin-left:1px;"></i></button></br><div class="dropdown-content" id="dropcontent" style=" margin-left: 10px; border-radius:5px;border-bottom-color:#FF8E00;"><a href="profile.php">Profile</a>
        <a href="logout.php">Logout</a></div></div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="shome.php">Home</a></li>
          <li class="dropdown"style="display:inline-block">
          <a href="javascript:void(0)" class="dropbtn">ChooseCourse</a>
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
    <div id="site_content" >
    
    
    
     <div id="contnt">
      <?php
          $cone=mysqli_connect("localhost","root","","exam") or die(mysql_errno());
            mysqli_select_db($cone,"exam") or die("cannot connect to database");
          $course=mysqli_real_escape_string($cone,$_GET['course']);
         $query=mysqli_fetch_array(mysqli_query($cone,"select cname from courses where c_id='".$course."'"));

      ?>
      <div class="sub_info">
        <div class="head"><div class="sirno"><?php print $query['cname'] ?></div></div>
        <p style=" float:left font-size:15px;margin-left:30px; margin-top:30px; display:inline-block;">Subject:</p>
             <select class="inadd" id="drp_sub" style="min-width:10px;" name="subject"  onchange='loadXMLDoc()'>
            
  <?php
              $query=mysqli_query($cone,"select * from subject where c_id=".$course."");              
                while ($row=mysqli_fetch_array($query))
                {
                    print '<option value='.$row['s_name'].' selected >'.$row['s_name'].' </option>';
        }
  ?>
  </select><br>
        <p style=" float:left font-size:15px;margin-left:30px; margin-top:10px; display:inline-block;">Time:</p>
        <p style=" float:left font-size:15px;margin-left:30px; margin-top:10px; display:inline-block;"></p>
        <p class="time"style=" id="time" float:right; font-size:15px;margin-left:80px; margin-top:10px; display:inline-block;"></p><p id="myDiv" class="time"style="margin-left:80px"></p>

  <br>     
      </div>
      
    <button title="Button border orange" onclick="gofun()" class="button btnBorder btnOrange" id="orangebtn">Start Exam</button>
  </div>
 </div>

    </div>
    <div id="footer">
      <p><a href="index.php">Home</a> | <a href="examples.php">Examples</a> | <a href="register.php">rigister</a> | <a href="help.php">help</a> | <a href="about.php">about Us</a></p>
      <p>Copyright &copy; night_sky_2 | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.php5webtemplates.co.uk">Website templates</a></p>
    </div>
  </div>
  
</body>
</html>
