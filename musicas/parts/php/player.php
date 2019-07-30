<div id="player">
  <img id="cover" src="parts/theme/imgs/music.png" title="Zoom to 300px, full size (Z)" onclick="zoom()" oncontextmenu="toggle(event)"/>

  <div id="current">
    <div id="folder" class="dim" onclick="setFilter(event)">Album Title</div>
    <div id="song" class="dim" onclick="setFilter(event)">Track Title</div>
    <div id="time" class="dim">00:00</div>
    <input id="seek" type="range" min="0" max="1" value="0" step="any"
      onchange="seek('c')" oninput="seek('i')" ontouchstart="onseek=true" ontouchend="onseek=false" disabled>
    <div id="controls">
      <button id="volume" title="L: Volume (U)&#xA;R: Mute (M)" onclick="toggle(event)" oncontextmenu="mute(event)"></button>
      <input id="volumeslider" type="range" min="0" step=".05" onchange="setVolume(event)" oninput="setVolume(event)">
      <button id="stop" title="Stop playback (0)" onclick="stop()"></button>
      <button id="playpause" title="Play or pause (Space)" onclick="playPause()"></button>
      <button id="previous" title="Play previous ([)" onclick="previous()"></button>
      <button id="next" title="Play next (])" onclick="nextBtn()"></button>
      <audio id="audio">HTML5 not supported</audio>
    </div>
  </div>

</div>
