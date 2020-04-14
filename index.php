<?php

require "./lib/autoload.php";

$smarty = new Template();
Rotas::get_pagina();

//valores para o template
$smarty->assign('NOME', 'ANANSI');

$smarty->display('index.tpl');
