<?php
/* Smarty version 3.1.30, created on 2017-01-11 03:55:54
  from "C:\xampp\htdocs\osaky\Proyecto\application\views\templates\admin\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58759eba623ac9_23559344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de4e74c7d5fb927a788971772fc3e53efb16b2f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\osaky\\Proyecto\\application\\views\\templates\\admin\\login.tpl',
      1 => 1484103352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58759eba623ac9_23559344 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('css'=>$_smarty_tpl->tpl_vars['statics']->value['css'],'icons'=>$_smarty_tpl->tpl_vars['statics']->value['icons']), 0, false);
?>

    <div id="alert" class='fixed' role="alert">
      <!--alerta-->
    </div>
    <div class="container full-screen">
      <div class="row align-items-center full-screen justify-content-center">

        <div class="col-md-4">

          <form class="card mb-3" id="formSignIn" action="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
">

            <img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
statics/media/osaky.jpeg" alt="Logo de osakylights">
            <div class="card-block">
              <div class="form-group">
                <label class="form-control-label" for="correo" >Email</label>
                <input class="form-control" type="email" id="correo">
                <div class="form-control-feedback"></div>
              </div>
              <div class="form-group">
                <label class="form-control-label" for="clave" >Password</label>
                <input class="form-control" type="password" id="clave">
                <div class="form-control-feedback"></div>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-outline-info float-right">INICIAR <i class="fa fa-sign-in"></i></button>
            </div>

          </form>

        </div>

      </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('scripts'=>$_smarty_tpl->tpl_vars['statics']->value['scripts']), 0, false);
?>

<?php }
}
