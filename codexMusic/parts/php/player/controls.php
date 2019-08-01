<div id="controls">

  <div class="center">
    <a class="btn-floating btn-flat waves-effect waves-light cyan dark-1 white-text" id="previous"
        title="Play previous ([)"
        onclick="previous()"
        >
      <i class="mdi-av-fast-rewind"></i>
    </a>

    <a class="btn-floating btn-flat waves-effect waves-light grey dark-1 white-text"
        id="volume" title="L: Volume (U)&#xA;R: Mute (M)"
        onclick="mute(event)"
        >
      <i class="mdi-av-volume-off"></i>
    </a>

    <a class="btn-floating btn-large waves-effect waves-light" id="playpause" title="Play or pause (Space)" onclick="playPause()">
      <i class="mdi-av-play-circle-fill"></i></a>

    <a class="btn-floating btn-flat waves-effect waves-light grey dark-1 white-text" id="stop" title="Stop playback (0)" onclick="stop()">
      <i class="mdi-av-stop"></i></a>

      <a class="btn-floating btn-flat waves-effect waves-light cyan dark-1 white-text" id="next"
          title="Play next (])"
          onclick="nextBtn()"
          >
        <i class="mdi-av-fast-forward"></i>
      </a>

  </div>




  <audio id="audio">HTML5 not supported</audio>

  <!-- <a class="btn-floating btn-flat waves-effect waves-light pink accent-2 white-text">
    <i class="mdi-content-content-cut"></i>
  </a> -->


</div>
