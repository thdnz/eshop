<?php

$smarty = new Template();

$produtos = new Produtos();
$produtos->GetProdutos();

echo '<pre>';
var_dump($produtos->GetItens());
echo '</pre>';

