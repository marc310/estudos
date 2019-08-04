 <div id="options">
           
   <button id="enqueue" class="waves-effect waves-light  btn" title="Tocar musicas em Sequência pressione (E)" onclick="toggle(event)">S<u>e</u>quência</button>
   
   <button id="random" class="waves-effect waves-light  btn" title="Randomize upcoming playlist songs (R)" onclick="toggle(event)"><u>R</u>andomico</button>

   <button id="crossfade" class="waves-effect waves-light  btn" title="Crossfade between songs (O)" onclick="toggle(event)">Tr<u>a</u>nsição</button>

   <button id="playlistbtn" class="waves-effect waves-light  btn" title="Playlist options (P)" onclick="toggle(event)"><u>P</u>laylists</button>

   <button id="share" class="waves-effect waves-light  btn" title="Share options (S)" onclick="toggle(event)"><u>C</u>ompartilhar</button>

   <button id="lock" class="waves-effect waves-light  btn" title="Lock playlist and playback controls (L)" onclick="toggleLock()"><u>T</u>ravar</button>

   <div id="playlistoptions">
     <div id="playlistsdiv">
       <button id="load" title="Add songs from online playlist (D)" onclick="menu(event)">Carrega<u>r</u></button>
       <div id="playlists" onmouseleave="menu(event)" onclick="loadPlaylistBtn(event)">
       </div>
     </div>

     <button id="save" title="Save playlist online (V)" onclick="prepPlaylists('save')">Sal<u>v</u>ar</button>
     <button id="import" title="Add songs from exported playlist (I)" onclick="importPlaylist()"><u>I</u>mportar</button>
     <button id="export" title="Export current playlist to file (X)" onclick="exportPlaylist()">E<u>x</u>portar</button>

     <div id="afterdiv">
       <button id="after" title="Define action after last playlist item (A)" onclick="menu(event)"><u>D</u>epois de tocar</button>
       <div id="afteroptions" onmouseleave="menu(event)" onclick="toggle(event)">
         <button id="stopplayback" title="Stop playing songs after last playlist item">Parar</button>
         <button id="repeatplaylist" title="Restart playback from the top">Repetir playlist</button>
         <button id="playlibrary" title="Continue from last song's position in library">Continuar da Biblioteca</button>
         <button id="randomlibrary" title="Randomly select unplayed songs from the library">Randomizar Biblioteca</button>
         <button id="randomfiltered" title="Randomly select unplayed songs from the filtered library">Randomizar Filtrados<span></span></button>
       </div>
     </div>
   </div>

   <div id="shares">
     <div class="folder sharediv">
       <input id="folderuri" class="uri" onclick="this.select()" readonly>
       <button id="folderdownload" class="download" title="Download folder" onclick="download('folder')"></button>
       <button id="foldershare" class="link" title="Copy folder link to clipboard" onclick="share('folder')"></button>
       <button id="folderwhatsapp" class="whatsapp hide" title="Share folder link via WhatsApp" onclick="shareWhatsApp('folder')"></button>
     </div>
     <div class="song sharediv">
       <input id="songuri" class="uri" onclick="this.select()" readonly>
       <button id="songdownload" class="download" title="Download song" onclick="download('song')"></button>
       <button id="songshare" class="link" title="Copy song link to clipboard" onclick="share('song')"></button>
       <button id="songwhatsapp" class="whatsapp hide" title="Share song link via WhatsApp" onclick="shareWhatsApp('song')"></button>
     </div>
     <div id="shareplaylist" class="playlist sharediv">
       <input id="playlisturi" class="uri" placeholder="&#x25BE;" list="playlistdata" onchange="fillPlaylistUri()" onclick="this.select()" onfocus="prepPlaylists('share')">
       <button id="clearuri" class="clear" title="Clear playlist field" onclick="dom.playlisturi.value = ''"></button>
       <button id="playlistshare" class="link" title="Copy playlist link to clipboard" onclick="share('playlist')"></button>
       <button id="playlistwhatsapp" class="whatsapp hide" title="Share playlist link via WhatsApp" onclick="shareWhatsApp('playlist')"></button>
       <datalist id="playlistdata"></datalist>
     </div>

     <a id="a" class="hide" target="_blank" download></a>
   </div>
 </div>
