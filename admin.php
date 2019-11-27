<?php
include "CRUDAdmin.php";
$crud = new CRUDAdmin();
$usuario = $crud->mostraUsuarios();

?>
<html>
<head>
    <title>Gerente</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="semantic.css" type="text/css">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
    <script type="text/javascript" src="semantic.js"></script>

</head>
<body>
<?php require "menuLogado.php" ?>

<div style="background-color: #f4511e; color: white;
    padding-top: 4%;margin-bottom: -1%;padding-bottom: 3%;">
    <h1 style="font-size: 73px;text-align: center; font-family:" Lucida Sans Unicode", "Lucida Grande",
    sans-serif;>Administração de Usuários</h1>
    <h3 style="font-size: 25px; text-align: center; font-variant: small-caps;opacity: 0.7;"></h3>
    <div class="ui icon input" style="width: 95%; padding-left: 5%"></div>
</div>

<table class="ui compact celled definition table">
    <thead>
    <tr>
        <th></th>
        <th>Nome</th>
        <th>Email</th>
        <th>CPF</th>

    </tr>
    </thead>
    <?php foreach ($usuario as $user): ?>
    <form method="post" action="controladorAdmin.php">
        <tbody>
        <tr>
            <td class="collapsing">
                <div class="ui buttons">
                    //falta arrumar o confirmação de exclusao
                    <a href="controladorAdmin.php">
                        <button class="ui red button">Excluir</button>
                    </a>



                </div>
            </td>
            <td><?= $user['nome'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['cpf'] ?></td>

        </tr>

        </tbody>
        <?php endforeach; ?>
    </form>
</table>
<br>
</body>
</html>