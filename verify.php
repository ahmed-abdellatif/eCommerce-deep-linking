<!--
******************************************************************************************
*
* verify.php: This is where we will verify a user's login request
*
*
******************************************************************************************
-->

<?php

if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

//Posting user name and password into database
$username = $_POST["username"];
$password = $_POST["pwd"];
$flag = 'true';

/**
********************************************************************************************************
** $result : Here we initiate a query to extract the following attributes from our table 'users'
** -user id
** -email
** -password
** -first name
** -type
**
** We then order the extracted data by ascending order using the user id
**
********************************************************************************************************
**/
$result = $mysqli->query('SELECT id,email,password,fname,type from users order by id asc');

if($result === FALSE){
  die(mysql_error());
}

if($result){
  while($obj = $result->fetch_object()){
    if($obj->email === $username && $obj->password === $password) {

      $_SESSION['username'] = $username;
      $_SESSION['type'] = $obj->type;
      $_SESSION['id'] = $obj->id;
      $_SESSION['fname'] = $obj->fname;
      header("location:index.php");
    } else {

        if($flag === 'true'){
          redirect();
          $flag = 'false';
        }
    }
  }
}
/**
********************************************************************************************************
**
** function redirect() : if user validation failed then login isn't possible
** The user's attempt isnt accepted and he/she will be re-directed back to the homepage
**
********************************************************************************************************
**/

function redirect() {
  echo '<h1>Invalid Login! Redirecting...</h1>';
  header("Refresh: 3; url=index.php");
}


?>
