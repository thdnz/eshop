<h2>Pagina Produtos</h2>
<?php

$produtos = new Produtos();
$produtos->GetProdutos();

var_dump($produtos->GetItens());