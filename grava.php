<?php
    
  $primnome=$_POST['primeiroNome'];  
  $segnome=$_POST['segundoNome'];
  $em=$_POST['email'];
  $se=$_POST['senha'];
  
  try{
  // conecta banco de dados
  $conecta=new PDO('mysql:host=127.0.0.1;port=3306;dbname=concessionaria','root','');
  $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $consulta = $conecta->query("SELECT * FROM usuarios WHERE email='$em'");
   $linha = $consulta->fetch(PDO::FETCH_ASSOC);
   
   if ($linha>0)
   {

      $_SESSION['nome_usuario']=$lg;
      $_SESSION['valida']='1';
      header('location:consultapdo.php');

      echo "Tudo certo, entrada permitida";
       

   }
   else
   {
      echo "Usuario invalido, tente de novo";
        // grava dados na tabela usuarios
      $textoSQL="INSERT INTO usuarios(nome, sobrenome, email, senha) VALUES ('".$primnome."','".$segnome."','".$em."','".$se."')";  
      $conecta->exec($textoSQL);

      $textoSQL="INSERT INTO clientes(nome, sobrenome, email, senha) VALUES ('".$primnome."','".$segnome."','".$em."','".$se."')";  
      $conecta->exec($textoSQL);

      header("Location: index.php");

   }
 
  }
  catch (PDOException $e)
  {


   include("funcao.html");
    


   # echo "Falha na gravação...";
  }
?>

