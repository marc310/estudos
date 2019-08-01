<div id="controls">

  <div class="center">
    <a class="btn-floating tooltipped btn-flat waves-effect waves-light cyan dark-1 white-text" 
        id="previous"
        onclick="previous()"
        data-position="top" 
        data-delay="50" 
        data-tooltip="Play previous ([)"
        >
      <i class="mdi-av-fast-rewind"></i>
    </a>

    <a class="btn-floating tooltipped btn-flat waves-effect waves-light grey dark-1 white-text"
        id="volume" 
        onclick="mute(event)"
        data-position="top" 
        data-delay="50" 
        data-tooltip="L: Volume (U)&#xA;R: Mute (M)"
        >
      <i class="mdi-av-volume-off"></i>
    </a>

    <a class="btn-floating tooltipped btn-large waves-effect waves-light" id="playpause" 
    onclick="playPause()"
    data-position="top" 
    data-delay="50" 
    data-tooltip="Play or pause (Space)" 
    <i class="mdi-av-play-circle-fill"></i></a>

    <a class="btn-floating tooltipped btn-flat waves-effect waves-light grey dark-1 white-text" id="stop" 
    onclick="stop()"
    data-position="top" 
    data-delay="50" 
    data-tooltip="Stop playback (0)" >
      <i class="mdi-av-stop"></i></a>

      <a class="btn-floating tooltipped btn-flat waves-effect waves-light cyan dark-1 white-text" id="next"
          onclick="nextBtn()"
          data-position="top" 
          data-delay="50" 
          data-tooltip="Play next (])"
          >
        <i class="mdi-av-fast-forward"></i>
      </a>

  </div>




  <audio id="audio">HTML5 not supported</audio>

  <!-- <a class="btn-floating btn-flat waves-effect waves-light pink accent-2 white-text">
    <i class="mdi-content-content-cut"></i>
  </a> -->


</div>
