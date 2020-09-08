

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
hr
{
  width:1100px;
  height: 1px;
  background-color: lightgrey;
  border-top: 1px solid #ccc;

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
.manager
{
  margin-top: 10px;
 background-color: #fff;
 min-height: 400px;
 width: 1100px;
 height: auto;

   border-radius: 10px;
   box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
   display:block;

}


.head
{
  margin-top:20px;
  margin-left:200px;
  display: inline-block;  
  font-size: 15px;
  color: #fff;


}
.rows
{
  
  margin-top: 15px;
  margin-left:200px;
  display: inline-block;
  font-size: 15px;
  width: 72px;
  text-align: center;
}
.hover
{
  height:50px;
  border: 1px solid #fc9c04;
  background-color: #fc9c04;
  margin-top:20px;
  border-radius: 10px 10px 0px 0px;
  box-shadow: inset 0px 0px 47px -17px rgba(0,0,0,1);

}

.hover_r
{
 height:50px;

 border: 1px solid #ccc;
 transition: all 0.3s ;
}
.hover_r:hover
{

box-shadow: inset 0px 0px 47px -17px rgba(0,0,0,1);
}
.badd
{
  height: 50px;
  width:110px;
 
  margin-top: 20px;
  margin-bottom: 20px;
  border:2px solid #ce7e00;
 
  color: white;
   padding: 12px 20px;
  border-radius:4px;
  background-color: #fc9c04;
  transition: .18s ease-out;
}
.badd:hover
{
  background-color: #ce7e00;
}
.rows-e
{
  margin-top: 15px;
  margin-left:200px;
  display: inline-block;
  font-size: 15px;
  
  text-align: left;
}
.rows-d
{

  margin-top: 10px;
  margin-left:200px;
  display: inline-block;
  font-size: 15px;
  height: 30px;
  text-align: left;

}
.rows-d:hover
{
  color: red;

 
}
.rows-e:hover
{
  color:  #0cb702;

}
.btn-xs
{
  width: 30px;
  height: 5px;
  
  vertical-align: top;
}
.btn-danger
{
  background-color:#9a0000;
  border-radius:5px;
  border:none;
  
  box-shadow: none;
  color: white;
  transition:0.5s;

}
.btn-primary
{
  background-color: #004900;
  border-radius:5px;
  border:none;
  box-shadow: none;
  color: white;
  transition:0.5s;

}
.btn-primary:hover
{
  background-color: #00b600;
    color: white;
}
.btn-danger:hover
{
  background-color: red;
  color: white;
}
.removed:hover {
  opacity: 1;
  box-shadow: inset 1px 2px 8px rgba(0, 0, 0, 0.1);
}
.btnanchor
{
  
  
  display: inline-block;
  height:25px; 
  padding-top: 10px;
  vertical-align: top;
  text-decoration: none;
  text-align: center;
  color: white;
  margin-top: 10px;

}
  </style>

</head>

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
          <li class="dropdown"style="display:inline-block">



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
      <div id="content" style=" width: 1000px; height: auto;min-height:590px">
                 <p style="font-weight:bold;font-size:20px;margin-left:20px; margin-top:px; display:inline-block;">Manage Subject:</p>
               <div class="manager">

                       <div class="hover" style="text-align:center;font-weight: bold;"><div class="head" style="margin-right:100px;" >
                        <?php 
                        $cone=mysqli_connect("localhost","root","","exam") or die(mysql_errno());
                      mysqli_select_db($cone,"exam") or die("cannot connect to database");
                      $odcourse=mysqli_real_escape_string($cone,$_GET['osubject']);
                       print strtoupper($odcourse);
                       ?></div></div>
                      
                      <?php
              $cone=mysqli_connect("localhost","root","","exam") or die(mysql_errno());
              mysqli_select_db($cone,"exam") or die("cannot connect to database");
                  $odcourse=mysqli_real_escape_string($cone,$_GET['osubject']);
                  $odcourse=(string)$odcourse;
                  $que=mysqli_query($cone,"select c_id from courses  where cname='".$odcourse."'");
                  print mysqli_error($cone);
                  $ques=mysqli_fetch_array($que);
                  print mysqli_error($cone);
             
              $query1=mysqli_query($cone,"select *from subject where c_id=".$ques['c_id']);
              $query2=mysqli_query($cone,"select cname from courses");

                while ($tables=mysqli_fetch_array($query1))
                {
                    #special char to string portable

                  $query2=mysqli_query($cone,"select cname from courses where c_id=".$tables[1]);
                  $course=mysqli_fetch_array($query2);
                if (strpos($tables[2], 'dot') !== false) {
                $tables[2]=str_replace("dot",".",$tables[2]);
                     } 
                if (strpos($tables[2], 'plus') !== false) {
                $tables[2]=str_replace("plus","+",$tables[2]);
                     }  
                  if (strpos($tables[2], 'sharp') !== false) {
                   $tables[2]=str_replace("sharp","#",$tables[2]);
                     }  
                   print'<div class="hover_r"><div class="rows">'.$tables[2].'</div><div class="rows">'.$course[0].'</div><a href="editsub.php?osubject='.urlencode($tables[2]).'" id="'.$tables[2].'" class="btnanchor btn-primary btn-xs rows-e"><i style=" font-size:15px;" class="fa fa-edit"></i> </a><a href="delsub.php?osubject='.urlencode($tables[2]).'"   id="'.$tables[2].'" class="rows-d btn btnanchor btn-danger btn-xs"> <i style=" font-size:15px;" class="fa fa-trash"></i></a></div>';
                }
                print($tables[2]);
              ?>
                 
                       
                      




                 </div>
                 <input class="badd" type="button" onclick="location.href='addsub.php';" value="Add Subject" />
               </div>
    </div>
  </div>
    <div id="footer">
      <p><a href="index.php">Home</a> | <a href="examples.php">Examples</a> | <a href="register.php">rigister</a> | <a href="help.php">help</a> | <a href="about.php">about Us</a></p>
      <p>Copyright &copy; night_sky_2 | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.php5webtemplates.co.uk">Website templates</a></p>
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
