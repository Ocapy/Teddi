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

        <a href="{$path}admin/Auth/SignOut" class="btn btn-outline-info">Salir <i class="fa fa-sign-out"></i> </a>

      </div>

    </nav>
