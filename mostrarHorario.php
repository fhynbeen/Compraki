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

            ;
        }
        h1{
            font-weight: 100;
            line-height: 1.1;
        }
    </style>
    <script src="assets/library/jquery.min.js"></script>
    <script src="../dist/components/visibility.js"></script>
    <script src="../dist/components/sidebar.js"></script>
    <script src="../dist/components/transition.js"></script>
    <script>
        $(document)
            .ready(function() {

                // fix menu when passed
                $('.masthead')
                    .visibility({
                        once: false,
                        onBottomPassed: function() {
                            $('.fixed.menu').transition('fade in');
                        },
                        onBottomPassedReverse: function() {
                            $('.fixed.menu').transition('fade out');
                        }
                    })
                ;

                // create sidebar and attach to menu open
                $('.ui.sidebar')
                    .sidebar('attach events', '.toc.item')
                ;

            })
        ;
    </script>
</head>
<body>

<?php require"menuLogado.php" ?>

<div style="background-color: #f4511e;color: white;margin-top: -2%;padding-top: 4%;margin-bottom: -1%;padding-bottom: 16%;">
<div class="ui card" style="margin-left: 39%">
    <div class="content">
      <div class="header">
        <i class="shipping fast icon"></i>
        Seu pedido está a caminho!
      </div>
      <div class="description">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
 
</div>
</div>

    
    <h2 class="ui dividing header" style="margin-left: 14%;margin-right: 18%;">Informações da compra</h2>

<form class="ui form" style="margin-top: 2%;margin-left: 17%;width: 65%;background-color: #e0e0e0;padding-left: 1%;
  padding-top: 1%;
  padding-right: 1%;
  padding-bottom: 1%; 
  margin-bottom: 5%;">
    
  <h4 class="ui dividing header">Informações da Entrega</h4>
  <div class="two fields">
  <div class="field">
    <label>Nome</label>
      <i>Gabriel</i>
  </div>

  <div class="field">   
    <label>Sobrenome</label>   
       <i>Bao de Oliveira</i>
  </div>
  </div>

 
  <div class="two fields">
  <div class="field">
    <label>Endereço de Cobrança</label>
     <i>Rua XV de Outubro<i>,</i></i>
  </div>

  <div class="field">   
    <label>Número</label>   
       <i>113</i>
  </div>
  </div>

  <div class="two fields">
  <div class="field">
    <label>Estado</label>
     <i>Santa Catarina<i>,</i></i>
  </div>

  <div class="field">   
    <label>País</label>   
       <i>Brasil</i>
  </div>
  </div>

  <h4 class="ui dividing header">Informações de pagamento</h4>
  <div class="field">
    <label>Bandeira do Cartão</label>
    <i>Mastercard</i>
  </div>

 <div class="four fields">
  <div class="field">
    <label>Número do Cartão</label>
    <i>254.986.574.10</i>
  </div>

  <div class="field">   
    <label>CVC</label>   
       <i>254</i>
  </div>

    <div class="field"> 
    <label>Expira em:</label>   
       <i>2056</i>
    </div>

    <div class="field"> 
    <label>Número</label>   
       <i>113</i>
  </div>
  </div>


  <h4 class="ui dividing header">Não quero pagar com cartão de crédito</h4>
   <div class="ui segment">
    <div class="field">
        <label>Pagar em dinheiro para o entregador</label>
    </div>
  </div>

   <h4 class="ui dividing header">Recibo</h4>
   <div class="ui segment">
    <div class="field">
        <label>Não incluir o recibo no pacote</label>
    </div>
    </div>
  </div>  
</form>

<h2 class="ui dividing header" style="margin-left: 14%;margin-right: 18%;">Informações do(s) produto(s)</h2>
<div style=" margin-top: 4%;margin-left: 4%;">
  <div class="ui card" style="float: left; margin-right: 3%;margin-top: 1%;margin-bottom: 7%;">
    <div class="ui slide right reveal image">
      <div class="visible content">
        <img class="ui fluid image" src="img/arroz.png">
      </div>
      <div class="hidden content">
        <img class="ui fluid image" src="img/cafe.png">
      </div>
    </div>
    <div class="content">
      <div class="header">Title</div>
      <div class="meta">
        <a class="group">Meta</a>
      </div>
      <div class="description">One or two sentence description that may go to several lines</div>
    </div>
  </div>

    <div class="ui card" style="float: left; margin-right: 3%;">
    <div class="ui slide right reveal image">
      <div class="visible content">
        <img class="ui fluid image" src="img/arroz.png">
      </div>
      <div class="hidden content">
        <img class="ui fluid image" src="img/cafe.png">
      </div>
    </div>
    <div class="content">
      <div class="header">Title</div>
      <div class="meta">
        <a class="group">Meta</a>
      </div>
      <div class="description">One or two sentence description that may go to several lines</div>
    </div>
  </div>

    <div class="ui card" style="float: left; margin-right: 3%;">
    <div class="ui slide right reveal image">
      <div class="visible content">
        <img class="ui fluid image" src="img/arroz.png">
      </div>
      <div class="hidden content">
        <img class="ui fluid image" src="img/cafe.png">
      </div>
    </div>
    <div class="content">
      <div class="header">Title</div>
      <div class="meta">
        <a class="group">Meta</a>
      </div>
      <div class="description">One or two sentence description that may go to several lines</div>
    </div>
  </div>

    <div class="ui card" style="float: left;">
    <div class="ui slide right reveal image">
      <div class="visible content">
        <img class="ui fluid image" src="img/arroz.png">
      </div>
      <div class="hidden content">
        <img class="ui fluid image" src="img/cafe.png">
      </div>
    </div>
    <div class="content">
      <div class="header">Title</div>
      <div class="meta">
        <a class="group">Meta</a>
      </div>
      <div class="description">One or two sentence description that may go to several lines</div>
    </div>
  </div>
  </div>
 </div>  

 <button class="ui large primary button">Voltar às compras</button>



</body>
</html>