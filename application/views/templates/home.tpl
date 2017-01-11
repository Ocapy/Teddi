<!DOCTYPE html>
<html lang="{$lang}">
    <head>
        {* METAS *}
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
        <link rel="shortcut icon" type="image/png" href="{$statics.favicon}" />
        <title>OSAKY</title>
         {* FONTS *}
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600i,700" rel="stylesheet">
        {* CSS *}
        <link href="{$statics.css.awesome}" rel="stylesheet" />
        <link href="{$statics.css.material}" rel="stylesheet" />
        <link href="{$statics.css.custom}" rel="stylesheet" />
    </head>
    <body>
        {* HEADER *}
        {include 'header.tpl' logo=$statics.logo list1=$menu_list list2=$menu5}

        {* CARRUSEL *}
        <div class="slider">
            <ul class="slides">
        {foreach $carrusel as $fila}
                <li>
                    <img src="{$fila.image}">
                    <div class="caption {$fila.class}">
                    <h3>{$fila.title}</h3>
                    <h5 class="light grey-text text-lighten-3">{$fila.subtitle}</h5>
                    </div>
                </li>
        {/foreach}
            </ul>
        </div>

        {* MAIN *}
        {* BLOCK 1 *}
        <div class="container">
            <div class="section">
                <div class="row" id="{$menu_list.menu1}">
                    <br /><br />
                    <div class="center">
                        <h2 class="amber-text text-darken-1 open-sans bold">{$blocks_1.block_title}</h2>
                        <h5 class="grey-text open-sans italic">{$blocks_1.block_subtitle}</h5>
                    </div>
                    <br><br>
                    {$blocks_1.block_content}
                    {foreach $blocks_1.html as $item}
                    <div class="col s12 m4">
                      <div class="card padding-top">
                        <div class="card-image" style="background: url('{$item.image}')  center / cover;height: 180px;">
                          <span class="card-title">{$item.title}</span>
                        </div>
                        <div class="card-content">
                          <p>
                          {$item.content}
                          </p>
                        </div>
                      </div>
                    </div>
                    {/foreach}

                </div>
            </div>
        </div>

        {* BLOCK 2 *}
        <div class="parallax-container">
            <div class="parallax"><img src="{$blocks_2.block_parallax}"></div>
        </div>
        <div class="container">
            <div class="section">
                <div class="row" id="{$menu_list.menu2}">
                    <br><br>
                    <div class="center">
                        <h2 class="amber-text text-darken-1 open-sans bold">{$blocks_2.block_title}</h2>
                        <h5 class="grey-text open-sans italic">{$blocks_2.block_subtitle}</h5>
                    </div>
                    <br /><br />
                    {$blocks_2.block_content}
                </div>
                <div class="row">
                  <div class="col s12">
                    <ul class="tabs">
                    {foreach $blocks_2.categories as $category}
                      <li class="tab col s3"><a href="#{$category@key}">{$category@key}</a></li>
                    {/foreach}
                    </ul>
                  </div>
                  {foreach $blocks_2.categories as $category}
                    <div id="{$category@key}" class="col s12">
                      <div class="row">
                      {foreach $category as $card}
                        <div class="col s6 m4">
                          <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <img class="activator" src="{$card.image}" alt="">
                              <span class="card-title">{$card.title}</span>
                            </div>
                            <div class="card-reveal">
                              <span class="card-title grey-text text-darken-4">{$card.title}<i class="fa fa-times right" aria-hidden="true"></i></span>
                              <p>{$card.content}</p>
                            </div>
                          </div>
                        </div>
                      {/foreach}
                      </div>
                    </div>
                  {/foreach}
                </div>
            </div>
        </div>

        {* BLOCK 3 *}
        <div class="parallax-container">
            <div class="parallax"><img src="{$blocks_3.block_parallax}"></div>
        </div>
        <div class="container">
            <div class="section">
                <div class="row" id="{$menu_list.menu3}">
                  <br /><br />
                  <div class="center">
                    <h2 class="amber-text text-darken-1 open-sans bold">
                      {$blocks_3.block_title}
                    </h2>
                    <h5 class="grey-text open-sans italic">{$blocks_3.block_subtitle}</h5>
                  </div>
                  <br /><br />
                  {$blocks_3.block_content}

                </div>
                <div class="row">
                  {foreach $blocks_3.about as $val}
                  <div class="col s4 m3 l2">
                    <div class="card-panel">
                      <div class="center">
                        {$val.icon}
                      </div>
                    </div>
                  </div>
                  <div class="col s8 m9 l10">
                    <blockquote class="border-left-amber">
                      <h5 class="open-sans bold">{$val.title}</h5>
                      {$val.content}
                    </blockquote>
                  </div>
                  {/foreach}
                </div>
            </div>
        </div>
        {* BLOCK 4 *}
        <div class="parallax-container">
            <div class="parallax"><img src="{$blocks_4.block_parallax}"></div>
        </div>
        <div class="container">
            <div class="section">

                <div class="row" id="{$menu_list.menu4}">
                    <br /><br />
                    <div class="center">
                        <h2 class="amber-text text-darken-1 open-sans bold">{$blocks_4.block_title}</h2>
                        <h5 class="grey-text open-sans italic">{$blocks_4.block_subtitle}</h5>
                    </div>
                    <br /><br />
                    {$blocks_4.block_content}
                </div>

                <div class="row">
                  <div class="col s12 m7">
                    <form class="card-panel" action="#!" method="get">
                       {* corrreo  *}
                      <div class="input-field">
                        <input id="correo" type="email" class="validate">
                        {$blocks_4.form.label.email}
                      </div>
                       {* nombre  *}
                      <div class="input-field">
                        <input id="nombre" type="text" class="validate">
                        {$blocks_4.form.label.name}
                      </div>
                       {* asunto  *}
                      <div class="input-field">
                        <select name="asunto" id="asunto">
                          <option value="" disabled selected>{$blocks_4.form.option}</option>
                          {foreach $blocks_4.form.subject as $value}
                            <option value="{$value}">{$value@key}</option>
                          {/foreach}
                        </select>
                        {$blocks_4.form.label.subject}
                      </div>
                       {* mensaje  *}
                      <div class="input-field">
                        <textarea id="mensaje" class="materialize-textarea"></textarea>
                        {$blocks_4.form.label.message}
                      </div>
                       {* enviar  *}
                       <div class="right-align">
                         <button class="btn waves-effect waves-teal" type="button" name="action">
                           {$blocks_4.form.submit}
                         </button>
                       </div>
                    </form>
                  </div>

                  <div class="col s12 m5">
                    <div class="card-panel teal">
                      <span class="white-text">
                        {$blocks_4.contact}
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

        {* FOOTER *}
        {include 'footer.tpl' list1=$menu_list}

        {* SCRIPTS *}
        <script src="{$statics.scripts.jquery}"></script>
        <script src="{$statics.scripts.material}"></script>
        <script src="{$statics.scripts.custom}"></script>

    </body>
  </html>
