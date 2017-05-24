<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.png" /> 
    <title>Como Vender Mais</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-99573259-1', 'auto');
	ga('send', 'pageview');
	</script>

  </head>

  <body>

    <nav class="navbar navbar-fixed-top navbar-inverse navbar-transparente">
      <div class="container">
        <div class="navbar-header">
          
          <button type="button" class="navbar-toggle collapsed"
                  data-toggle="collapse" data-target="#barra-navegacao">
            <span class="sr-only">alternar navegação</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a href="#" class="navbar-brand">
            <span class="img-logo"></span>
          </a>

        </div>
        <div class="collapse navbar-collapse" id="barra-navegacao">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#ancora"><p3>Artigos</p3></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <section id="conteudo">
      <div class="container">
     
      
      <div class="row">
		<a name ="ancora"></a>
        <div class="col-md-6 imagem">
          <img src="img/foco.jpg" class="img-responsive">
        </div>
		

        <div class="col-md-6 um">
          <h2>Foco...no que realmente importa!</h2>
          <p3>
            Já se perguntou quantos clientes deixaram de comprar ou consumir seus produtos
            por conta de uma enorme fila na hora de realizar o pagamento?
          </p3><br>
          <p3>
            Por que não se preocupar apenas como o que você faz de melhor?
          </p3><br>
          <p3>
            Por que não facilitar o pagamento ao seus clientes de uma forma rápida e segura?
          </p3><br>
          <p3>
            Chega de burocrácia, de perder tempo com aquilo que não é o seu negócio!
          </p3><br>
          <p3>
            Saiba mais sobre como avançar suas vendas, otimizar seus processos e ganhar tempo!
          </p3> 
        </div>
		
        </div>
		
		<br><br><br>
		<div class="col-md-6 imagem">
          <img src="img/reuniao.jpg" class="img-responsive">
        </div>
		

        <div class="col-md-6 um">
          <h2>Saiba as novidades do mercado de tecnologia financeira!</h2>
          <p3>
            Num mundo dinâmico e volátil é comum não conseguir acompanhar as novidades do mercado financeiro. Ainda mais quando essas novidades estão intimamente ligadas com o setor de tecnologia, por isso, deixe isso com a gente!
          </p3><br>
          <p3>
            Acompanhe as novidades desse setor, sinta-se seguro para discutir sobre as tendências mais modernas do mercado, como Fintechs, Bitcoin e muito mais.
          </p3>
        </div>
		
        </div>
	
		 </div>	
    </section>
	
     

    <div class="container"> 	 	

      
      <button type="button" class="btn btn-primary form-control botao" 
              data-toggle="modal" data-target="#janela">
        Saiba Mais!
      </button>

      <!-- Janela -->
      <form class="modal fade" id="janela" method="post" action="registrar_usuario.php">
        
        <div class="modal-dialog modal-sl">
          <div class="modal-content">
            
            <!-- cabecalho -->
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">
                <span>&times;</span>
              </button>
              <h4 class="modal-title">Inscreva-se</h4>
            </div>

            <!-- corpo -->


          <div class="form-group">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="requiored">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome" required="requiored">
          </div>

          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="requiored">
          </div>
    
          <button type="submit" class="btn btn-primary form-control">Inscreva-se
          </button>
        </form>
    </div>


 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>