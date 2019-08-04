<section id="listadereprod">
  
  <div id="playlistdiv" style="display: none;">

    <div class="row">
     
      <h4>Fila de Reprodução</h4>

      <div class="content" style="padding-bottom: 20px">
        
        <div id="playlist" onclick="playItem(event)" oncontextmenu="if (!mode) findItem(event)"
        ondragstart="prepDrag(event)" ondragover="allowDrop(event)" ondragend="endDrag()" ondrop="dropItem(event)"
        ondragenter="event.target.className += ' over'" ondragleave="event.target.className = event.target.className.replace(' over', '')"
        onmouseenter="onplaylist=true" onmouseleave="onplaylist=false"></div>
      </div>

      <div class="row" >
        <button id="clear" title="Clear the playlist (C)" onclick="clearPlaylist()"
        ondragover="allowDrop(event)" ondrop="removeItem(event)"
        ondragenter="this.className = 'drag drop'" ondragleave="this.className = 'drag'">Limpar</button>
      </div>
    </div>

  </div>
</section>