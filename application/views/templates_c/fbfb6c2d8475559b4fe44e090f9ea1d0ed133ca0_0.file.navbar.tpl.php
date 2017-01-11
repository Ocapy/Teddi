<?php
/* Smarty version 3.1.30, created on 2017-01-11 02:37:52
  from "C:\xampp\htdocs\osaky\Proyecto\application\views\templates\admin\navbar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58758c70beb942_83488461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbfb6c2d8475559b4fe44e090f9ea1d0ed133ca0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\osaky\\Proyecto\\application\\views\\templates\\admin\\navbar.tpl',
      1 => 1484098630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58758c70beb942_83488461 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <nav class="navbar navbar-toggleable-sm navbar-inverse bg-inverse">

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <h1 class="navbar-brand mb-0">Osaky/Admin</h1>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">

        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">

            <form class="form-inline mr-auto">
              <select class="custom-select mr-sm-2">
                <option selected>Lenguaje</option>
                <option value="1">en</option>
                <option value="2">es</option>
              </select>
              <button type="button" class="btn btn-outline-success mr-sm-2">Generar</button>
            </form>

          </li>
        </ul>

        <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
admin/Auth/SignOut" class="btn btn-outline-info">Salir <i class="fa fa-sign-out"></i> </a>

      </div>

    </nav>
<?php }
}
