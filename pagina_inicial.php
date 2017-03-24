<?php 
if(isset($_POST['escolha'])){

  //Salvando na variável, o name que o usuário selecionar no form que está na pagina inicial
  $modelo=$_POST['modelo1'];
  $categoria=$_POST['categoria1'];
  $preco=$_POST['preco1'];
  $ordem=$_POST['ordem1'];
  try{
  $conectar=new PDO('mysql:host=127.0.0.1;port=3306;dbname=concessionaria', 'root', '');
 
  $conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $dados=$conectar->query("SELECT * FROM veiculos");

  $xml = new XMLWriter;
    
  $xml->openMemory();

  $xml->startDocument( '1.0' , 'iso-8859-1' );

  $xml->startElement("veiculos");

  foreach($dados as $linha){
    
    $xml->startElement("veiculos");

    $xml->writeElement("modelo", $linha['modelo']); 
    $xml->writeElement("categoria", $linha['categoria']);
    $xml->writeElement("preco", $linha['preco']);

    $xml->endElement();
    
  } // fecha laço FOR
  $xml->endElement();

  $file = fopen('veiculos.xml','w+');
  fwrite($file,$xml->outputMemory(true));
  fclose($file);
  
  if (file_exists('veiculos.xml')) {
    
  } else {
    echo "Arquivo não foi criado!";
  }
      
 
  } // fecha try
  
  catch (PDOException $erro)
  {
    echo 'ERRO: ' . $erro->getMessage();
    echo "Nao posso fazer a pesquisa";
  }
  
}
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Página Inicial</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      
      <a class="navbar-brand" href="pagina_inicial.php">CharlesCar</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="pagina_inicial.php">Início <span class="sr-only">(current)</span></a></li>
        <li><a href="veiculos.php">Veículos</a></li>
      </ul>

      
      <ul class="nav navbar-nav navbar-right">
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Pesquise aqui">
        </div>
        <button type="submit" class="btn btn-default">Enviar</button>
      </form>
      
        <li><a href="#">Contato</a></li>    
        <li><a href="sair.php">Sair</a></li>      
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <div class="container">   
      <div class="row">
      <div id="carousel-example-generic" class="carousel slide slideImg" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="imagens/saveiro-cross-cd-1-6-msi--completo.png" alt="Carro 1">
            <div class="carousel-caption">
              Carro 1
            </div>
          </div>
          <div class="item">
            <img src="imagens/saveiro-cross-cd-1-6-msi--completo.png" alt="Carro 2">
            <div class="carousel-caption">
              Carro 2
            </div>
          </div>
          ...
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> <!-- Fim slide --></div>
    </div>
    
     <br>

     
     <div class="container filtro">       
     
     <form id="f_filtro" data-toggle="validator" role="form" method="post" name="escolha" action="<?php echo $_SERVER['PHP_SELF'];?>">
     
      <div class="row">
        <div class="col-xm-12 col-sm-3 modelos">   
         <h4>Modelos</h4>
            <div class="form-group">              
                <select id="modelo" name="modelo1" class="form-control" required="required">
                  <option value="na" selected disabled>Escolha um:</option>
                  <option value="Crossfox">CrossFox</option>
                  <option value="Fox">Fox</option>
                  <option value="Fusca">Fusca</option>
                </select>
             </div>       
        </div>
        <div class="col-xm-12 col-sm-3 categorias">
          <h4>Categoria</h4>
          <div class="form-group">              
                <select id="categoria" name="categoria1" class="form-control" required="required">
                  <option value="na" selected disabled>Escolha um:</option>
                  <option value="Hatch">Hatch</option>
                  <option value="Sedan">Sedan</option>
                  <option value="Cross">Cross</option>
                </select>
             </div>  
           
        </div>
        <div class="col-xm-12 col-sm-3 valor">
          <h4>Preço</h4>
          <div class="form-group">              
                <select id="preco" name="preco1" class="form-control" required="required">
                  <option value="na" selected disabled>Escolha um:</option>
                  <option value="pr1-ate40">Até 40.000</option>
                  <option value="pr1-ate50">Até 50.000</option>
                  <option value="pr1-ate60">Até 60.000</option>
                </select>
             </div> 

        </div>
        <div class="col-xm-12 col-sm-3 ordem">
          <h4>Ordem</h4>
          <div class="form-group">              
                <select id="ordem" name="ordem1" class="form-control" required="required">
                  <option value="na" selected disabled>Escolha um:</option>
                  <option value="ord-maisvisto">Mais Visto</option>
                  <option value="ord-menorpreco">Menor Preço</option>
                  <option value="ord-maiorpreco">Maior Preço</option>
                </select>
             </div> 
        </div>
</div><!--row -->
      <button type="submit" class="btn btn-primary" name="escolha" >Enviar</button>
      
    
      </form> <!-- Fechou Form -->
     </div> <!-- Container Filtro -->
 
    <div class="container">         
      
           <div class="jumbotron jbCor">        
           <div class="row mostraCarro">
            <div class="col-xs-12 col-md-6">
              <a href="#" class="thumbnail">
                <img src="imagens/saveiro-cross-cd-1-6-msi--completo.png" name="img" alt="...">
              </a>
            </div>
            <div class="col-xs-12 col-md-6">
             <h2><?php echo $modelo ?></h2>
             <br>
             <h4><?php echo $categoria ?></h4>
             <br><br><br>
             <p>Consulte condições de financiamento</p>

            <p><a class="btn btn-primary btn-lg btnCor" href="veiculos.xml" download="veiculos" role="button" >Estou interessado</a></p>
            </div>
          </div>
          
        
          </div>
          </div>
            </div>         
      </div>


    <nav class="navbar navbar-default navbar-fixed-bottom fundo">
      <div class="container">
        <p>Desenvolvido por: 3Mosqueteiros</p>
      </div>
    </nav>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>

