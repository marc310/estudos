  <div id="player" class="center">
    <div id="image-card" class="section">
      <div class="row" style="margin-bottom: 0!important;">
        <div class="col s12 m8 l9">
            <div class="col s12 m8 l9">
              <div class="card">
                <div class="card-image">
                  

                  <div id="img_player">
                    <img id="cover" src="parts/theme/imgs/music.png" title="Zoom to 300px, full size (Z)" onclick="zoom()" oncontextmenu="toggle(event)"/>

                    <span id="time" class="card-title dim">00:00</span>
                  </div>

                </div>
                <div class="card-content">

                  <?php
                  include("parts/php/player/current.php");
                  ?>

                  <div id="afterdiv" style="margin-top: 20px;">
                    <div id="btn_afterPlay">
                      <a id="after" class="waves-effect waves-light  btn" 
                      title="Define action after last playlist item (A)" 
                      onclick="menu(event)"><u>D</u>epois de tocar
                      </a>
                    </div>

                    <div id="afteroptions" onmouseleave="menu(event)" onclick="toggle(event)">
                        <a id="stopplayback" class="waves-effect waves-light btn" title="Stop playing songs after last playlist item">Parar
                        </a>
                        <a id="repeatplaylist" class="waves-effect waves-light btn"
                        title="Restart playback from the top">Repetir playlist
                        </a>
                        <a id="playlibrary" class="waves-effect waves-light btn"
                        title="Continue from last song's position in library">Continuar da Biblioteca
                        </a>
                        <a id="randomlibrary" class="waves-effect waves-light btn" 
                        title="Randomly select unplayed songs from the library">Randomizar Biblioteca
                        </a>
                        <a id="randomfiltered" class="waves-effect waves-light btn" 
                        title="Randomly select unplayed songs from the filtered library">Randomizar Filtrados<span></span></a>
                    </div>
                  </div>

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
                        <i class="mdi-av-my-library-music"></i></a>
                    </li>

                    <li style="margin-left: 10px">
                      <a class="btn-floating tooltipped orange darken-1" 
                      onclick="eList();"
                      data-position="top" 
                      data-delay="50" 
                      data-tooltip="Mostrar Fila de Reprodução">
                      <i class="mdi-av-queue-music"></i></a>
                    </li>

                    <li style="margin-left: 10px">
                      <a class="btn-floating tooltipped green darken-1" 
                      onclick="eOptions();"
                      data-position="top" 
                      data-delay="50" 
                      data-tooltip="Mostrar Opções">
                      <i class="mdi-action-assessment"></i></a>
                    </li>

                    <li style="margin-left: 10px">
                      <a class="btn-floating tooltipped blue" 
                      onclick="clearPlaylist()"
                      ondragover="allowDrop(event)" 
                      ondrop="removeItem(event)"
                      data-position="top" 
                      data-delay="50" 
                      data-tooltip="Limpar Fila de Reprodução">
                      <i class="mdi-communication-clear-all"></i></a>
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
