<?php
include("CRUDprodutos.php");

if ($_GET['sessao'] != "logado") {
    $login = "Login";
} else {
    $login = "Carrinho";

}



if ($_GET['categoria'] != "todos") {
    $produtos = $crudProd->categoriaProduto($_GET['categoria']);
} elseif ($_GET['categoria'] == "todos") {
    $produtos = $crudProd->lerProdutos();
} else {
    $produtos = $crudProd->buscaProduto("Cravo");
}
//}else{

//}
?>
<html>

<head>
    <title>CompreAki</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="semantic.css" type="text/css">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
    <script type="text/javascript" src="semantic.js">
    </script>

</head>
<body>
<div style="background-color: #f4511e; color: white; margin-top: 2%; padding-top: 4%;">
    <h1 style="font-size: 73px;text-align: center; font-family:" Lucida Sans Unicode", "Lucida Grande",
    sans-serif;"><?= ucfirst($_GET['categoria']); ?></h1>
    <h3 style="font-size: 25px; text-align: center; font-variant: small-caps;opacity: 0.7; margin-bottom: 4%;"></h3>
    <div class="ui icon input" style="width: 95%; padding-left: 5%"></div>
</div>
<div>

</div>
<div class="ui secondary pointing menu">
    <a href="produto.php?categoria=bebidas" class="item">
        Bebidas
    </a>
    <a href="produto.php?categoria=açougue" class="item">
        Açougue
    </a>
    <a href="produto.php?categoria=comidas" class="item">
        Comidas
    </a>
    <a href="produto.php?categoria=higiene" class="item">
        Higiêne
    </a>
    <a href="produto.php?categoria=verdureira" class="item">
        Verdureira
    </a>
    <a href="produto.php?categoria=frios" class="item">
        Frios
    </a>
    <div class="ui right menu">
        <form method="get">
            <div class="ui transparent icon input">
                <input class="prompt" type="text" name="categoria" id="categoria" placeholder="Buscar">
                <i class="search link icon" href="produto.php?categoria=<?= $_GET['categoria'] ?>"></i>
            </div>
        </form>
    </div>
</div>

<div class="ui pointing fixed hidden menu" style=" display: flex !important;background-color: #f4511e;">
    <a class="item" href="index.php">
        <p style="font-size: 20px; color: white;">Compraki</p>
    </a>
    <div id="menuzinho" class="right menu" style="padding-right: 40px; ">
        <a class="item"
           style="border-color: #f4511e;background-color: #f4511e;border-bottom: 1px solid #f4511e;border-right: 1px solid #f4511e;color: white;">
            Home
        </a>
        <a class="item" href="<?= $login ?>.php?sessao=nao" style="color: white">
            <?= $login ?>
        </a>
        <a href="sobre.php?sessao=<?= $login ?>" class="item" style="color: white">
            Sobre Nós
        </a>

    </div>
</div>
<form method="post" action="controlador.php?acao=carrinho">
    <div class="ui link cards" id="cards" style="margin-left: 3.7%;">

        <?php foreach ($produtos as $produto): ?>

            <div class="card" id="cardsJogos">
                <div class="image">
                    <img src="data_bases/img/<?= $produto['img'] ?>" style="width: 200px; height: 230px;">
                </div>
                <div class="content">
                    <div class="description" id="cod_prod"">
                        <?= $produto['nome'] ?>
                    </div>
                </div>
                <div class="extra content">
      <span class="right floated" style="padding-right: 20px">

      </span>
                    <span>
        <?= $produto['preco'] ?><i class="tag up icon blue" style="color-text: black; padding-left: 200px;"></i>
      </span>
                </div>


            <button type="submit" id="cod_prod" name="cod_prod" value="<?= $produto['cod_prod'] ?>">Adicionar ao Carrinho</button>
            </div>
        <?php endforeach ?>

    </div>
</form>

</body>
</html>
