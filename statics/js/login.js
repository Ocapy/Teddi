$(document).ready(function() {

  // variables
  const formulario = document.getElementById('formSignIn')
  const $alert = $('#alert')

  formulario.addEventListener("submit",esValido)

  // funciones
  function esValido(evt) {
    evt.preventDefault()
    let correo = document.getElementById('correo')
    let clave = document.getElementById('clave')

    // validar
    if (esValidoCorreo(correo) && esValidoClave(clave)) {
      enviarFormulario(correo.value, clave.value)
    }
  }

  function esValidoClave(clave) {
    let valido = true
    if (clave.value.length === 0) {
      clave.parentNode.classList.add("has-warning")
      clave.nextElementSibling.innerHTML = '<b><i class="fa fa-exclamation-triangle"></i> Advertencia: </b> Password vacio'
      setInterval(
        function(e){
          clave.parentNode.classList.remove("has-warning")
          clave.nextElementSibling.innerHTML = ''
        }
      ,3000)
      valido = false
    } else {
      clave.parentNode.classList.add("has-success")
      clave.classList.add("form-control-success")
    }
    return valido
  }

  function esValidoCorreo(correo) {
    let valido = true
    if (!(/^\w+([\.\+\-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(correo.value))) {
      
      correo.parentNode.classList.add("has-warning")
      correo.nextElementSibling.innerHTML = '<b><i class="fa fa-exclamation-triangle"></i> Advertencia: </b> Email no es valido'
      setInterval(
        function(e){
          correo.parentNode.classList.remove("has-warning")
          correo.nextElementSibling.innerHTML = ''
        }
      ,3000)
      valido = false
    } else {
      correo.parentNode.classList.add("has-success")
      correo.classList.add("form-control-success")
    }
    return valido
  }

  function enviarFormulario(cor, cla) {
    let href = formulario.getAttribute('action')
    $.ajax({

      url: href+'admin/Auth/SignIn',
      type: 'POST',
      dataType: 'json',
      data: {correo: cor, clave:cla}
    })
    .done(function (dta) {

      alertaMessage(dta.clase, dta.titulo, dta.mensaje)
      if ( dta.clase == "alert-success" ) {
        location.reload() 
      }
      
    })
    .catch(function (dta) {
      console.log("catch ", dta.responseText)
    })

  }
  
  function alertaMessage(clase, titulo, contenido) {
    let template = `
    <div class="alert ${clase}" role="alert">
      <strong>${titulo}</strong> ${contenido}
    </div>
    `
    $alert.html(template).slideDown("slow").slideUp(5000)
  }

})
