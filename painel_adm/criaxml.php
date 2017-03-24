<?php
# Instancia o objeto XMLWriter
$xml = new XMLWriter;

# Cria cache de memoria para armazenar a saida
$xml->openMemory();

# Inicia o cabe�alho do documento XML
$xml->startDocument( '1.0' , 'iso-8859-1' );

# Adiciona/Inicia um Elemento / N� Pai <Produto>
$xml->startElement("Ve�culo");

#  Adiciona um N� Filho <descricao>
$xml->writeElement("Modelo", 'TV LG');

#  Adiciona um N� Filho <quantidade> e valor 10
$xml->writeElement("Categoria", 10);

#  Adiciona um N� Filho <preco> e valor 1200,00
$xml->writeElement("Pre�o", 1200.00);

$xml->writeElement("Ordem", 1200.00);

#  Finaliza o N� Pai / Elemento <Produto>
$xml->endElement();

# Salvando o arquivo em disco
$file = fopen('veiculo.xml','w+');

fwrite($file,$xml->outputMemory(true));

fclose($file);
?>
