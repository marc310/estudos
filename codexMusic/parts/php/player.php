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
                  <!-- BOTOES DE AÇÕES DE MENU -->
                <div class="col s12 m4 l3 center" id="play_action_btn"
                style="padding-bottom:30px">
                  <ul style="display: inline-flex;">

                    <li>
                      <a class="btn-floating tooltipped darken-1" 
                      onclick="tVolume();"
                      data-position="top" 
                      data-delay="50" 
                      data-tooltip="Volume">
                      <i class="mdi-av-volume-up"></i></a>
                    </li>

                    <li style="margin-left: 10px">
                      <a class="btn-floating tooltipped red darken-1" 
                      onclick="eLibrary();"
                      data-position="top" 
                      data-delay="50" 
                      data-tooltip="Mostrar Biblioteca">
                        <i class="large mdi-editor-insert-chart"></i></a>
                    </li>

                    <li style="margin-left: 10px">
                      <a class="btn-floating tooltipped yellow darken-1" 
                      onclick="eList();"
                      data-position="top" 
                      data-delay="50" 
                      data-tooltip="Mostrar Fila de Reprodução">
                      <i class="large mdi-editor-format-quote"></i></a>
                    </li>

                    <li style="margin-left: 10px">
                      <a class="btn-floating tooltipped green darken-1" 
                      onclick="eOptions();"
                      data-position="top" 
                      data-delay="50" 
                      data-tooltip="Mostrar Opções">
                      <i class="large mdi-editor-publish"></i></a>
                    </li>

                    <li style="margin-left: 10px">
                      <a class="btn-floating tooltipped blue" 
                      onclick="clearPlaylist()"
                      data-position="top" 
                      data-delay="50" 
                      data-tooltip="Limpar Fila de Reprodução">
                      <i class="large mdi-editor-attach-file"></i></a>
                    </li>

                  </ul>
                </div>
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
