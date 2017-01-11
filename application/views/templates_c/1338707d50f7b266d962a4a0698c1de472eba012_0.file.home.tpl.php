<?php
/* Smarty version 3.1.30, created on 2017-01-11 01:23:23
  from "C:\xampp\htdocs\osaky\Proyecto\application\views\templates\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58757afb5ea001_36539977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1338707d50f7b266d962a4a0698c1de472eba012' => 
    array (
      0 => 'C:\\xampp\\htdocs\\osaky\\Proyecto\\application\\views\\templates\\home.tpl',
      1 => 1484094012,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58757afb5ea001_36539977 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
">
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
        <link rel="shortcut icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['statics']->value['favicon'];?>
" />
        <title>OSAKY</title>
         
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600i,700" rel="stylesheet">
        
        <link href="<?php echo $_smarty_tpl->tpl_vars['statics']->value['css']['awesome'];?>
" rel="stylesheet" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['statics']->value['css']['material'];?>
" rel="stylesheet" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['statics']->value['css']['custom'];?>
" rel="stylesheet" />
    </head>
    <body>
        
        <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('logo'=>$_smarty_tpl->tpl_vars['statics']->value['logo'],'list1'=>$_smarty_tpl->tpl_vars['menu_list']->value,'list2'=>$_smarty_tpl->tpl_vars['menu5']->value), 0, false);
?>


        
        <div class="slider">
            <ul class="slides">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carrusel']->value, 'fila');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fila']->value) {
?>
                <li>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['fila']->value['image'];?>
">
                    <div class="caption <?php echo $_smarty_tpl->tpl_vars['fila']->value['class'];?>
">
                    <h3><?php echo $_smarty_tpl->tpl_vars['fila']->value['title'];?>
</h3>
                    <h5 class="light grey-text text-lighten-3"><?php echo $_smarty_tpl->tpl_vars['fila']->value['subtitle'];?>
</h5>
                    </div>
                </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
        </div>

        
        
        <div class="container">
            <div class="section">
                <div class="row" id="<?php echo $_smarty_tpl->tpl_vars['menu_list']->value['menu1'];?>
">
                    <br /><br />
                    <div class="center">
                        <h2 class="amber-text text-darken-1 open-sans bold"><?php echo $_smarty_tpl->tpl_vars['blocks_1']->value['block_title'];?>
</h2>
                        <h5 class="grey-text open-sans italic"><?php echo $_smarty_tpl->tpl_vars['blocks_1']->value['block_subtitle'];?>
</h5>
                    </div>
                    <br><br>
                    <?php echo $_smarty_tpl->tpl_vars['blocks_1']->value['block_content'];?>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks_1']->value['html'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <div class="col s12 m4">
                      <div class="card padding-top">
                        <div class="card-image" style="background: url('<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
')  center / cover;height: 180px;">
                          <span class="card-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span>
                        </div>
                        <div class="card-content">
                          <p>
                          <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

                          </p>
                        </div>
                      </div>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                </div>
            </div>
        </div>

        
        <div class="parallax-container">
            <div class="parallax"><img src="<?php echo $_smarty_tpl->tpl_vars['blocks_2']->value['block_parallax'];?>
"></div>
        </div>
        <div class="container">
            <div class="section">
                <div class="row" id="<?php echo $_smarty_tpl->tpl_vars['menu_list']->value['menu2'];?>
">
                    <br><br>
                    <div class="center">
                        <h2 class="amber-text text-darken-1 open-sans bold"><?php echo $_smarty_tpl->tpl_vars['blocks_2']->value['block_title'];?>
</h2>
                        <h5 class="grey-text open-sans italic"><?php echo $_smarty_tpl->tpl_vars['blocks_2']->value['block_subtitle'];?>
</h5>
                    </div>
                    <br /><br />
                    <?php echo $_smarty_tpl->tpl_vars['blocks_2']->value['block_content'];?>

                </div>
                <div class="row">
                  <div class="col s12">
                    <ul class="tabs">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks_2']->value['categories'], 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$__foreach_category_2_saved = $_smarty_tpl->tpl_vars['category'];
?>
                      <li class="tab col s3"><a href="#<?php echo $_smarty_tpl->tpl_vars['category']->key;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->key;?>
</a></li>
                    <?php
$_smarty_tpl->tpl_vars['category'] = $__foreach_category_2_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ul>
                  </div>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks_2']->value['categories'], 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$__foreach_category_3_saved = $_smarty_tpl->tpl_vars['category'];
?>
                    <div id="<?php echo $_smarty_tpl->tpl_vars['category']->key;?>
" class="col s12">
                      <div class="row">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'card');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['card']->value) {
?>
                        <div class="col s6 m4">
                          <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <img class="activator" src="<?php echo $_smarty_tpl->tpl_vars['card']->value['image'];?>
" alt="">
                              <span class="card-title"><?php echo $_smarty_tpl->tpl_vars['card']->value['title'];?>
</span>
                            </div>
                            <div class="card-reveal">
                              <span class="card-title grey-text text-darken-4"><?php echo $_smarty_tpl->tpl_vars['card']->value['title'];?>
<i class="fa fa-times right" aria-hidden="true"></i></span>
                              <p><?php echo $_smarty_tpl->tpl_vars['card']->value['content'];?>
</p>
                            </div>
                          </div>
                        </div>
                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                      </div>
                    </div>
                  <?php
$_smarty_tpl->tpl_vars['category'] = $__foreach_category_3_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            </div>
        </div>

        
        <div class="parallax-container">
            <div class="parallax"><img src="<?php echo $_smarty_tpl->tpl_vars['blocks_3']->value['block_parallax'];?>
"></div>
        </div>
        <div class="container">
            <div class="section">
                <div class="row" id="<?php echo $_smarty_tpl->tpl_vars['menu_list']->value['menu3'];?>
">
                  <br /><br />
                  <div class="center">
                    <h2 class="amber-text text-darken-1 open-sans bold">
                      <?php echo $_smarty_tpl->tpl_vars['blocks_3']->value['block_title'];?>

                    </h2>
                    <h5 class="grey-text open-sans italic"><?php echo $_smarty_tpl->tpl_vars['blocks_3']->value['block_subtitle'];?>
</h5>
                  </div>
                  <br /><br />
                  <?php echo $_smarty_tpl->tpl_vars['blocks_3']->value['block_content'];?>


                </div>
                <div class="row">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks_3']->value['about'], 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                  <div class="col s4 m3 l2">
                    <div class="card-panel">
                      <div class="center">
                        <?php echo $_smarty_tpl->tpl_vars['val']->value['icon'];?>

                      </div>
                    </div>
                  </div>
                  <div class="col s8 m9 l10">
                    <blockquote class="border-left-amber">
                      <h5 class="open-sans bold"><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</h5>
                      <?php echo $_smarty_tpl->tpl_vars['val']->value['content'];?>

                    </blockquote>
                  </div>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            </div>
        </div>
        
        <div class="parallax-container">
            <div class="parallax"><img src="<?php echo $_smarty_tpl->tpl_vars['blocks_4']->value['block_parallax'];?>
"></div>
        </div>
        <div class="container">
            <div class="section">

                <div class="row" id="<?php echo $_smarty_tpl->tpl_vars['menu_list']->value['menu4'];?>
">
                    <br /><br />
                    <div class="center">
                        <h2 class="amber-text text-darken-1 open-sans bold"><?php echo $_smarty_tpl->tpl_vars['blocks_4']->value['block_title'];?>
</h2>
                        <h5 class="grey-text open-sans italic"><?php echo $_smarty_tpl->tpl_vars['blocks_4']->value['block_subtitle'];?>
</h5>
                    </div>
                    <br /><br />
                    <?php echo $_smarty_tpl->tpl_vars['blocks_4']->value['block_content'];?>

                </div>

                <div class="row">
                  <div class="col s12 m7">
                    <form class="card-panel" action="#!" method="get">
                       
                      <div class="input-field">
                        <input id="correo" type="email" class="validate">
                        <?php echo $_smarty_tpl->tpl_vars['blocks_4']->value['form']['label']['email'];?>

                      </div>
                       
                      <div class="input-field">
                        <input id="nombre" type="text" class="validate">
                        <?php echo $_smarty_tpl->tpl_vars['blocks_4']->value['form']['label']['name'];?>

                      </div>
                       
                      <div class="input-field">
                        <select name="asunto" id="asunto">
                          <option value="" disabled selected><?php echo $_smarty_tpl->tpl_vars['blocks_4']->value['form']['option'];?>
</option>
                          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks_4']->value['form']['subject'], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_6_saved = $_smarty_tpl->tpl_vars['value'];
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->key;?>
</option>
                          <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_6_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                        <?php echo $_smarty_tpl->tpl_vars['blocks_4']->value['form']['label']['subject'];?>

                      </div>
                       
                      <div class="input-field">
                        <textarea id="mensaje" class="materialize-textarea"></textarea>
                        <?php echo $_smarty_tpl->tpl_vars['blocks_4']->value['form']['label']['message'];?>

                      </div>
                       
                       <div class="right-align">
                         <button class="btn waves-effect waves-teal" type="button" name="action">
                           <?php echo $_smarty_tpl->tpl_vars['blocks_4']->value['form']['submit'];?>

                         </button>
                       </div>
                    </form>
                  </div>

                  <div class="col s12 m5">
                    <div class="card-panel teal">
                      <span class="white-text">
                        <?php echo $_smarty_tpl->tpl_vars['blocks_4']->value['contact'];?>

                      </span>
                    </div>
                  </div>
                </div>

            </div>
        </div>

        <div class="fixed-action-btn">
         <a class="btn-floating btn-large amber">
           <i class="large fa fa-lightbulb-o"></i>
         </a>
         <ul>
           <li><a class="btn-floating btn-large facebook-bg"><i class="fa fa-facebook"></i></a></li>
           <li><a class="btn-floating btn-large google-plus-bg"><i class="fa fa-google-plus"></i></a></li>
           <li><a class="btn-floating btn-large twitter-bg"><i class="fa fa-twitter"></i></a></li>
         </ul>
       </div>

        
        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('list1'=>$_smarty_tpl->tpl_vars['menu_list']->value), 0, false);
?>


        
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['statics']->value['scripts']['jquery'];?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['statics']->value['scripts']['material'];?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['statics']->value['scripts']['custom'];?>
"><?php echo '</script'; ?>
>

    </body>
  </html>
<?php }
}
