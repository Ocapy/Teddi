    <div class="row valign-wrapper full-screen">

      <div class="col s12">

        <div class="container">

          <div class="row">
            <form class="col s12 m8 l4 push-m2 push-l4" id="formSignIn" action="<?= base_url() ?>">

              <img src="<?= base_url('statics/media/osaky.jpeg') ?>" alt="Logo de osakylights" class="responsive-img" />
              <div class="input-field">
                <input id="correo" type="email" class="validate">
                <label for="correo">Email</label>
              </div>
              <div class="input-field">
                <input id="clave" type="password" class="validate">
                <label for="clave">Password</label>
              </div>
              <div class="right">
                <button class="btn waves-effect waves-light" type="submit" name="action">Iniciar
                  <i class="fa fa-sign-in"></i>
                </button>
              </div>

            </form>

          </div>

        </div>

      </div>

    </div>
