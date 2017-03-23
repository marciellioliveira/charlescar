<?php

   $em=$_POST['email'];
   $se=$_POST['senha'];

   session_start(); //abre sessões

try {
   #$conecta=new PDO('mysql:host=127.0.0.1;port=3306;dbname=concessionaria','root','');
    $conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=concessionaria', 'root', '');
 #  $conn = new PDO('mysql:host=localhost;dbname=concessionaria', 'root', '');
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
   $consulta = $conn->query("SELECT * FROM usuarios WHERE email='$em' AND senha='$se'");
   $linha = $consulta->fetch(PDO::FETCH_ASSOC);
   
   if ($linha>0)
   {

      $_SESSION['nome_usuario']=$lg;
      $_SESSION['valida']='1';
      header('location:pagina_inicial.php');

      echo "Tudo certo, entrada permitida";

   }
   else
   {
      echo "Usuario invalido, tente de novo";
   }
   
 } // fecha try
 catch(PDOException $e)
 {
   echo 'ERRO: ' . $e->getMessage();
 }
?>