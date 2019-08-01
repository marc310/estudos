<?php
  include("parts/php/common/menu.php");
?>

<div id="control_player" class="content">
<?php
  include("parts/php/player.php");
?>
</div>




<div class="fixed-action-btn horizontal" style="position: fixed; display: inline-block; right: 20px;">
  <a class="btn-floating btn-large red">
    <i class="mdi-social-notifications-none"></i>
  </a>
  <ul>
  <li><a class="btn-floating red" onclick="eLibrary();"><i class="large mdi-editor-insert-chart"></i></a>
  </li>

  <li><a class="btn-floating yellow darken-1" onclick="eList();"><i class="large mdi-editor-format-quote"></i></a>
  </li>

  <li><a class="btn-floating green" onclick="eOptions();"><i class="large mdi-editor-publish"></i></a>
  </li>

  <li><a class="btn-floating blue" onclick="clearPlaylist()"><i class="large mdi-editor-attach-file"></i></a>
  </li>

</ul>
</div>
<script src="parts/js/codex.js" type="text/javascript"></script>

<script type="text/javascript">
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("controls");

// Get the offset position of the navbar
var sticky = header.offsetTop;

header.nextElementSibling;
// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
// function myFunction() {
//   if (window.pageYOffset > sticky) {
//     header.classList.add("navbar-fixed");
//     header.style.position = "fixed";
//   } else {
//     header.classList.remove("navbar-fixed");
//     header.style.position = "relative";

//   }
// }
function myFunction() {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    // header.hidden = false;
    header.classList.add("navbar-fixed");
    header.style.position = "fixed";
    header.style.top = "60px";
    header.style.left = "21%";
  }
  else{
    // header.hidden = true;
    header.classList.remove("navbar-fixed");
    header.style.position = "relative";
    header.style.top = "0px";
    header.style.left = "0px";
  }
}
//
// esconde biblioteca
function eLibrary(){
	$("#library").toggle(500);
}
//
// mostra biblioteca
function eList(){
	$("#playlistdiv").toggle(500);
}
//
// esconde options
function eOptions(){
	$("#opcoes").toggle(500);
}
//
//
function tVolume(){
	$("#toggle_volume").toggle(500);
}
</script>
