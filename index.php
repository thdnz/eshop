<?php

require "./lib/autoload.php";

$smarty = new Template();
Rotas::get_Pagina();

//valores para o template
$smarty->assign('NOME', 'ANANSI');

$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());



$smarty->display('index.tpl');

?>