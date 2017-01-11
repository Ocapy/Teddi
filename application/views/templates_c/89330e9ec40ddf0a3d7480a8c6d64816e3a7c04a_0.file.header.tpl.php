<?php
/* Smarty version 3.1.30, created on 2017-01-10 01:17:48
  from "C:\xampp\htdocs\osaky\Proyecto\application\views\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5874282c31dd80_84973859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89330e9ec40ddf0a3d7480a8c6d64816e3a7c04a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\osaky\\Proyecto\\application\\views\\templates\\header.tpl',
      1 => 1484007466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5874282c31dd80_84973859 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
    <ul id="translate" class="dropdown-content">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list2']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <li><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" class="brand-logo logo-osaky" />
            <a href="#" data-activates="mobile" class="button-collapse"><i class="fa fa-bars fa-2x amber-text text-darken-1"></i></a>
            <ul id="desktop" class="right hide-on-med-and-down" >
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list1']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <li><a href="#<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" class="black-text open-sans regular"> <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
 </a></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <li><a class="dropdown-button amber-text text-darken-1" href="#!" data-activates="translate"><i class="fa fa-globe" aria-hidden="true"></i>&nbsp; <i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
            </ul>
            <ul class="side-nav" id="mobile">
                <li>
                    <div class="background">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
">
                    </div>
                </li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list1']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <li><a href="#<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
 </a></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
        </div>
    </nav>
</header>
<?php }
}
