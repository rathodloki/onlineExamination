<?php
  session_start();
  $cone=mysqli_connect("localhost","root","","exam") or die(mysql_errno());


  mysqli_select_db($cone,"exam") or die("cannot connect to database");
  $odcourse=mysqli_real_escape_string($cone,$_GET['osubject']);
  $course=$odcourse;
              #special char to string portable


  mysqli_query($cone,"DELETE FROM courses WHERE c_id='".$course."'");
  print'<script>alert("delete succesfully");</script>';
  print mysqli_error($cone);
  print'<script>window.location.assign("mcourse.php");</script>';
 ?>

