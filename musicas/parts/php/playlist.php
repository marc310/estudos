<div id="playlistdiv">
  <div>
    <button id="clear" title="Clear the playlist (C)" onclick="clearPlaylist()"
      ondragover="allowDrop(event)" ondrop="removeItem(event)"
      ondragenter="this.className = 'drag drop'" ondragleave="this.className = 'drag'">Limpar
    </button>

    <div id="playlist" onclick="playItem(event)" oncontextmenu="if (!mode) findItem(event)"
      ondragstart="prepDrag(event)" ondragover="allowDrop(event)" ondragend="endDrag()" ondrop="dropItem(event)"
      ondragenter="event.target.className += ' over'" ondragleave="event.target.className = event.target.className.replace(' over', '')"
      onmouseenter="onplaylist=true" onmouseleave="onplaylist=false">
    </div>
    
  </div>
</div>
