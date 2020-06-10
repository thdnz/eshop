<?php

require "./lib/autoload.php";

$smarty = new Template();

//valores para o template
$smarty->assign('NOME', 'ANANSI');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_MINHACONTA', Rotas::pag_Minhaconta());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);



$smarty->display('index.tpl');
