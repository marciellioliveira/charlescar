<?php 

  //Salvando na variável, o name que o usuário selecionar no form que está na pagina inicial
  $modelo=$_POST['modelo1'];
  $categoria=$_POST['categoria1'];
  $preco=$_POST['preco1'];
  $ordem=$_POST['ordem1'];


  echo "Modelo: $modelo";
  echo "<br>";
  echo "Categoria: $categoria";
  echo "<br>";
  echo "Preço: $preco";
  echo "<br>";
  echo "Ordem: $ordem";
  echo "<br>";

  if(($modelo != "na") && ($categoria != "na") && ($preco != "na") && ($ordem != "na")) {
      echo "Mostra tudo";
  } else {
    //Mostrar só os que for diferente de "na"
  }




?>