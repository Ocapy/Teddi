<?php
/* Smarty version 3.1.30, created on 2017-01-08 23:20:37
  from "C:\xampp\htdocs\osaky\Proyecto\application\views\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5872bb35ad9832_71749920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e59f7c7cf02fface3364eac02a413e8c4901c48' => 
    array (
      0 => 'C:\\xampp\\htdocs\\osaky\\Proyecto\\application\\views\\templates\\footer.tpl',
      1 => 1483914018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5872bb35ad9832_71749920 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer class="page-footer amber darken-1">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">MENU</h5>
                <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list1']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <li><a class="grey-text text-lighten-3" href="#<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
 </a></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2017 Copyright Text
            <!-- <a class="grey-text text-lighten-4 right" href="#!">More Links</a> -->
        </div>
    </div>
</footer><?php }
}
