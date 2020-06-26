
<!-- começa lista de produtos ---->
<section id="produtos" class="row">

    <ul style="list-style: none">

        <div class="row" id="pularlinha">
            {foreach from=$PRO item=P}
    
    
                <li class="col-md-4">
    
                    <div class="thumbnail">
    
                        <a href="">
    
                            <img src="media/images/{$P.prod_img}" alt="">
    
                            <div class="caption">
    
                                <h4 class="text-center">{$P.prod_nome}</h4>
    
                                <h3 class="text-center text-danger">{$P.prod_valor}</h3>
    
                            </div>
    
                        </a>
    
                </li>
    
            {/foreach}}

        </div>

    </ul>




