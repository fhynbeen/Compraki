<?php
    require "CRUDgerente.php";

    function editar($crud){
        return $crud->editarProd($_POST['nome'], $_POST['desc_prod'], $_POST['preco'], $_POST['preco_unit'], $_POST['qtd_emb'], $_POST['categoria'], $_POST['cod_prod']);

    }
    function mostrarProd($crud, $cod_prod){
        echo $crud->mostraProdutoEditar($cod_prod);
    }

    if($_GET['action'] == "editar"){
        echo editar($crud);
    }