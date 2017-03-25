<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sobre Grupo</title>

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
    
   <div class="container-fluid" style="background-color: white">
  <h1 style="color:green"> Grupo!</h1>
  <div class="row">
    <div class="col-sm-4">
      <a href="https://www.facebook.com/janaina.santos.98892?fref=ts"><img src="../imagens/janaina.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236"></a>
      <br>
      Janaina Claudence
    </div>
    <div class="col-sm-4">
     <a href="https://www.facebook.com/itsmaoliv"> <img src="../imagens/marcielli.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236"></a>
      <br>
      Marcielli Oliveira
    </div>
    <div class="col-sm-4">
     <a href="https://www.facebook.com/vinipeix20?fref=ts"> <img src="../imagens/vinicius.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236"></a>
      <br>
      Vinicius Peixoto
    </div>

  </div>
</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>