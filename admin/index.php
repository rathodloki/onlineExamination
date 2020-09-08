<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>admin_login</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>

    <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text" style="text-decoration: none; background-image: none">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">Online<span class="logo_colour">Examination</span></a></h1>
          <h2>MHCET | BSCIT | JEE</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">

   &nbsp;<div class="login-page">
  <div class="form">
    <form class="regiser-form" style="display:none">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" action="checkadmin.php" method="post">
      <p style="font-size:20px;font-family: Arial, Helvetica, sans-serif;">Admin Login</p>
      <input type="text"  name="username" placeholder="username"required/>
      <input type="password"  name="password" placeholder="password"required/>
      <button type="submit" value="register">login</button>
  
    </form>
  </div>

   <img class ="loginicon" src="style/admin.png" ></div>


      <div class="sidebar">
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
       <!-- <h1>Welcome to the night_sky_2 template</h1>
        <p>This standards compliant, simple, fixed width website template is released as an 'open source' design (under a <a href="http://creativecommons.org/licenses/by/3.0">Creative Commons Attribution 3.0 Licence</a>), which means that you are free to download and use it for anything you want (including modifying and amending it). All I ask is that you leave the 'design from HTML5webtemplates.co.uk' link in the footer of the template, but other than that...</p>
        <p>This template is written entirely in <strong>HTML5</strong> and <strong>CSS</strong>, and can be validated using the links in the footer.</p>
        <p>You can view more free HTML5 web templates <a href="http://www.html5webtemplates.co.uk">here</a>.</p>
        <p>This template is a fully functional 5 page website, with an <a href="examples.html">examples</a> page that gives examples of all the styles available with this design.</p>
        <h2>Browser Compatibility</h2>
        <p>This template has been tested in the following browsers:</p>
        <ul>
          <li>Internet Explorer 8</li>
          <li>FireFox 3</li>
          <li>Google Chrome 13</li>
        </ul>-->

        </div>
      </div>
   
    <div id="footer" >
      <p><a href="index.php">Home</a> | <a href="examples.php"></a> | <a href="register.php">register</a> | <a href="help.php">help</a> | <a href="about.php">about us</a></p>
      <p>Copyright &copy; onlineexam | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">Website templates</a></p>
    </div>
  </div>
</body>
</html>



  
