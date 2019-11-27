<html>
    <head>
        <link rel="stylesheet" href="semantic.css" type="text/css">
        <link rel="stylesheet" href="css/estilo.css" type="text/css">
        <script type="text/javascript" src="semantic.js"></script>
        <title >Compraki</title>
        <style>
            #menuzinho a:hover{
                background-color: #ff6a00;
            }
            body{

            }
            #imagem{
                background-image: url(data_bases/img/index.png);
                background-repeat: no-repeat;
            }
            h1{
                font-weight: 100;
                line-height: 1.1;
            }
        </style>
    </head>
<body>



<div class="pusher" >


    <?php include "menuLogado.php";?>
</div>
<br>

<div class="ui last container">
  <div class="ui three steps">
    
    <div class="active step" style="background: #eaeaea;">
      <div class="content">
        <div class="title">Carrinho</div>
        <div class="description">Revise seus Produtos</div>
      </div> 
    </div> 
 

    <div class="step">
      <div class="content">
        <div class="title">Cadastrar Dados</div>
        <div class="description">Informaçoes de Entrega</div>
      </div>
    </div>

    <div class="step">
      <div class="content">
        <div class="title">Finalizar Compra</div>
        <div class="description">Revise suas Informações</div>
      </div>
    </div>
  </div>
</div>
        <div>&nbsp;</div>
        <div>&nbsp;</div>

<div class="ui raised very padded text container segment" style="background-color: #eaeaea;">
<div class="ui container">
  <div class="ui relaxed divided items">
    <div class="item">
      <div class="ui small image">
        <img src="img/cafe.png" style="width: 70%;">
      </div>
      <div class="content">
        <a class="header">Café Damasco</a>
        <div class="meta">
          <a>Date</a>
          <a>Category</a>
        </div>
        <div class="description">
          Café Damasco 900g
        </div>
        <div class="extra">
        </div>
        <button class="medium ui button" style="margin-left: 60%;padding: 2%;color: white;background-color: #147ece;">
        Remover Produto</button>
      </div>
    </div>
    <div class="item">
      <div class="ui small image">
        <img src="img/arroz.png"  style="width: 70%;">
      </div>
      <div class="content">
        <a class="header">Arroz Urbano</a>
        <div class="meta">
          <a>Date</a>
          <a>Category</a>
        </div>
        <div class="description">
         Arroz Urbano branco de 1kg 
        </div>
        <div class="extra">
        </div>
        <button class="medium ui button" style="margin-left: 60%;padding: 2%;color: white;background-color: #147ece;">
        Remover Produto</button>
      </div>
    </div>
    <div class="item">
      <div class="ui small image">
        <img src="img/feijao.png" style="margin-left: -13%;">
      </div>
      <div class="content">
        <a class="header">Feijão Urbano</a>
        <div class="meta">
          <a>Date</a>
          <a>Category</a>
        </div>
        <div class="description">
          1kg de Feijão Urbano preto
        </div>
        <div class="extra">
        </div>
        <button class="medium ui button" style="margin-left: 60%;padding: 2%;color: white;background-color: #147ece;">
        Remover Produto</button>
      </div>
    </div>
    <div class="ui left action input">
  		<button class="ui teal labeled icon button"style="background-color: #147ece;
    margin-left: 93%;">
    	<i class="cart icon"></i>
    	Preço
  		</button>
  <input type="text" value="$52.03">
</div>
  </div>
</div>
</div>

        <div>&nbsp;</div>
        <div>&nbsp;</div>
        <div>&nbsp;</div>
  <a href="cadastroDados.php">
 <button  class="big ui button" style="background-color: #147ece; margin-left: 43%; margin-top: -2%; color: white;">
 Continuar sua compra
 </button>
 </a>
        <div>&nbsp;</div>
        <div>&nbsp;</div>
        <div>&nbsp;</div>

</body>
</html>
