$(document).ready(function() {

  // variables
  const formulario = document.getElementById('formSignIn')
  const labelCorreo = document.querySelector('label[for=correo]')
  const labelClave = document.querySelector('label[for=clave]')


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
      clave.classList.add("invalid")
      Materialize.toast(
        '<span><b><i class="fa fa-exclamation-triangle"></i> Advertencia: </b>Debes llenar el campo Password</span>',
        4000,
        'amber black-text')
      valido = false
    }
    return valido
  }

  function esValidoCorreo(correo) {
    let valido = true
    if (!(/^\w+([\.\+\-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(correo.value))) {
      correo.classList.add("invalid")
      Materialize.toast(
        '<span><b><i class="fa fa-exclamation-triangle"></i> Advertencia: </b>Debes llenar el campo Email</span>',
        4000,
        'amber black-text'
      )
      valido = false
    }
    return valido
  }

  function enviarFormulario(cor, cla) {
    let href = formulario.getAttribute('action')
    $.ajax({

      url: href+'admin/Auth/Sign',
      type: 'POST',
      dataType: 'json',
      data: {correo: cor, clave:cla}
    })
    .done(function (dta) {

      // console.log("done ", dta)
      Materialize.toast(
        dta.mensaje,
        4000,
        dta.clase,
        (dta.clase === "green black-text") ? location.reload() : null
      )
    })
    .catch(function (dta) {

      console.log("catch ", dta.responseText)

    })



  }

})
