<?php
 require('date.php');
 $mydate='2018-03-05 21:35:55';
 echo "The Difference between the server's date and $mydate is:<br> ";
 echo dateDiff($mydate);
?>