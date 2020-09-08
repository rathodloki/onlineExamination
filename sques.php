
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
     <title>night_sky_2 - another page</title>
  <meta name="description" content="website description" />

  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<style type="text/css">
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



.round {
    border-radius: 50%;
}
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
#subjectname
{
  font-weight: bold;
  font-size: 20px;
  margin-left: 20px;
    text-align: center;

}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
     position: fixed;
     top: 550px;
     left: 1000px;
    box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.3);
     

}

.button1 {
     background-color: #4CAF50;
    color: white;
    border-radius: 5px;

}

.button1:hover {
    background-color: #f44336;
    color: white;
    border-radius: 15px;
}
.timeleft
{
  font-size: 20px;
  font-weight: bold;
  text-align: center;
  margin-top: 10px;
  margin-left: 30px;
  width: 80%;



}
.timebar
{
  width: 200px;
  height: 30px;
  margin-left: 20px;
   -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
   border-style: solid;
  margin-bottom: 10px;
  background-color: #4CAF50;
    color: white;
    border-radius: 10px;
    box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.3);
    text-align: center;
cursor: pointer;
  line-height: 30px;
}
.timebar:hover
{
    border-radius: 30px;
    background-color: #f44336;
    color: white;

}
.sticky
{
  width: 200px;
  height: 30px;
  position: fixed;
  top: 500px;
     left: 960px;
}
.numberCircle {
  border-radius: 50%;
  behavior: url(PIE.htc);
  /* remove if you don't care about IE8 */
  display: inline-block;
  margin-left: 30px;
  margin-top: 20px;
  text-align: center;
  width: 20px;
  height: 20px;
  padding: 8px;
  oacity: 0.5;
  border: 2px solid #9a9494;
  line-height: 10px;
  color: #9a9494;
  text-align: center;
  font: 25px Arial, sans-serif;
}
    </style>
  <script>
 window.onload=next;
