<?php
  session_start();
  $cone=mysqli_connect("localhost","root","","exam") or die(mysql_errno());


  mysqli_select_db($cone,"exam") or die("cannot connect to database");
  $odsubject=mysqli_real_escape_string($cone,$_GET['osubject']);
  $subject=$odsubject;
              #special char to string portable


  mysqli_query($cone,"DELETE FROM subject WHERE s_name='".$subject."'");
  print'<script>alert("delete succesfully");</script>';
  print mysqli_error($cone);
  print'<script>window.history.back();</script>';
 ?>

