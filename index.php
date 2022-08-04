<?php
    include_once "./crud.php";

$user = new crud();
$use = $user->find(1);
echo "meu nome é {$use->nome}";
var_dump($use);