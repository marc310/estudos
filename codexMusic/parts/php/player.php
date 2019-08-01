  <div id="player" class="center">
    <div id="image-card" class="section">
      <div class="row" style="margin-bottom: 0!important;">
        <div class="col s12 m8 l9">
            <div class="col s12 m8 l9">
              <div class="card">
                <div class="card-image">
                  <img id="cover" src="parts/theme/imgs/music.png" title="Zoom to 300px, full size (Z)" onclick="zoom()" oncontextmenu="toggle(event)"/>

                  <span id="time" class="card-title dim">00:00</span>

                </div>
                <div class="card-content">


                  <?php
                  include("parts/php/player/current.php");
                  ?>
                </div>
                <div class="card-action">

                <div class="col s12 m4 l3 center" id="play_action_btn"
                style="padding-bottom:20px">
                  <ul style="display: inline-flex;">

                    <li>
                      <a class="btn-floating darken-1" title="Volume" onclick="tVolume();"><i class="mdi-av-volume-up"></i></a>
                    </li>

                    <li>
                      <a class="btn-floating red darken-1" onclick="eLibrary();"><i class="large mdi-editor-insert-chart"></i></a>
                    </li>

                    <li>
                      <a class="btn-floating yellow darken-1" onclick="eList();"><i class="large mdi-editor-format-quote"></i></a>
                    </li>

                    <li>
                      <a class="btn-floating green darken-1" onclick="eOptions();"><i class="large mdi-editor-publish"></i></a>
                    </li>

                  </ul>
                </div>
                <div class="divider"></div>
                  <?php
                  include("parts/php/playlist.php");
                  ?>
                  <div class="center">
                    <?php
                    include("parts/php/library.php");
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        

      </div>
    </div>





  </div>
