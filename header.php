<?php 

  session_start();
  //already logged in
  if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {
    exit(header("Location: admin_panel.php"));
  }

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <!-- Bootstrap -->
   
      <link rel="stylesheet" href="css/estilo.css">
      <link rel="stylesheet" href="css/style.css">   

  </head>
  <body>
