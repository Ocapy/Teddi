$(document).ready(function() {

  $('.slider').slider({
    full_width: true, // determina si es para toda la pantalla o screen
    indicators: true, // Los indicadores muestran la posicion de la imagen (Default: True)
    height: 500, // el alto que tiene nuesto carrusel (Default: 400)
    transition: 500, // establece la duración de la transicion en la animacion, se establece en ms (Default: 500)
    interval: 6000//Establezca la duración entre transiciones en ms (Default: 6000)
  })
  $(".button-collapse").sideNav({
      menuWidth: 300, // Default is 240
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    })
  $('.parallax').parallax();
  $('select').material_select();
  $('.chips').material_chip()


  $('.chip').on('click', function(){
    // you have the selected chip here
    let dta = this.dataset.categorias
    if (dta === "todo") {
      $( "[data-categoria]" ).removeClass('hide')
    } else {
      $( "[data-categoria]" ).removeClass('hide')
      $( "[data-categoria]" ).not( "[data-categoria='"+dta+"']" ).addClass('hide')
    }
    // console.log(dta)
  })


})
