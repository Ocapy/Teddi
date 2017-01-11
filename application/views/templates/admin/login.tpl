{include "./header.tpl" css=$statics.css icons=$statics.icons}
    <div id="alert" class='fixed' role="alert">
      <!--alerta-->
    </div>
    <div class="container full-screen">
      <div class="row align-items-center full-screen justify-content-center">

        <div class="col-md-4">

          <form class="card mb-3" id="formSignIn" action="{$path}">

            <img class="card-img-top" src="{$path}statics/media/osaky.jpeg" alt="Logo de osakylights">
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
{include "./footer.tpl" scripts=$statics.scripts}
