<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="<?= $this->lang->lang() ?>">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" type="image/png" href="<?= base_url('statics/media/favicon.png') ?>" />
    <title>OSAKY</title>

    <!-- CSS  -->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" /> -->
    <!-- <link href="./css/materialdesignicons.min.css" rel="stylesheet" /> -->
    <link href="<?= base_url('statics/css/font-awesome.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('statics/css/materialize.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('statics/css/estilos.css') ?>" rel="stylesheet" />
  </head>
  <body>
  <!-- ==== HEADER ==== -->
    <header>
      <!-- barra de navegacion -->
      <!-- menu de idiomas -->
      <ul id="translate" class="dropdown-content">
      <?php
        switch ($this->lang->lang()) {
          case 'en':
            echo "<li>".anchor($this->lang->switch_uri('en'),'English')."</li>";
            echo "<li>".anchor($this->lang->switch_uri('es'),'Spanish')."</li>";
            break;
          case 'es':
            echo "<li>".anchor($this->lang->switch_uri('en'),'Ingles')."</li>";
            echo "<li>".anchor($this->lang->switch_uri('es'),'Español')."</li>";
            break;
          default:
            echo "<li>".anchor($this->lang->switch_uri('en'),'English')."</li>";
            echo "<li>".anchor($this->lang->switch_uri('es'),'Spanish')."</li>";
            break;
        }
      ?>
      </ul>
      <nav class="white" role="navigation">
        <div class="nav-wrapper container">
          <img src="<?= base_url('statics/media/osaky.jpeg') ?>" class="brand-logo logo-osaky" />
          <a href="#" data-activates="mobile" class="button-collapse"><i class="fa fa-bars fa-2x amber-text text-darken-1"></i></a>
          <ul id="desktop" class="right hide-on-med-and-down" >
            <li><a href="#home" class="black-text"><?= lang('inicio') ?></a></li>
            <li><a href="#products" class="black-text"><?= lang('productos') ?></a></li>
            <li><a href="#about" class="black-text"><?= lang('nosotros') ?></a></li>
            <li><a href="#contact" class="black-text"><?= lang('contacnos') ?></a></li>
            <li><a class="dropdown-button amber-text text-darken-1" href="#!" data-activates="translate"><i class="fa fa-globe" aria-hidden="true"></i>&nbsp; <i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
          </ul>
          <ul class="side-nav" id="mobile">
            <li>
              <div class="background">
                <img src="<?= base_url('statics/media/osaky.jpeg') ?>">
              </div>
            </li>
            <li><a href="#home"><?= lang('inicio') ?></a></li>
            <li><a href="#products"><?= lang('productos') ?></a></li>
            <li><a href="#about"><?= lang('nosotros') ?></a></li>
            <li><a href="#contact"><?= lang('contacnos') ?></a></li>
          </ul>
        </div>
      </nav>
      <div class="slider">
        <ul class="slides">
          <li>
            <img src="<?= base_url('statics/media/1080x500.png') ?>"> <!-- random image -->
            <div class="caption center-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="<?= base_url('statics/media/1080x500.png') ?>"> <!-- random image -->
            <div class="caption left-align">
              <h3>Left Aligned Caption</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="<?= base_url('statics/media/1080x500.png') ?>"> <!-- random image -->
            <div class="caption right-align">
              <h3>Right Aligned Caption</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
        </ul>
      </div>
    </header>
  <!-- ==== MAIN ==== -->
    <main>
      <!-- ==== HOME ==== -->
      <div class="container">
        <div class="section">
          <div class="row" id="home">
            <br /><br />
            <div class="center">
              <h3 class="amber-text text-darken-1">titulo</h3>
              <h5 class="grey-text">subtitulo</h5>
            </div>
            <br><br>
            <div class="col s12 m4">
              <img src="<?= base_url('statics/media/350x200.png') ?>" class="responsive-img" alt="una deliciosa taza de café" />
              <p class="parrafo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                anim id est laborum.
              </p>
            </div>
            <div class="col s12 m4">
              <img src="<?= base_url('statics/media/350x200.png') ?>" class="responsive-img" alt="una deliciosa taza de café" />
              <p class="parrafo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                anim id est laborum.
              </p>
            </div>
            <div class="col s12 m4">
              <img src="<?= base_url('statics/media/350x200.png') ?>" class="responsive-img" alt="una deliciosa taza de café" />
              <p class="parrafo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                anim id est laborum.
              </p>
            </div>
          <!-- fin row -->
          </div>
        <!-- fin section -->
        </div>
      </div>
      <div class="parallax-container">
        <div class="parallax"><img src="<?= base_url('statics/media/1080x500.png') ?>"></div>
      </div>
      <!-- ==== PRODUCTS ==== -->
      <div class="container">
        <div class="section">
          <div class="row" id="products">
            <br><br>
            <div class="center">
              <h3 class="amber-text text-darken-1">titulo</h3>
              <h5 class="grey-text">subtitulo</h5>
            </div>
            <br /><br />
            <div class="col s12">
              <div id="categorias">
                <div class="chip selected" data-categorias="todo">todos</div>
                <div class="chip" data-categorias="luz">luz</div>
                <div class="chip" data-categorias="megaLuz">mega luz</div>
              </div>
              <hr />
              <div id="imgxcategoria">
                <div class="row">
                  <div class="col s12 m4" data-categoria="luz">
                    <div class="card">
                      <div class="card-image">
                        <img src="<?= base_url('statics/media/350x200.png') ?>" class="materialboxed" />
                        <span class="card-title">Card Title luz</span>
                      </div>
                      <div class="card-content">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                          incididunt ut labore et dolore magna aliqua.
                        </p>
                      </div>
                      <div class="card-action">
                        <a href="#">Comprar</a>
                      </div>
                    </div>
                  </div>
                  <div class="col s12 m4" data-categoria="megaLuz">
                    <div class="card">
                      <div class="card-image">
                        <img src="<?= base_url('statics/media/350x200.png') ?>" class="materialboxed">
                        <span class="card-title">Card Title megaLuz</span>
                      </div>
                      <div class="card-content">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                          incididunt ut labore et dolore magna aliqua.
                        </p>
                      </div>
                      <div class="card-action">
                        <a href="#">Comprar</a>
                      </div>
                    </div>
                  </div>
                  <div class="col s12 m4" data-categoria="luz">
                    <div class="card">
                      <div class="card-image">
                        <img src="<?= base_url('statics/media/350x200.png') ?>" class="materialboxed">
                        <span class="card-title">Card Title luz</span>
                      </div>
                      <div class="card-content">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                          incididunt ut labore et dolore magna aliqua.
                        </p>
                      </div>
                      <div class="card-action">
                        <a href="#">Comprar</a>
                      </div>
                    </div>
                  </div>
                  <div class="col s12 m4" data-categoria="megaLuz">
                    <div class="card">
                      <div class="card-image">
                        <img src="<?= base_url('statics/media/350x200.png') ?>" class="materialboxed">
                        <span class="card-title">Card Title megaluz</span>
                      </div>
                      <div class="card-content">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                          incididunt ut labore et dolore magna aliqua.
                        </p>
                      </div>
                      <div class="card-action">
                        <a href="#">Comprar</a>
                      </div>
                    </div>
                  </div>
                  <div class="col s12 m4" data-categoria="luz">
                    <div class="card">
                      <div class="card-image">
                        <img src="<?= base_url('statics/media/350x200.png') ?>" class="materialboxed">
                        <span class="card-title">Card Title luz</span>
                      </div>
                      <div class="card-content">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                          incididunt ut labore et dolore magna aliqua.
                        </p>
                      </div>
                      <div class="card-action">
                        <a href="#">Comprar</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- fin del row products -->
          </div>
          <!-- fin del section -->
        </div>
      </div>
      <div class="parallax-container">
        <div class="parallax"><img src="<?= base_url('statics/media/1080x500.png') ?>"></div>
      </div>
      <!-- ==== ABOUT ==== -->
      <div class="container">
        <div class="section">
          <div class="row" id="about">
            <br /><br />
            <div class="center">
              <h3 class="amber-text text-darken-1">titulo</h3>
              <h5 class="grey-text">subtitulo</h5>
            </div>
            <div class="col s12">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            </div>
          </div>
          <!-- fin section -->
        </div>
        <!-- fin del container -->
      </div>
      <div class="parallax-container">
        <div class="parallax"><img src="<?= base_url('statics/media/1080x500.png') ?>"></div>
      </div>
      <!-- ==== CONTACT ==== -->
      <div class="container">
        <div class="section">
          <div class="row" id="contact">
            <br /><br />
            <div class="center">
              <h3 class="amber-text text-darken-1">titulo</h3>
              <h5 class="grey-text">subtitulo</h5>
            </div>
            <br /><br />
            <div class="col s12 m6">
              <form class="" action="#!" method="get">
                <!-- corrreo -->
                <div class="input-field">
                  <i class="fa fa-envelope-o prefix"></i>
                  <input id="correo" type="email" class="validate">
                  <label for="correo">correo electronico</label>
                </div>
                <!-- nombre -->
                <div class="input-field">
                  <i class="fa fa-user-circle-o prefix"></i>
                  <input id="nombre" type="text" class="validate">
                  <label for="nombre">nombre</label>
                </div>
                <!-- asunto -->
                <div class="input-field">
                  <i class="fa fa-question-circle-o prefix"></i>
                  <select name="asunto" id="asunto">
                    <option value="" disabled selected>Seleccione un asunto</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>
                  <label>Asunto</label>
                </div>
                <!-- mensaje -->
                <div class="input-field">
                  <i class="fa fa-comment-o prefix"></i>
                  <textarea id="mensaje" class="materialize-textarea"></textarea>
                  <label for="mensaje">Escriba su mensaje</label>
                </div>
                <!-- enviar -->
                <div class="right">
                  <button class="btn waves-effect waves-teal btn-flat teal-text" type="" name="action">Submit
                    <i class="fa fa-paper-plane right"></i>
                  </button>
                </div>

              </form>

            </div>

            <div class="col s12 m6">
              <!-- CARD CONTACTO -->
              <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                  <span class="card-title">Card Title</span>
                  <p>
                    I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.
                  </p>
                </div>
              </div>

              <div class="center">
                <a class="btn-floating btn-large waves-effect waves-light facebook-bg"><i class="fa fa-facebook"></i></a>
                <a class="btn-floating btn-large waves-effect waves-light google-plus-bg"><i class="fa fa-google-plus"></i></a>
                <a class="btn-floating btn-large waves-effect waves-light twitter-bg"><i class="fa fa-twitter"></i></a>
              </div>
            </div>

          </div>
        </div>

      </div>
    </main>

  <!-- ==== FOOTER ==== -->
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
              <li><a class="grey-text text-lighten-3" href="#home"><?= lang('inicio') ?></a></li>
              <li><a class="grey-text text-lighten-3" href="#products"><?= lang('productos') ?></a></li>
              <li><a class="grey-text text-lighten-3" href="#about"><?= lang('nosotros') ?></a></li>
              <li><a class="grey-text text-lighten-3" href="#contact"><?= lang('contacnos') ?></a></li>
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
    </footer>
    <!-- ==== SCRIPTS ==== -->
    <script src="<?= base_url('statics/js/jquery-2.1.1.min.js') ?>"></script>
    <script src="<?= base_url('statics/js/materialize.min.js') ?>"></script>
    <script src="<?= base_url('statics/js/main.js') ?>"></script>

  </body>
  </html>
