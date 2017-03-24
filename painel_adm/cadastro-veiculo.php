<?php

	$modelo=$_POST['modelo1'];
	$categoria=$_POST['categoria1'];	
	$preco=$_POST['preco1'];
	$uploaddafoto=$_POST['uploadfoto1'];

	 try{
  		// conecta banco de dados
	  $conecta=new PDO('mysql:host=127.0.0.1;port=3306;dbname=concessionaria','root','');
	  $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   	
        // grava dados na tabela veiculos
$textoSQL="INSERT INTO veiculos(modelo, categoria, preco, caminho_foto) VALUES ('".$modelo."','".$categoria."','".$preco."','".$uploaddafoto."')";  
      $conecta->exec($textoSQL);


      echo "Cadastrado";
      //header("Location: index.php");

    }
  catch (PDOException $e)
  {

    echo "Falha na gravação...";
  }





?>