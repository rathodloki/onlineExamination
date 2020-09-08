<?php
 $cone=mysqli_connect("localhost","root","","exam") or die(mysql_errno());
mysqli_select_db($cone,"exam") or die("cannot connect to database");
 $subject=mysqli_real_escape_string($cone,$_GET['q']);
 if (strpos($subject, 'dot') !== false) {
               $subject=str_replace("dot",".",$subject);
              }
  if (strpos($subject, 'plus') !== false) {
               $subject=str_replace("plus","+",$subject);
              }  
              if (strpos($subject, 'sharp') !== false) {
               $subject=str_replace("sharp","#",$subject);
              }  
$query=mysqli_fetch_array(mysqli_query($cone,"select time from subject where s_name='".$subject."'"));
echo "<p>".$query['time']." mins";
mysqli_close($cone);

?>