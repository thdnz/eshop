<?php

require "./lib/autoload.php";

$smarty = new Template();


//valores para o template
$smarty->assign('NOME', 'ANANSI');

$smarty->display('index.tpl');
