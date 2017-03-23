<?php
    
  $primnome=$_POST['primeiroNome'];  
  $segnome=$_POST['segundoNome'];
  $em=$_POST['email'];
  $se=$_POST['senha'];
  
  try{
  // conecta banco de dados
  $conecta=new PDO('mysql:host=127.0.0.1;port=3306;dbname=concessionaria','root','');
  $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


 
    // grava dados na tabela usuarios
      $textoSQL="INSERT INTO usuarios(nome, sobrenome, email, senha) VALUES ('".$primnome."','".$segnome."','".$em."','".$se."')";  
      $conecta->exec($textoSQL);

      header("Location: index.php");  
    
 
  }
  catch (PDOException $e)
  {
    echo "Falha na gravação...";
  }
?>

<!--
  $textSQL="SELECT * FROM clientes WHERE email='$em'";
   if(mysqli_num_rows($sql)<0) {
       //Se for <0, não tem cliente cadastrado. Então vai cadastrar.
       $textoSQL="INSERT INTO clientes(nome, sobrenome, email, senha) VALUES ('".$primnome."','".$segnome."','".$em."','".$se."')";  
      $conecta->exec($textoSQL);

      // grava dados na tabela usuarios
      $textoSQL="INSERT INTO usuarios(nome, sobrenome, email, senha) VALUES ('".$primnome."','".$segnome."','".$em."','".$se."')";  
      $conecta->exec($textoSQL);
    } 

 -->