<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cadastrar Veículo</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilo.css">

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
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="cad_veiculo.php">Cadastrar Veículo</a></li>
        <li><a href="alt_veiculo.php">Alterar Veículo</a></li>
        <li><a href="del_veiculo.php">Deletar Veículo</a></li>
        <li><a href="cons_veiculo.php">Consultar Veículo</a></li>
      </ul>

      
      <ul class="nav navbar-nav navbar-right">
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Pesquise aqui">
        </div>
        <button type="submit" class="btn btn-default">Enviar</button>
      </form>     
        
        <li><a href="../sair.php">Sair</a></li>      
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> 

    <div class="jumbotron">

      <div class="container">
      <div class="row">

        <h2>Cadastrar</h2>

       <form action="cadastro-veiculo.php" method="post" >  <!-- Login -->               
               
        <div class="field-wrap">
        <h4>Modelo</h4>
        <input type="text" class="form-control" name="modelo1"/>
        </div>   

        <div class="field-wrap">
        <h4>Categoria</h4>
        <input type="text" class="form-control" name="categoria1"/>
        </div>   

        <div class="field-wrap">
        <h4>Preço</h4>
        <input type="text" class="form-control" name="preco1"/>
        </div>   

        <div class="field-wrap">
        <h4>Upload Foto</h4>
        <input type="file" class="form-control" name="uploadfoto1"/>

        </div>  
          <button type="submit" class="btn btn-default">Enviar</button>

        </form>
      </div>
      </div>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>