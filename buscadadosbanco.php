<?php
session_start();
$user=$_POST['cxlogin'];
$pass=$_POST['cxsenha'];
try {
   $conn = new PDO('mysql:host=127.0.0.1;port=3307;dbname=loja', 'root', '');
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
   $consulta = $conn->query("SELECT * FROM usuarios WHERE login='$user' AND senha='$pass'");
   $linha = $consulta->fetch(PDO::FETCH_ASSOC);
   if ($linha>0)
   {
     $_SESSION['nome_usuario']=$user;
	 $_SESSION['valida']='1';
     header('location: consultapdo.php');
   }
   else
   {
     echo "<script>
	       alert('Dados incorretos');
		   document.location.href=('log.php');
		   </script>";
   }
   
 } // fecha try
 catch(PDOException $e)
 {
   echo 'ERRO: ' . $e->getMessage();
 }
?>