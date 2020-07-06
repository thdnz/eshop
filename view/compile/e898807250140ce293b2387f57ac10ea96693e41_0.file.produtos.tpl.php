<?php
/* Smarty version 3.1.36, created on 2020-07-05 23:34:45
  from 'C:\xampp\htdocs\eshop\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f024775eb9857_05023832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e898807250140ce293b2387f57ac10ea96693e41' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eshop\\view\\produtos.tpl',
      1 => 1593984763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f024775eb9857_05023832 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- começa lista de produtos ---->
<section id="produtos" class="row">

    <ul style="list-style: none">

        <div class="row" id="pularlinha">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
    
    
                <li class="col-md-4">
    
                    <div class="thumbnail">
    
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
">
    
                            <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" width="200" height="200" alt="">
    
                            <div class="caption">
    
                                <h4 class="text-center"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h4>
    
                                <h3 class="text-center text-danger"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h3>
    
                            </div>
    
                        </a>
    
                </li>
    
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>}

        </div>

    </ul><?php }
}
