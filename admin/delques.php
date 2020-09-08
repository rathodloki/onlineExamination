<?php
  session_start();
  $cone=mysqli_connect("localhost","root","","exam") or die(mysql_errno());


  mysqli_select_db($cone,"exam") or die("cannot connect to database");
  $queid=mysqli_real_escape_string($cone,$_GET['delqid']);
  $queid=$queid;
              #special char to string portable


  mysqli_query($cone,"DELETE FROM test WHERE t_id='".$queid."'");
  print'<script>alert("delete succesfully");</script>';
  print mysqli_error($cone);
  print'<script>window.history.back();</script>';
 ?>

