<!--
******************************************************************************************
* logout.php - allow users to log out of their session
*
*
*
******************************************************************************************
-->

<?php

  session_start();
  session_unset();
  session_destroy();
  header("location:index.php");
  exit();


?>
