<?php

class Rotas
{

    static function get_Pagina()
    {
        if (isset($_GET['pag'])) {
            $pagina = 'controller/' .$_GET['pag'];
            if (file_exists($pagina)) { 
                include $pagina;
            } else {
                include 'erro.php';
            }
        }
    }
}
