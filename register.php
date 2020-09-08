

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>
  <title>registeration form</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <style>
  .login-page {
  width: 700px;
  padding: 9% 0 0;
  
  float:left;
}

.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 700px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    top: 62px;
    left: 25px;
    border-radius:5px;
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #fc9c04;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #ce7e00;
}
.form .message {
  margin: 15px 0 0;
  color: #787878;
  font-size: 12px;
}
.form .message a {
  color: #fc9c04;
  text-decoration: none;
}

.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
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
          <li><a href="index.php">SignIn</a></li>
          
          <li><a href="help.php">Help</a></li>
          <li><a href="about.php">About Us</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content" style="height:800px;"/>
      <div class="sidebar" style="height:780px;">
       <!-- <h1>Latest News</h1>
        <h4>New Website Launched</h4>
        <h5>January 1st, 2010</h5>
        <p>2010 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        <h1>Useful Links</h1>
        <ul>
          <li><a href="#">link 1</a></li>
          <li><a href="#">link 2</a></li>
          <li><a href="#">link 3</a></li>
          <li><a href="#">link 4</a></li>
        </ul>
        <h1>Search</h1>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>-->
      </div>
      <div id="content">
        &nbsp;<div class="login-page" style="margin-top:100%;">
  <div class="form">
    <form class="register-form" action="register.php" method="post">
      <input type="text" name="fullname" placeholder="fullname" required/>
    
        <input type="text" name="username" placeholder="username"required />
      <input type="password" name="password" placeholder="password"required />
        
         
    </select>
      <input type="text" placeholder="email address" name="email" pattern="[^ @]*@[^ @]*"/>
     <input type="date" name="dob" placeholder="D.O.B" style="width: 32.5%; float:left; color:Gray;"required/>
     <input type="text" name="contact" placeholder='Contact no.' style="width: 33%; float:left; margin-left:5px; height:50px;"required/>
     <select class="select-style" name="gender" required>
        <option selected="true" value="none" disabled>Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="others">others</option>
         
    </select>
     
     <textarea type="text" rows="4" cols="50" name="address" required placeholder="Address" style="  width: 98%;   font-family: Roboto ; font-size: 16px ; border: 0px solid #E5E5DB;   background: #f2f2f2; color: #47433F; margin-bottom:10px; padding:5px;outline: 1;"></textarea>
      <button type="submit" value="register">create</button>




      <p class="message">Already registered? <a href="index.php">Sign In</a></p>
    </form>
    <form class="login-form" style="display:none">
      <input type="text" placeholder="username"/>
      <input type="password" placeholder="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>

   <div><img class ="loginicon" src="style/student.gif"/ ></div>
      </div>
    </div>
    <div id="footer">
      <p><a href="index.php">Home</a> | <a href="examples.php">Examples</a> | <a href="register.php">register</a> | <a href="help.php">help</a> | <a href="about.php">about Us</a></p>
      <p>Copyright &copy; night_sky_2 | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.php5webtemplates.co.uk">Website templates</a></p>
    </div>
  </div>
</body>
</html>

<!--php-->
<?php
$cone=mysqli_connect("localhost","root","","first_db") or die(mysql_errno());



if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $username=mysqli_real_escape_string($cone,$_POST['username']);
  $password=mysqli_real_escape_string($cone,$_POST['password']);
  $fullname=mysqli_real_escape_string($cone,$_POST['fullname']);
  $email=mysqli_real_escape_string($cone,$_POST['email']);
  $dob=mysqli_real_escape_string($cone,$_POST['dob']);
  $contact=mysqli_real_escape_string($cone,$_POST['contact']);
  $address=mysqli_real_escape_string($cone,$_POST['address']);
  $gender=mysqli_real_escape_string($cone,$_POST['gender']);
  $bool=true;
  mysqli_select_db($cone,"first_db") or die("cannot connect to database");
  $query=mysqli_query($cone,"select * from users");
  while ($row=mysqli_fetch_array($query))
   {
    $table_users = $row['username'];
    if($username==$table_users)
    {
      $bool=false;
      print'<script>alert("username has been taken!");</script>';
      print'<script>window.location.assign("index.php");</script>';

    }
    
  }
  if($bool)
  {
    mysqli_query($cone,"INSERT INTO users(fullname,username,password,email,dob,contact,address,gender) VALUES ('$fullname','$username','$password','$email','$dob','$contact','$address','$gender')");
    print'<script>alert("suceesfully registered");</script>';
    print'<script>window.location.assign("register.php");</script>';
  }
  mysqli_close($cone);
}
?>