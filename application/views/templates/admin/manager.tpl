{include "./header.tpl" css=$statics.css icons=$statics.icons}
{include "./navbar.tpl" path=$path}
    <div class="container">

      <div class="row">
        <div class="col-sm-12">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#header" role="tab">Header</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#main" role="tab">Main</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" data-toggle="tab" href="#footer" role="tab">Footer</a>
            </li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">

            <div class="tab-pane active" id="header" role="tabpanel">
              <div class="row">
                <div class="col-sm-6 p-1">

                  <!-- menu -->
                  <div class="jumbotron mt-2">
                 {* menu *}
                    <h1 class="display-3">Menu</h1>
                    <p class="lead">
                      Poner los nombres del menu
                    </p>
                    <form class="" action="{$path}admin/Manager/menuArray">
                      <div class="input-group p-2">
                        <span class="input-group-addon fa fa-bars"></span>
                        <input type="text" class="form-control" id="menu1" placeholder="Menu 1" aria-describedby="menu1">
                      </div>
                      <div class="input-group p-2">
                        <span class="input-group-addon fa fa-bars"></span>
                        <input type="text" class="form-control" id="menu2" placeholder="Menu 2" aria-describedby="menu2">
                      </div>
                      <div class="input-group p-2">
                        <span class="input-group-addon fa fa-bars"></span>
                        <input type="text" class="form-control" id="menu3" placeholder="Menu 3" aria-describedby="menu3">
                      </div>
                      <div class="input-group p-2">
                        <span class="input-group-addon fa fa-bars"></span>
                        <input type="text" class="form-control" id="menu4" placeholder="Menu 4" aria-describedby="menu4">
                      </div>
                      <div class="form-group p-2">
                        <label for="leng">Idioma</label>
                        <select class="form-control" id="leng">
                          <option value="1">en</option>
                          <option value="2">es</option>
                        </select>
                      </div>
                      <hr />
                      <div class="d-flex justify-content-end">
                        <input type="submit" class="btn btn-primary" id="btn_send_menu" value="Guardar">
                      </div>
                    </form>

                  </div>

                </div>
                <div class="col-sm-6 p-1">
                  {* carrusel *}
                  <div class="jumbotron mt-2">
                    <h1 class="display-3">Carrusel</h1>
                    <p class="lead">
                      Agregar las imagenes del carrucel
                    </p>
                    <form class="" action="">
                      <div class="form-group row">
                        <label for="example-text-input" class="col-3 col-form-label">Titulo</label>
                        <div class="col-9">
                          <input class="form-control" type="text" id="example-text-input">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="textareafile" class="col-3 col-form-label">Descripcion</label>
                        <div class="col-9">
                          <textarea class="form-control" id="textareafile" rows="3"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="carruselId" class="col-3 col-form-label">imagen #</label>
                        <div class="col-9">
                          <select class="form-control" id="carruselId">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="file" class="form-control-file" id="carruselfile" aria-describedby="fileHelp">
                        <small id="fileHelp" class="form-text text-muted">
                          Seleccione la imagen desde el explorador y/o arrastrela.
                        </small>
                      </div>
                      <hr />
                      <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

            </div>
            <div class="tab-pane" id="main" role="tabpanel">...</div>
            <div class="tab-pane" id="footer" role="tabpanel">...</div>
          </div>
        </div>
      </div>
    </div>
{include "./footer.tpl" scripts=$statics.scripts}
