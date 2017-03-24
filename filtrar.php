<?php 

  //Salvando na variável, o name que o usuário selecionar no form que está na pagina inicial
  $modelo=$_POST['modelo1'];
  $categoria=$_POST['categoria1'];
  $preco=$_POST['preco1'];
  $ordem=$_POST['ordem1'];


  session_start();
  if(isset($_SESSION['valida']))
  {
  try{
  $conectar=new PDO('mysql:host=127.0.0.1;port=3306;dbname=concessionaria', 'root', '');
 
  $conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $dados=$conectar->query("SELECT * FROM veiculos");
  
  foreach($dados as $linha)
  {
  echo $linha['modelo']."----".$linha['categoria']."----".$linha['preco']."----".$linha['caminho_foto']."<br>";
      
      if($modelo != "na") {

        

      }

  }
  } // fecha try
  
  catch (PDOException $erro)
  {
    echo 'ERRO: ' . $erro->getMessage();
    echo "Nao posso fazer a pesquisa";
  }
  }
  else
  {
    echo "<script>
         alert('Esses dados não podem ser filtrados');
       document.location.href=('pagina_inicial.php');
       </script>";
  }
?>