<?php
  session_start();
  $cone=mysqli_connect("localhost","root","","first_db") or die(mysql_errno());

  $username=mysqli_real_escape_string($cone,$_POST['username']);
  $password=mysqli_real_escape_string($cone,$_POST['password']);

  mysqli_select_db($cone,"first_db") or die("cannot connect to database");
  $query=mysqli_query($cone,"SELECT * FROM admin WHERE username='$username'");
  $exists=mysqli_num_rows($query);
  $table_user="";
  $table_password="";
  if($exists>0)
  {
    while ($row=mysqli_fetch_array($query)) {
      $table_user=$row['username'];
      $table_password=$row['password'];

    }
    if(($username==$table_user)&&($password==$table_password))
    {
      $_SESSION['user']=$username;
      header("location:ahome.php");
    }
    else
    {

      print'<script>alert("incorrect password");</script>';
      print'<script>window.location.assign("index.php");</script>';
    }




    }

  else
  {

    print'<script>alert("incorrect username");</script>';
    print'<script>window.location.assign("index.php");</script>';

  }










