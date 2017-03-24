<?php
# Instancia o objeto XMLWriter
$xml = new XMLWriter;

# Cria cache de memoria para armazenar a saida
$xml->openMemory();

# Inicia o cabeçalho do documento XML
$xml->startDocument( '1.0' , 'iso-8859-1' );

# Adiciona/Inicia um Elemento / Nó Pai <Produto>
$xml->startElement("Veículo");

#  Adiciona um Nó Filho <descricao>
$xml->writeElement("Modelo", 'TV LG');

#  Adiciona um Nó Filho <quantidade> e valor 10
$xml->writeElement("Categoria", 10);

#  Adiciona um Nó Filho <preco> e valor 1200,00
$xml->writeElement("Preço", 1200.00);

$xml->writeElement("Ordem", 1200.00);

#  Finaliza o Nó Pai / Elemento <Produto>
$xml->endElement();

# Salvando o arquivo em disco
$file = fopen('veiculo.xml','w+');

fwrite($file,$xml->outputMemory(true));

fclose($file);
?>
