<?php session_start();
if($_SESSION['user'])
{

}
else
{
  header("location: index.php");  
}
$user=$_SESSION['user'];
?>
<!DOCTYPE html PUBLIC "-//WDTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>S_home</title>
    
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <meta name="robots" content="noindex">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
 

<!------ Include the above in your HEAD tag ---------->


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
    width: 50.5%;
    height: auto;
    padding: 12px 20px;
   margin-left: 35px;
    display: inline-block;

    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
.Qp,.question
{
  display: inline-block;
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
.qadd
{
  height: 50px;
  width:auto;
  margin-left: 35px;
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

.btn-xs
{
  width: 35px;
  height: 35px;
  margin-left: 20px;
  vertical-align: top;
}
.btn-danger
{
  background-color:#9a0000;
  border-radius:5px;
  border:none;
   margin-top: 10px;
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
 $cone=mysqli_connect("localhost","root","","exam") or die(mysql_errno());
 mysqli_select_db($cone,"exam") or die("cannot connect to database");
$odsubject=$_GET['osubject'];
$oldsubject=(string)$odsubject;
$query1=mysqli_query($cone,"select *from subject");
$subject_id=mysqli_query($cone,"select s_id from subject where s_name='".$oldsubject."'");
echo mysqli_error($cone);
$subject_id=mysqli_fetch_array($subject_id);
$subject_id=$subject_id['s_id'];
$_SESSION['oldsubid']=$subject_id;

?>
<body>
    <?php print'<form id="form1" action="editsub.php?osubject='.urlencode($_SESSION['oldsubid']).'" method="post">' ?>
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
              $cone=mysqli_connect("localhost","root","","exam") or die(mysql_errno());
              
              mysqli_select_db($cone,"exam") or die("cannot connect to database");
              $time=mysqli_fetch_array(mysqli_query($cone,"select time from subject where s_name='".$oldsubject."'"));
              $odsubject=$_GET['osubject'];
              $oldsubject=(string)$odsubject;
          print'<p style=" position: relative; font-weight:bold;font-size:15px;margin-left:20px; margin-top:30px; display:inline-block;">Edit Subject:</p><br>';
           print'<input type="text" class="inadd" placeholder="Subject name" autocomplete="off" name="subject" required value="'.$oldsubject.'"></input><br>';
              print' <p style=" position: relative; font-weight:bold;font-size:15px;margin-left:20px; margin-top:30px; display:inline-block;" >Duration:</p><br>';
         print' <input type="text" style="width:200px;" class="inadd" placeholder="enter time" autocomplete="off" value="'.$time['time'].'" name="time" required></input><b style="margin-left:20px;">mins</b><br>';
           print'<hr>';
          
           $_SESSION['s_name']=$oldsubject;
           $subject_id=mysqli_query($cone,"select s_id from subject where s_name='".$oldsubject."'");
           echo mysqli_error($cone);
           $subject_id=mysqli_fetch_array($subject_id);
           $subject_id=$subject_id['s_id'];
           $_SESSION['oldsubid']=$subject_id;
           $mcq=mysqli_query($cone,"select que,t_id from test where s_id=".$subject_id.";");
            echo mysqli_error($cone);
          $n=1;

            while($row=mysqli_fetch_array($mcq))
          {
           print'<div id="ques">';
            
           print'<p class="Qp" style="font-weight:bold;font-size:15px;margin-left:20px; margin-top:15px;">Q('.$n.'):</p>';
            print'<input disabled class="question" type="text" placeholder=" Enter Question" autocomplete="off" name="question" required value="'.$row['que'].'" > 
            
            <a href="editques.php?editqid='.urlencode($row['t_id']).'" class="btnanchor btn-primary btn-xs"><i style=" font-size:20px;" class="fa fa-edit"></i> </a> 
            <a href="delques.php?delqid='.urlencode($row['t_id']).'"  class="btn btnanchor btn-danger btn-xs"> <i style=" font-size:20px;" class="fa fa-trash"></i> </a> <br>';
            $_SESSION['test_id']=$row['t_id'];
          print'</div>';
          $n++;
        }

          ?>
         <br>
          <input  class="qadd" type="submit" name="q_but" id="addques" value="Add more Questions" />
          <button class="badd" type="submit" name="btnSubmit" >Update</button>

    </div>
  </div>
</div>
</form>
    <div id="footer">
      <p><a href="index.php">Home</a> | <a href="examples.php">Examples</a> | <a href="register.php">rigister</a> | <a href="help.php">help</a> | <a href="about.php">about Us</a></p>
      <p>Copyright &copy; night_sky_2 | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.php5webtemplates.co.uk">Website templates</a></p>
    </div>
  

<script>


   function newFunction()
   {
      var remove = function(){
      this.parentNode.remove();};

      var lis = document.querySelectorAll('#ques');
      var button = document.querySelectorAll('.removed');

    
      
      for (var i = 0, len = lis.length; i < len; i++) 
      {
        button[i].addEventListener('click',remove, false);
       
      }
      
   
 }

  
</script>
</body>
</html>
<?php
$cone=mysqli_connect("localhost","root","","exam") or die(mysql_errno());
 
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $subject=mysqli_real_escape_string($cone,$_POST['subject']);
  $time=mysqli_real_escape_string($cone,$_POST['time']);
  $bool=true;
 
  mysqli_select_db($cone,"exam") or die("cannot connect to database");
if (isset($_POST['btnSubmit']))
{
  mysqli_query($cone,"UPDATE subject SET s_name = '$subject',time='$time' WHERE s_id = '$oldsubject'");
  print('<script>window.history.back();</script>');
  print('<script>alert("successfully updated!");</script>');
  print('<script>window.history.back();</script>');
}
else if(isset($_POST['q_but']))
{
$_SESSION['s_name']=$subject;
echo $_SESSION['s_name'];
print('<script>location.href = "addques.php?osubject='.urlencode($_SESSION['s_name']).'";</script>');
}
mysqli_close($cone);
}
?>
