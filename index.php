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

    <div class="ui pointing fixed hidden menu" style=" display: flex !important;background-color: #f4511e;">
        <a class="item" href="index.php">
            <p style="font-size: 20px; color: white;">Compraki</p>
        </a>
        <div id="menuzinho" class="right menu" style="padding-right: 40px; ">
            <a class="item" style="border-color: #f4511e;background-color: #f4511e;border-bottom: 1px solid #f4511e;border-right: 1px solid #f4511e;color: white;">
                Home
            </a>
            <a class="item" href="login.php" style="color: white">
                Login
            </a>
             <a href="sobre.php" class="item" style="color: white">
                Sobre Nós
            </a>

        </div>
    </div>
    <br><br>
    <div>    
    <img src="data_bases/img/index.png" style="width: 100%; height: 80%;">
   <div style="color: white; margin-top: -300px; position: absolute; margin-left: 230px">
        <div class="ui text container">
              <h1 class="ui inverted header" style="margin-left: 22%;margin-top: -9%;font-size: -webkit-xxx-large;font-weight: bold;font-size: 677%;">
                COMPRAKI
              </h1>
        </div>
        <div class="ui icon input" style="width: 95%; padding-left: 5%">
            <form method="POST" action="produto.php">
                <div class="ui search">
                  <div class="ui icon input" style="width: 576%;">
                    <input class="prompt" type="text" placeholder="O que você procura?" style="height: 44px;margin-right: 24%;margin-left: -6%;">
                    <i class="search icon"></i>
                  </div>
                <div class="results"></div>
                </div>
            </form>
       </div>
   </div>
       <br><br><br><br><br>
   
    <div style="background-color: white; text-align: center;padding-bottom: 6%;"><br>
        <div class="ui text container" style="margin-top: 6%;">
         <h1 class="ui dividing header" style="font-size: 231%;">Menu</h1>

         <h3 class="first" style="opacity: 0.4;">Itens mais procurados</h3>
        </div>

        <div>&nbsp;</div>
        <div>&nbsp;</div>
        <div>&nbsp;</div>

        <a href="produto.php"><button class="massive ui yellow button" style="width: 24%;height: 24%;">Bebidas</button></a>

        <a href="produto.php"><button class="massive ui red button" style="width: 24%;height: 24%;">Açougue</button></a>


        <a href="produto.php"><button class="massive ui orange button" style="width: 24%;height: 24%;">Comidas</button></a>


        <a href="produto.php"><button class="massive ui blue button" style="width: 24%;height: 24%;">Higiêne</button></a>


        <div>&nbsp;</div>        
        <a href="produto.php"><button class="massive ui green button" style="width: 24%;height: 24%;">Verdureira</button></a>

            
        <a href="produto.php"><button class="massive ui teal button" style="width: 24%;height: 24%;">Frios</button></a>

        <a href="promocao.php"><button class="massive ui teal button" style="width: 24%;height: 24%;background-color: black;">Promoções</button></a>

        <div>&nbsp;</div>
        <div>&nbsp;</div>
        <div>&nbsp;</div>
        <div>&nbsp;</div>
    </div>

<?php include"rodape.php"; ?>

    </body>
</html>