<?php
/* Smarty version 3.1.36, created on 2020-06-04 06:36:36
  from 'C:\xampp\htdocs\eshop\view\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed87a544b0aa1_03690222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30dcc867d5e8801f655165a89e8a05757283ba65' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eshop\\view\\contato.tpl',
      1 => 1591245391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed87a544b0aa1_03690222 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt">

    <head>
        <?php echo '<script'; ?>
 src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
        <!------ Include the above in your HEAD tag ---------->
    </head>

    <body>

        <div class="container-fluid">
            <div class="row">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td colspan="1">
                                <form class="well form-horizontal" action="envio">
                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Full Name</label>
                                            <div class="col-md-8 inputGroupContainer">
                                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fullName" placeholder="Full Name" class="form-control" required="true" value="" type="text"></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Email</label>
                                            <div class="col-md-8 inputGroupContainer">
                                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="email" placeholder="Email" class="form-control" required="true" value="" type="text"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Mensagem</label>
                                            <div class="col-md-8 inputGroupContainer">
                                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="phoneNumber" name="mensagem" placeholder="Mensagem" class="form-control" required="true" value="" type="text"></div>

                                            </div>
                                            <br />

                                        </div>
                                        <div class="form-group">
                                        <button class="col-md-3 control-label " type="submit">Enviar</button>
                                        <button class="col-md-3 control-label" type="submit">Limpar</button>
                                    </div>
                                    </fieldset>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
           
        </div>

    </body>

</html><?php }
}
