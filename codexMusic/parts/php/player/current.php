<div id="current">

  <input id="seek" type="range" min="0" max="1" value="0" step="any"
    onchange="seek('c')" oninput="seek('i')" ontouchstart="onseek=true" ontouchend="onseek=false" disabled>

    <?php
      include("parts/php/player/controls.php");
    ?>
    <div class="center">
    <div id="folder" class="dim" onclick="setFilter(event)">Album Title</div>
    <div id="song" class="dim" onclick="setFilter(event)">Track Title</div>
    </div>

    <input id="volumeslider" type="range" min="0" step=".05" onchange="setVolume(event)" oninput="setVolume(event)">

</div>