function next()
{
  var e = document.getElementById("nextid");
var maincat = "next";
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
xmlhttp.open("POST","data_ques.php?q=next",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
}

function prev()
{
  var e = document.getElementById("previd");
var maincat = "prev";
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
xmlhttp.open("POST","data_ques.php?q=next",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
alert("prev");

}
</script>  
</head>
<body>
<?php 
  $subject=$_GET['subid'];
  if($subject==="c++")
  {
    $subject="c%2B%2B";
  }
  if($subject==="c#")
  {
    $subject="c%23";
  }
    
    echo'<form id="form1" action="resultchk.php?subject='.$subject.'" method="post" onsubmit="return sure()" runat="server">';?>
   <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1 ><a href="index.php">Online<span class="logo_colour">Examination</span></a></h1>
          <h2>MHCET | BSCIT | JEE</h2>
        </div>
              <div class="logoutk wd" id="dropdownl" onmouseover="myFunction()"><p class="dropbtn"><?php print"$user"?> <i class="fa fa-angle-down" style="margin-left:1px;"></i></button></br><div class="dropdown-content" id="dropcontent" style=" margin-left: 10px; border-radius:5px;border-bottom-color:#FF8E00;"><a href="profile.php">Profile</a>
        <a href="logout.php">Logout</a></div></div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="ahome.php">Home</a></li>
          <li class="dropdown"style="display:inline-block">


          <a href="javascript:void(0);" class="dropbtn">Accounts</a>
          
          
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
    <div id="site_content">
      <div class="sidebar">
        <div class="timeleft"><p>Time Left :</p>
  <div id="timebar1" class="timebar"></div>
      </div>
  
      
    </div>
      <div id="content" >
<div class="ques_content"  style="overflow-y: scroll; height:580px;width:800px;">
  <p id="subjectname" ><?php 
  $subject=$_GET['subid'];
  echo $subject;
    ?>
</p>
<?php
$cone=mysqli_connect("localhost","root","","exam") or die(mysql_errno());

  $subjectid=mysqli_query($cone,"SELECT s_id from subject where s_name='".$subject."'");
  $subjectid=mysqli_fetch_array($subjectid);
  $testpaper1=mysqli_query($cone,"SELECT * from test where s_id='".$subjectid['s_id']."'");
        $i=1;
        while($testpaper=mysqli_fetch_array($testpaper1))
        {
          echo'<div id="startE"><div class="head"><div class="sirno">'.$i.'</div></div>
           <div class="ques"> <p>Q.'.$i.')  
           '.$testpaper['que'].'
           
           </p></div>
            <hr>
    <div class="ans">        
    <input type="radio" name="question'.$i.'" value='.$testpaper['a'].' > '.$testpaper['a'].'<br />
  <input type="radio" name="question'.$i.'" value='.$testpaper['b'].'> '.$testpaper['b'].'<br />

  <input type="radio" name="question'.$i.'" value='.$testpaper['c'].'> '.$testpaper['c'].'<br />
    <input type="radio" name="question'.$i.'" value='.$testpaper['d'].'> '.$testpaper['d'].'<br />
  </div>
            

  </div><br>';

  $i++;
}

  ?>
</div>
    <input type="submit" class="button button1"  value="Submit Exam"> 

    </div>

    </div>
    </form>
 </div>
    </div>
    <div id="footer">
      <p><a href="index.php">Home</a> | <a href="examples.php">Examples</a> | <a href="register.php">rigister</a> | <a href="help.php">help</a> | <a href="about.php">about Us</a></p>
      <p>Copyright &copy; night_sky_2 | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.php5webtemplates.co.uk">Website templates</a></p>
    </div>
  </div>
  <script type="text/javascript">


/*var para = document.getElementById('subjectname');
var maincat = para.textContent;
if(maincat=="c++")
{
  maincat="c%2B%2B";
}
if(maincat=="c#")
{
  maincat="c%23";
}
function reqListener () {
      console.log(this.responseText);
    }

    var oReq = new XMLHttpRequest(); //New request object
    oReq.onload = function() {
        //This is where you handle what to do with the response.
        //The actual data is found on this.responseText
        
       
      var data=this.responseText;
      var jsonResponse = JSON.parse(data);
      alert(jsonResponse["data"]);
        //Will alert: 42
    };
    oReq.open("get", "get-time.php?subject="+maincat, true);
    //                               ^ Don't block the rest of the execution.
    //                                 Don't wait until the request finishes to 
    //                                 continue.
    oReq.send();


*/

<?php 
$cone=mysqli_connect("localhost","root","","exam") or die(mysql_errno());
mysqli_select_db($cone,"exam") or die("cannot connect to database");
  $subjectid=mysqli_query($cone,"SELECT time from subject where s_name='".$subject."'");
  $subjectid=mysqli_fetch_array($subjectid);
  $counter= $subjectid['time'];
?>
var count_time='<?php echo $counter ?>';
var timer2 = "0:"+count_time+":00";
//var timer2 = "0:00:10";

//intercal for seconds
var interval = setInterval(function() {
  //timer will be [hour, minute, second]
  var timer = timer2.split(':');
  var hours = parseInt(timer[0], 10);
  var minutes = parseInt(timer[1], 10);
  var seconds = parseInt(timer[2], 10);
  //reduce second by one
  --seconds;
  //calculate new minute and hours
  minutes = (seconds < 0) ? --minutes : minutes;
  hours = minutes < 0 ? --hours : hours;

  if (hours < 0) {
    clearInterval(interval);
    return;
  }

  seconds = (seconds < 0) ? 59 : seconds;
  seconds = (seconds < 10) ? '0' + seconds : seconds;
  minutes = (minutes < 0) ? 59 : minutes;
  minutes = (minutes < 10) ? '0' + minutes : minutes;
  
  timer2 = hours + ':' + minutes + ':' + seconds;
  $('.timebar').html(timer2);
if (timer2=="0:01:59")
  {
    document.getElementById("timebar1").style.backgroundColor = "#f44336";
  };
  if (timer2=="0:00:00")
  {
    alert("time is up");
    location.href = "resultchk.php";
  };
}, 1000);

</script>

<script>
window.onscroll = function() {myFunction()};

var timebar = document.getElementById("timebar1");
var sticky = timebar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    timebar.classList.add("sticky")
  } else {
    timebar.classList.remove("sticky");
  }
}
function sure()
{
  var r=confirm("are you sure for Submit Exam?");
  if(r==true)
  {
    return true;
  }
  else
  {
    return false;
  }

}
</script>

</body>
</html>
        

      

