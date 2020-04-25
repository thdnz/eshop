<?php

require "./lib/autoload.php";

$smarty = new Template();
Rotas::get_Pagina();

//valores para o template
$smarty->assign('NOME', 'ANANSI');

echo Rotas::pag_Carrinho() . '<br>';

$smarty->display('index.tpl');

?>