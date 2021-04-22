<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

$username = $_POST["email"];
$pass = $_POST["password"];
$password = md5($_POST["password"]);
$flag = 'true';
$_POST["rememberme"]=1;


$result = $mysqli->query('SELECT email,password,fname,type from admin order by id asc');

if($result === FALSE){
  die(mysql_error());
}

if($result){


                // Username is stored as cookie for 10 years as 
                // 10years * 365days * 24hrs * 60mins * 60secs 
                setcookie("email", $username, time() + 
                                    (10 * 365 * 24 * 60 * 60)); 
  
                // Password is stored as cookie for 10 years as  
                // 10years * 365days * 24hrs * 60mins * 60secs 
                setcookie("password", $pass, time() + 
                                    (10 * 365 * 24 * 60 * 60)); 
  
                // After setting cookies the session variable will be set 
    

  while($obj = $result->fetch_object()){
    
    if(($obj->email === $username || $obj->mno === $username) && $obj->password === $password) 
     {

      $_SESSION['email'] = $obj->email;
      $_SESSION['type'] = $obj->type;
      $_SESSION['id'] = $obj->id;
      $_SESSION['fname'] = $obj->fname;

      header("location:dashboard.php");
    } else {

        if($flag === 'true'){
          redirect();
          $flag = 'false';
        }
    }
  }
}

function redirect() {
  echo '<h1>Invalid Login! Redirecting...</h1>';
  header("Refresh: 3; url=index.php");
}


?>
