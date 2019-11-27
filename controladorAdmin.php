<?php
include "CRUDAdmin.php";
function excluirUser($cpf, $crud)
{
    $excluir = $crud->excluirUser($cpf);
    return $excluir;

}

excluirUser($usuario['cpf'], $crud);