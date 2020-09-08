<!DOCTYPE HTML>
<html>

<head>
  <title>night_sky_2 - another page</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <style type="text/css">
#subjectname
{
  font-weight: bold;
  font-size: 20px;
  margin-left: 500px;
    text-align: center;

}
.question
{
  height:50px;
  width:200px;
  border:solid;
  marin-left: 40px;
  margin-top: 20px;
  display: inline-block;
}

 #startE
    {
      background-color: white;
      min-height:240px;
      width: 550px;
     border-radius: 10px;
    box-shadow: 0px 5px 10px 0px rgba(0,0,0,0.2);
    margin-left: 65px;
    
    }
.textmcq
{
  margin-left: 20px;
  padding-top: 40px;
}
.head
{
  min-height: 30px;
  width: 550px;
  background-color: #FFAA40;
     border-top-left-radius: 10px;
     border-top-right-radius: 10px;

}
.sirno
{
  height: 25px;
    width: 25px;

    margin-top: 2px;
    margin-left: 45%;
    text-align: center;
    background-color: white;
    border-radius: 50%;
    display: inline-block;
    font-family: impact;
    font-size: 20px;
    text-align: center;
}
hr
{
 
 margin-top: 10px;
  width:550px;
  background-color: lightgrey;
  border-top: 1px solid #ccc;


}
.ques
{
  margin-left: 20px;
  margin-top: 20px;
  font-size: 15px;
}
.ans
{
  margin-left: 20px;
  margin-top: 20px;
  font-size: 15px;
}
a {
    text-decoration: none;
    display: inline-block;
    padding: 8px 16px;
}

a:hover {
    background-color: #ddd;
    color: black;
}
.score
{
  font-size: 20px;
  font-weight: bold;
  text-align: center;
  margin-top: 10px;
  margin-left: 30px;
  width: 80%;
}
#marks
{
  font-size: 20px;
  font-weight: bold;
  text-align: center;
  margin-top: 10px;
  margin-left: 30px;
  width: 80%;

}

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
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
          <li class="dropdown"style="display:inline-block">


          <a href="javascript:void(0)"class="dropbtn">Accounts</a>
          
          
          <div class="dropdown-content">
             <a href="index.php"  style="color: #fc9c04;width:72px;">SignIn</a>
             <br />
             <a href="register.php"style="color: #fc9c04;width:72px;">SignUp</a>
          
          
          </div>
         </li>
          
          <li class="selected"><a href="help.php">Help</a></li>
          <li><a href="about.php">About Us</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
          <div class="sidebar">
      <p class="score">Score
        <p id="marks">
      </p><br><br>
      <p id="correct" style="color:green ;font-size:15px;">
      </p>
      <p id="unanswered" style=" font-size:15px; ">
      </p>
      <p id="incorrect" style="color:red ;font-size:15px;">
      </p>
      </p>
      </div>
      <div id="content">
        
  <p id="subjectname" ><?php 
  $subject=$_GET['subject'];
  echo $subject;
    ?>
</p>
<br>


                      
                      <?php
$cone=mysqli_connect("localhost","root","","exam") or die(mysql_errno());

  $subjectid=mysqli_query($cone,"SELECT s_id from subject where s_name='".$subject."'");
  $subjectid=mysqli_fetch_array($subjectid);
  $testpaper1=mysqli_query($cone,"SELECT * from test where s_id='".$subjectid['s_id']."'");
        $i=1;$incorr=0;$NA=0;
        $score=0;
        while($testpaper=mysqli_fetch_array($testpaper1))
        {
          echo'<div id="startE"><div class="head"><div class="sirno">'.$i.'</div></div>
           <div class="ques"> <p>Q.'.$i.')  
           '.$testpaper['que'].'
           
           </p></div>
            <hr>
    <div class="ans">   
    <p>Correct Answer <b>: </b>'.$testpaper['correct'].'</p>';
    if(isset($_POST['question'.$i]))
    {
      if($testpaper['correct']===$_POST['question'.$i])
      {
    echo' <p style="display: inline-block">Your Answer <b> : </b>  <p style="color:#4CAF50;display:inline-block">'. $_POST['question'.$i].'</p></p>'; 
      $score++;
      }
      else
      {
    echo' <p style="display: inline-block">Your Answer <b> : </b>  <p style="color:#f44336;display:inline-block">'.$_POST['question'.$i].'</p></p>'; 
      $incorr++;
      }
    } 
    else
    {
      echo' <p>Your Answer <b>: </b>Not Answered</p>'; 
      $NA++;
    }

    echo'</div>
            

  </div><br>';

  $i++;
}
print '<script>document.getElementById("marks").innerHTML="Your Score is '.$score.' !!!"</script>';
print '<script>document.getElementById("correct").innerHTML="Correct <b>:</b> '.$score.' "</script>';
print '<script>document.getElementById("incorrect").innerHTML="InCorrect <b>:</b> '.$incorr.'"</script>';
print '<script>document.getElementById("unanswered").innerHTML="Unanswered <b>:</b> '.$NA.' "</script>';
  
  ?>
                 
                </div>

                 </div>
                       
                      




                 </div>
    </div>

    <div id="footer">
</div>
  </div>
</body>
</html>
