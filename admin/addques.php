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
.removed:hover {
  opacity: 1;
  box-shadow: inset 1px 2px 8px rgba(0, 0, 0, 0.1);
}

  </style>

</head>


<body>
    <form id="form1" action="addques.php" method="post">
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
          <p style=" position: relative; font-weight:bold;font-size:15px;margin-left:20px; margin-top:30px; display:inline-block;" >Subject:</p><br>
          <select class="inadd" style="min-width:10px;" name="subject">
            
  <?php
              $cone=mysqli_connect("localhost","root","","exam") or die(mysql_errno());
              mysqli_select_db($cone,"exam") or die("cannot connect to database");
              $c_name= $_SESSION['c_name'];
              $snamed=$_GET['osubject'];
              $c_name=mysqli_query($cone,"select c_id from subject where s_name='".$snamed."'");
              $c_name=mysqli_fetch_array($c_name);
              $c_name=$c_name['c_id'];
              $query=mysqli_query($cone,"select * from subject where c_id=".$c_name."");
              
              $s_name= $_GET['osubject'];
              
                while ($row=mysqli_fetch_array($query))
                {
                  if(!strcmp($s_name,$row['s_name']))
                  {
                    print '<option value='.$row['s_id'].' selected >'.$row['s_name'].' </option>';
                    continue;
                  }
          print '<option value='.$row['s_id'].'>'.$row['s_name'].'</option>';
        }
  ?>
  </select>
  <br>
  <?php
 
  print mysqli_error($cone).'<br>';


  ?>
         

          <hr>

          <div id="ques">
            
          <p style="font-weight:bold;font-size:15px;margin-left:20px; margin-top:15px;">Question:</p>
          
           <input class="question" type="text" placeholder=" Enter Question" autocomplete="off" name="question[]" required><br>
           <input class="answer" type="text"   placeholder=" Answer 1" autocomplete="off" name="answer1[]" required>
           <input class="answer" type="text"   placeholder=" Answer 2" autocomplete="off" name="answer2[]" required>
           <input class="answer" type="text"   placeholder=" Answer 3" autocomplete="off" name="answer3[]" required>
           <input class="answer" type="text"   placeholder=" Answer 4" autocomplete="off" name="answer4[]" required>
           <input class="answer" type="text"   placeholder=" Correct Answer" autocomplete="off" name="correct[]" required>
         </div>
         <br>
          <input class="qadd"type="button" id="addques" value="Add more Questions" />
          <button class="badd" type="submit" name="btnSubmit" >Confirm</button>

         

    </div>
  </div>
</div>
    <div id="footer">
      <p><a href="index.php">Home</a> | <a href="examples.php">Examples</a> | <a href="register.php">rigister</a> | <a href="help.php">help</a> | <a href="about.php">about Us</a></p>
      <p>Copyright &copy; night_sky_2 | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.php5webtemplates.co.uk">Website templates</a></p>
    </div>
  </form>

<script>
  var n=2;
  $(document).ready(function(){
  $("#addques").click(function(){$("#ques").append("<div id='ques' <p style='font-weight:bold;font-size:15px;margin-left:20px; margin-top:15px;''>Question:</p><input class='removed' id='rmv' type='button' value='X' onclick='newFunction()' /><input class='question' type='text' placeholder='Enter Question' autocomplete='off' name='question[]' required><br><input class='answer' type='text'   placeholder=' Answer 1' autocomplete='off' name='answer1[]' required><input class='answer' type='text'   placeholder=' Answer 2' autocomplete='off' name='answer2[]' required><br><input class='answer' type='text'   placeholder=' Answer 3' autocomplete='off' name='answer3[]' required><input class='answer' type='text'   placeholder=' Answer 4' autocomplete='off' name='answer4[]' required><br><input class='answer' type='text'   placeholder='Correct Answer' autocomplete='off' name='correct[]' required></div>");
  });

  }); 

   function newFunction()
   {
      var remove = function(){
      this.parentNode.remove();};

      var lis = document.querySelectorAll('#ques');
      var button = document.querySelectorAll('.removed');

    
      
      for (var i = 0, len = lis.length; i < len; i++) 
      {
        button[i].addEventListener('click',remove, false);
        n=len;
      }
      
   
 }

  
</script>

<script>
  

</script>
</body>
</html>
<?php
$cone=mysqli_connect("localhost","root","","exam") or die(mysql_errno());
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $subject=mysqli_real_escape_string($cone,$_POST['subject']);
  $bool=true;
  mysqli_select_db($cone,"exam") or die("cannot connect to database");
  #mysqli_query($cone,"SELECT s_id FROM subject WHERE s_name=".$subject.");
  
if (isset($_POST['btnSubmit']))
{
  for($i=0;$i<count($_POST['question']);$i++)
  {
  $question=$_POST['question'][$i];
  $answer1=$_POST['answer1'][$i];
  $answer2=$_POST['answer2'][$i];
  $answer3=$_POST['answer3'][$i];
  $answer4=$_POST['answer4'][$i];
  $correct=$_POST['correct'][$i];
   mysqli_query($cone,"INSERT INTO test(s_id,que,a,b,c,d,correct) VALUES ('$subject','$question','$answer1','$answer2','$answer3','$answer4','$correct')");
  }
  $subj=mysqli_fetch_array(mysqli_query($cone,"SELECT s_name from subject where s_id=".$subject.""));
  print'<script>alert("suceesfully added!");</script>';
   print('<script>location.href = "editsub.php?osubject='.urlencode($subj['s_name']).'";</script>');
}
mysqli_close($cone);
}
?>
