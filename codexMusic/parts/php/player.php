  <div id="player" class="center">
    <div id="image-card" class="section">
      <div class="row">
        <div class="col s12 m8 l9">
          <div class="row">
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
                  <!-- CARD HERE -->
                  <?php
                   include("parts/php/playlist.php");
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        

      </div>
    </div>





  </div>
