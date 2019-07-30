<?php
  include("parts/php/common/menu.php");
?>

<div id="control_player" class="content">
<?php
  include("parts/php/player.php");
?>
</div>

<div class="center">
  <?php
  include("parts/php/library.php");
  ?>
</div>

<!-- <div class="row center">
<?php
  include("parts/php/options.php");
?>
</div> -->


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
  if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
    header.classList.add("navbar-fixed");
    header.style.position = "fixed";
    header.style.top = "60px";
    header.style.left = "21%";
  }
  else{
    header.classList.remove("navbar-fixed");
    header.style.position = "relative";
    header.style.top = "0px";
    header.style.left = "0px";


  }
}

</script>
