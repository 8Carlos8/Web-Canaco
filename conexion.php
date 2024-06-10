
<?php
  $host_name = 'db5014072324.hosting-data.io';
  $database = 'dbs11744085';
  $user_name = 'dbu1234622';
  $password = 'InteYaret0824';

  $link =  mysqli_connect($host_name, $user_name, $password) or die ('no hay sistema');

  $bd = mysqli_select_db($link,$database) or die ("no encuentro datos");
 
?>