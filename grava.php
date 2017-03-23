<?php
    
  $primnome=$_POST['primeiroNome'];  
  $segnome=$_POST['segundoNome'];
  $em=$_POST['email'];
  $se=$_POST['senha'];
  
  try{
  // conecta banco de dados
  $conecta=new PDO('mysql:host=127.0.0.1;port=3306;dbname=concessionaria','root','');
  $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  // grava dados
  $textoSQL="INSERT INTO usuarios(nome, sobrenome, email, senha) VALUES ('".$primnome."','".$segnome."','".$em."','".$se."')";  
  $conecta->exec($textoSQL);
  
  #Chamar página inicial aqui (Ainda tem que ver se for adm logar na pag adm, senão na pag normal)
  echo "<h1>Dados gravados com sucesso</h1>";
  }
  catch (PDOException $e)
  {
    echo "Falha na gravação...";
  }
?>
