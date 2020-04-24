<?php

require "./lib/autoload.php";

$smarty = new Template();
Rotas::get_Pagina();

//valores para o template
$smarty->assign('NOME', 'ANANSI');

echo Rotas::get_SiteRAIZ() . '<br>';

$smarty->display('index.tpl');

?>