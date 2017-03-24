<?php

	  $modelo=$_POST['modelo1'];
 	  $categoria=$_POST['categoria1'];
 	  $preco=$_POST['preco1'];
 	  $ordem=$_POST['ordem1'];
	  $filename="veiculos.xml";
	  $xmlstr = file_get_contents($filename);

	  // * Instância a classe, e carrega o XML que está na 'string'.

		$dom = new domDocument();

		$dom->loadXML($xmlstr);

		$xml = simplexml_import_dom($dom); //Recebe um objeto SimpleXMLElement de um nó DOM.

		//exibe o email dentro do nó contato que por sua vez está dentro do nó de conteudo.
 
		$xml1->veiculos->modelo;
		$xml2->veiculos->categoria;
		$xml3->veiculos->preco;
		$xml4->veiculos->ordem;
?>