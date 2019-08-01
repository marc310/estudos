<!-- START MAIN -->
<div id="main">
	<!-- START WRAPPER -->
	<div class="wrapper">

		<!-- START LEFT SIDEBAR NAV-->
		<aside id="left-sidebar-nav">
			<ul id="slide-out" class="side-nav leftside-navigation">

				<div id="options">

					<li class="user-details cyan darken-2">
						<div class="row">
							<div class="col col s4 m4 l4">
								<img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
							</div>
						</div>
					</li>

					<li class="bold"><a href="#" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Controles</a>
					</li>

					<li class="no-padding">
						<ul class="collapsible collapsible-accordion">
							<li id="control_menu" hidden>
								<div style="display: inline-block!important;">
								 <?php
								      include("parts/php/player/controls.php");
								    ?>
								</div>
							</li>

							<li>
								<a id="enqueue" title="Tocar musicas em Sequência pressione (E)" onclick="toggle(event)">S<u>e</u>quência</a>
							</li>

							<li>
								<a id="random" title="Randomize upcoming playlist songs (R)" onclick="toggle(event)"><u>R</u>andomico</a>
							</li>

							<li>
								<a id="crossfade" title="Crossfade between songs (O)" onclick="toggle(event)">Tr<u>a</u>nsição</a>
							</li>
							<!-- /*============================================================*/ -->
							<li>
								<div id="afterdiv">
									<a id="after" title="Define action after last playlist item (A)" onclick="menu(event)"><u>D</u>epois de tocar</a>
									<div id="afteroptions" onmouseleave="menu(event)" onclick="toggle(event)">
										<a id="stopplayback" title="Stop playing songs after last playlist item">Parar</a>
										<a id="repeatplaylist" title="Restart playback from the top">Repetir playlist</a>
										<a id="playlibrary" title="Continue from last song's position in library">Continuar da Biblioteca</a>
										<a id="randomlibrary" title="Randomly select unplayed songs from the library">Randomizar Biblioteca</a>
										<a id="randomfiltered" title="Randomly select unplayed songs from the filtered library">Randomizar Filtrados<span></span></a>
									</div>
								</div>
							</li>
						</ul>
					</li>


					<li class="no-padding">
						<ul class="collapsible collapsible-accordion">
							<li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-grade"></i> Playlist</a>
								<div class="collapsible-body">
									<ul>
										<li>
										<a title="Clear the playlist (C)" onclick="clearPlaylist()" >Limpar</a>	
										</li>

										<li>
											<div id="playlistsdiv">
												<a id="load" title="Add songs from online playlist (D)" onclick="menu(event)">Carrega<u>r</u></a>
												<div id="playlists" onmouseleave="menu(event)" onclick="loadPlaylistBtn(event)">
												</div>
											</div>
										</li>
										<li>
											<a id="save" title="Save playlist online (V)" onclick="prepPlaylists('save')">Sal<u>v</u>ar</a>
										</li>

										<li>
											<a id="import" title="Add songs from exported playlist (I)" onclick="importPlaylist()"><u>I</u>mportar</a>
										</li>

										<li>
											<a id="export" title="Export current playlist to file (X)" onclick="exportPlaylist()">E<u>x</u>portar</a>
										</li>

										<li>
											<a id="lock" title="Lock playlist and playback controls (L)" onclick="toggleLock()"><u>T</u>ravar</a>
										</li>
									</ul>
								</div>
							</li>


						</ul>
					</li>
					<li class="li-hover"><div class="divider"></div></li>


					<li>
						<a id="share" title="Share options (S)" onclick="toggle(event)"><u>C</u>ompartilhar</a>

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


					</li>

					<li class="li-hover"><p class="ultra-small margin more-text">Marcelo Motta</p></li>
					<li class="li-hover">
						<div class="row">
							<div class="col s12 m12 l12">
								<div class="sample-chart-wrapper">
									<div class="ct-chart ct-golden-section" id="ct2-chart"></div>
								</div>
							</div>
						</div>
					</li>
				</div>

			</ul>
			<a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light cyan"><i class="mdi-navigation-menu"></i></a>
		</aside>
		<!-- END LEFT SIDEBAR NAV-->
