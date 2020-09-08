<?php 
$cone=mysqli_connect("localhost","root","","exam") or die(mysql_errno());
mysqli_select_db($cone,"exam") or die("cannot connect to database");
 $subject=mysqli_real_escape_string($cone,$_GET['subject']);
  $subjectid=mysqli_query($cone,"SELECT time from subject where s_name='".$subject."'");
  $subjectid=mysqli_fetch_array($subjectid);
  echo $subjectid['time'];
?>