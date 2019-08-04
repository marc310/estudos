//
// altera classe do play
$( function() {
    $( "#playpause" ).on( "click", function() {
      var iconPlay = $( "#playpause" ).children();
      $( "#playpause" ).children().hide();
    });
  } );
//
// esconde biblioteca
function eLibrary(){
	$("#library").toggle(500);

  $('html, body').animate({
      scrollTop: $("#biblioteca").offset().top
    }, 1000)
}
//
// mostra biblioteca
function eList(){
	$("#playlistdiv").toggle(500);
  //
  $('html, body').animate({
      scrollTop: $("#current").offset().top
    }, 1000)
}
//
// esconde options
function eOptions(){
	$("#opcoes").toggle(500);
  //
  $('html, body').animate({
      scrollTop: $("#options").offset().top
    }, 1000)
}
//
//
// esconde options depois de tocar
function eDepoisdetocar(){
  $("#div_depoisdetocar").toggle(500);
  //
  $('html, body').animate({
      scrollTop: $("#afteroptions").offset().top
    }, 1000)
}
//
//
function tVolume(){
	$("#toggle_volume").toggle(500);
}