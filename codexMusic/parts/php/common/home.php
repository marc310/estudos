<?php
  include("parts/php/common/menu.php");
?>

<div id="control_player" class="content">
<?php
  include("parts/php/player.php");
?>
</div>

<div class="content">
<?php
  include("parts/php/options.php");
  ?>
</div>
<div class="content">
  <h1>Playlist</h1>
  <?php
  include("parts/php/playlist.php");
  ?>
</div>

<div class="content">
  <h1>Biblioteca</h1>
<?php
  include("parts/php/library.php");
?>
</div>

<script src="parts/js/codex.js" type="text/javascript"></script>

<script type="text/javascript">
// // When the user scrolls the page, execute myFunction
// window.onscroll = function() {myFunction()};
//
// // Get the header
// var header = document.getElementById("control_player");
//
// // Get the offset position of the navbar
// var sticky = header.offsetTop;
//
// // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
// function myFunction() {
//   if (window.pageYOffset > sticky) {
//     header.classList.add("sticky");
//   } else {
//     header.classList.remove("sticky");
//   }
// }
</script>
