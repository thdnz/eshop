<?php
Class Produtos extends Conexao{
    function __construct()
    {
        parent::__construct();
    }
    function GetProdutos()   {
        //query para buscar produtos de uma categoria especifica
    $query = "SELECT * FROM {$this->prefix}produtos p 
    INNER JOIN  {$this->prefix}categorias c ON p.pro_categoria
    = c.cate_id";

    //$query .= "ORDER BY pro_id DESC";

    $this->ExecuteSQL($query);
        
    $this->GetLista();

    }

    private function GetLista(){
        $i = 1;
        while($lista = $this->ListarDados()):
        $this->itens[$i] = array(
            'prod_id' => $lista['pro_id'],
            'prod_nome' => $lista['pro_nome'],
            'prod_desc' => $lista['pro_desc'],
            'prod_peso' => $lista['pro_peso'],
            'prod_valor' => $lista['pro_valor'],
            'prod_altura' => $lista['pro_altura'],
            'prod_largura' => $lista['pro_largura'],
            'prod_comprimento' => $lista['pro_comprimento'],
            'prod_img' => $lista['pro_img'],
            'prod_slug' => $lista['pro_slug'],
            'cate_nome' => $lista['cate_nome'],
            'cate_id' => $lista['cate_id']
        );
        $i++;
    endwhile;
    }
}
