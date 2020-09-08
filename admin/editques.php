<?php session_start();
if(!isset($_SESSION['user']))
{
  header("location: index.php");  
}
else
{
  
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
  <meta name="robots" content="noindex">
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
.add
{
   margin-top: 10px;
   margin-left: 10px;
   min-height: 600px;
   height: auto;
   width:1100px;
   box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
   border-radius: 10px;
   background-color: white;
}
.inadd
{
   
   width:250px;
   margin-left: 35px;
   margin-top: px;
 
 
   border: 1px solid #ccc;
   border-radius: 4px;
   background-color: white;
   border-color: lightgrey;
    padding: 12px 20px;
   transition: .18s ease-out;

}
.question:focus, .answer:focus, .inadd:focus {
  color: #4b515d;
  border: 1px solid #B8B6B6;
  box-shadow: inset 1px 2px 4px rgba(0, 0, 0, 0.01), 0px 0px 8px rgba(0, 0, 0, 0.2);
}

::placeholder {
    color: #aaa;
    opacity: 1; /* Firefox */
}
:-ms-input-placeholder { /* Internet Explorer 10-11 */
   color: #aaa;
}

::-ms-input-placeholder { /* Microsoft Edge */
   color: #aaa;
}
.badd
{
  height: 50px;
  width:100px;
  margin-left: 35px;
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
hr
{
 
 margin-top: 20px;
  width:1100px;
  background-color: lightgrey;
  border-top: 1px solid #ccc;

}
.question
{
    width: 63.5%;
    height: auto;
    padding: 12px 20px;
   margin-left: 35px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
.answer
{
    width: 30%;
    padding: 12px 20px;
   margin-left: 35px;
   margin-top: 10px;
    display: inline-block;
    border:1px solid #ccc;
    border-radius:4px;
    box-sizing: border-box;


}
.error
{
  
    list-style-type: disc;
    width: 24%;
    display: none;
    margin: 0 10px 1px 60px;
    padding: 8px 35px 8px 30px;
    color: #B94A48;
    background-color: #F2DEDE;
    border: 2px solid #EED3D7;
    border-radius: 4px;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
     -webkit-animation: slide-down .3s ease-out;
    -moz-animation: slide-down .3s ease-out;
}
@-webkit-keyframes slide-down {
      0% { opacity: 0;  }   
    100% { opacity: 1;  }
}
@-moz-keyframes slide-down {
      0% { opacity: 0;  }   
    100% { opacity: 1; }
}
.qadd
{
  height: 50px;
  width:auto;
  margin-left: 60px;
  margin-top: 20px;
  border:2px solid #ce7e00;
  font-size: 15px;
  color: white;
   padding: 12px 20px;
  border-radius:4px;
  background-color: #fc9c04;
  transition: .18s ease-out;
  margin-bottom: 20px;
}
.qadd:hover
{
  background-color: #ce7e00;
  box-shadow: inset 1px 2px 8px rgba(0, 0, 0, 0.1);
}
.removed {
 
  content: 'X'; // here is your X(cross) sign.


color: #fff;
font-weight: bold;
font-family: Arial, sans-serif;
  width: 32px;
  height: 32px;
  opacity: 0.5;
  float: right;
  border:none;
  margin-right: 20px;
  display: inline-block;
   transition: .18s ease-out;

}
.removed:hover {
  opacity: 1;
  box-shadow: inset 1px 2px 8px rgba(0, 0, 0, 0.1);
}

  </style>

</head>


<body>
   <?php print'<form id="form1" action="editques.php" method="post" onsubmit="return chkcorr()" >'; ?>
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
        <div class="add">
          <?php
          $test_id=$_GET['editqid'];
          print'<p style=" position: relative; font-weight:bold;font-size:15px;margin-left:20px; margin-top:30px; display:inline-block;name="test_id" value="'.$test_id.'" >Question('.$test_id.'):</p><br>';
          print'<div id="ques">';
          
          $cone=mysqli_connect("localhost","root","","exam") or die(mysql_errno());
          mysqli_select_db($cone,"exam") or die("cannot connect to database");
          
          $query=mysqli_query($cone,"SELECT * from test where t_id=".$test_id."");
          $f_query=mysqli_fetch_array($query);
          print'<input type="text"  style="display:none;" name="test_id" value="'.$test_id.'">
           <input class="question" type="text" style="margin-left:60px;" placeholder=" Enter Question" autocomplete="off" name="question" required value="'.$f_query['que'].'" ><br><hr>
           <br><p style=" position: relative; font-weight:bold;font-size:15px;margin-left:10px; margin-top:5px; display:inline-block;" >A:</p><input class="answer" type="text"  id="answer1" placeholder=" Answer 1" autocomplete="off" name="answer1" onchange="chkcorr()"  required value="'.$f_query['a'].'" ><br><p id="error_a" class="error">options should be differnt !!!</p>
           <br><p style=" position: relative; font-weight:bold;font-size:15px;margin-left:10px; margin-top:5px; display:inline-block;" >B:</p><input class="answer" type="text"  id="answer2" placeholder=" Answer 2" autocomplete="off" name="answer2" onchange="chkcorr()"  required value="'.$f_query['b'].'" ><br><p id="error_b" class="error">options should be differnt !!!</p>
           <br><p style=" position: relative; font-weight:bold;font-size:15px;margin-left:10px; margin-top:15px; display:inline-block;" >C:</p><input class="answer" type="text"  id="answer3" placeholder=" Answer 3" autocomplete="off" name="answer3" onchange="chkcorr()"  required value="'.$f_query['c'].'" ><br><p id="error_c" class="error">options should be differnt !!!</p>
           <br><p style=" position: relative; font-weight:bold;font-size:15px;margin-left:10px; margin-top:15px; display:inline-block;" >D:</p><input class="answer" type="text"  id="answer4" placeholder=" Answer 4" autocomplete="off" name="answer4" onchange="chkcorr()"  required value="'.$f_query['d'].'" ><br><p id="error_d" class="error">options should be differnt !!!</p><hr>
          <p style=" position: relative; font-weight:bold;font-size:15px;margin-left:10px; margin-top:15px; display:inline-block;" >Correct:</p><br><input class="answer" style="margin-left:60px;margin-bottom:10px;" type="text"  id="correct" placeholder=" Correct Answer" autocomplete="off" onchange="chkcorr()"  name="correct" required value="'.$f_query['correct'].'" ><br><p id="error_corr" class="error">correct answer is not match with one of the options !!!</p>'
           ?>
         </div>
         <br>
          <input class="qadd"type="submit" id="addques" value="Update" />

         </form>

    </div>
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
   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>

 <script>

var error_a=document.querySelector("#error_a")
,error_b=document.querySelector("#error_b")
,error_c=document.querySelector("#error_c")
,error_d=document.querySelector("#error_d")
,error_corr=document.querySelector("#error_corr");
var a_flag=0,b_flag=0,c_flag=0,d_flag=0,corr_flag=0;

function chkcorr()
{
   
    a_flag=0;
    b_flag=0;
    c_flag=0;
    d_flag=0;
    corr_flag=0;
    ans_flag=0;
    
    var a = document.querySelector("#answer1")
          ,b = document.querySelector("#answer2")
          ,c = document.querySelector("#answer3")
          ,d = document.querySelector("#answer4")
            ,correct = document.querySelector("#correct");


  if(a.value==b.value||a.value==c.value||a.value==d.value)
  {
    
    
    a.style.borderColor = "red";
    error_a.style.display="inline-block";
    if(b.value==a.value)
    {
      b.style.borderColor = "red";
      b_flag=1;
    }
    if(c.value==a.value)
    {
      c.style.borderColor = "red";
      c_flag=1;
    }
    if(d.value==c.value)
    {
      d.style.borderColor = "red";
      d_flag=1;
    }
      if(d.value==a.value)
    {
      d.style.borderColor = "red";
      d_flag=1;
    }
    a_flag=1;
    ans_flag=1;
    
  }
  if(b.value==c.value||b.value==d.value)
  {
    
    b.style.borderColor = "red";
    error_b.style.display="inline-block";
    if(c.value==b.value)
    {
      c.style.borderColor = "red";
      c_flag=1;
    }
    if (d.value==b.value)
    {
      d.style.borderColor = "red";
      d_flag=1;
    }
     b_flag=1;
    ans_flag=1;

  }
  if(c.value==d.value)
  {
    
    c.style.borderColor = "red";
    error_c.style.display="inline-block";
    if(d.value==c.value)
    {
    d.style.borderColor="red";
    d_flag=1;
    }
     c_flag=1;
    ans_flag=1;

  }
    if(a_flag==0||b_flag==0||c_flag==0||d_flag==0)
     {
     if (a_flag==0)
      {
        error_a.style.display="none";
        a.style.borderColor = "#ccc";
        
      }
       if (b_flag==0)
      {
        error_b.style.display="none";
        b.style.borderColor = "#ccc";     
         }
       if (c_flag==0)
      {
        error_c.style.display="none";
        c.style.borderColor = "#ccc";
      }
       if (d_flag==0)
      {
        error_d.style.display="none";
        d.style.borderColor = "#ccc";
      }
       if (corr_flag==0)
      {
        error_corr.style.display="none";
        correct.style.borderColor = "#ccc";
      }
    }
    if(ans_flag==1)
    {
      return false;
    }
    
    if ((correct.value!=a.value)&&(correct.value!=b.value)&&(correct.value!=c.value)&&(correct.value!=d.value))
    {
      correct.style.borderColor = "red";
    error_corr.style.display="inline-block";
    corr_flag=1;
    return false;
    }
     
}

  


</script>         
</body>
</html>
<?php
$cone=mysqli_connect("localhost","root","","exam") or die(mysql_errno());
 
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 
  $bool=true;
  $test_id=mysqli_real_escape_string($cone,$_POST['test_id']);
  $question=mysqli_real_escape_string($cone,$_POST['question']);
  $answer1=mysqli_real_escape_string($cone,$_POST['answer1']);
  $answer2=mysqli_real_escape_string($cone,$_POST['answer2']);
  $answer3=mysqli_real_escape_string($cone,$_POST['answer3']);
  $answer4=mysqli_real_escape_string($cone,$_POST['answer4']);
  $correct=mysqli_real_escape_string($cone,$_POST['correct']);
  $subject=mysqli_query($cone,"SELECT s_id from test where t_id=".$test_id."");
  $subject=mysqli_fetch_array($subject);
  $subject=mysqli_query($cone,"SELECT s_name from subject where s_id=".$subject['s_id']."");
  $subject=mysqli_fetch_array($subject);
  mysqli_select_db($cone,"exam") or die("cannot connect to database");
  mysqli_query($cone,"UPDATE test SET que = '$question',a='$answer1',b='$answer2',c='$answer3',d='$answer4',correct='$correct' WHERE t_id = '$test_id'");
  print('<script>alert("successfully updated!");</script>');
  print('<script>location.href = "editsub.php?osubject='.urlencode($subject['s_name']).'";</script>');
}
mysqli_close($cone);



?>