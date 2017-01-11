<?php
/* Smarty version 3.1.30, created on 2017-01-08 20:06:13
  from "C:\xampp\htdocs\osaky\Proyecto\application\views\templates\head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58728da574b969_42761292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e4313dd7a405f3cbd56a479fd737efbb65cb2a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\osaky\\Proyecto\\application\\views\\templates\\head.tpl',
      1 => 1483902272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58728da574b969_42761292 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1759258728da5748c46_00237589', "head");
}
/* {block "head"} */
class Block_1759258728da5748c46_00237589 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['statics']->value['favicon'];?>
" />
    <title>OSAKY</title>

    <!-- CSS  -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['statics']->value['css']['awesome'];?>
" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['statics']->value['css']['material'];?>
" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['statics']->value['css']['custom'];?>
" rel="stylesheet" />
  </head>
<?php
}
}
/* {/block "head"} */
}
