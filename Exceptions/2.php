<?php
function validarUsuario(array $usuario){
   if (empty($usuario['codigo']) || empty($usuario["nome"]) || empty($usuario['idade'])){
    throw new Exception("campos não foram preenchidos");
   }
   return true;
}

$usuario = [
    'codigo',
    'nome'.
    'idade',
];

$usuarioValido = validarUsuario($usuario);

if(!$usuario){
    echo "usuario invalido";
    return false;
}

echo '\n Executando \n';