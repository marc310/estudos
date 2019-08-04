<!DOCTYPE html>
<html class="splash">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145014090-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-145014090-1');
</script>



	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="parts/theme/css/music.css" type="text/css" rel="stylesheet"/>
	<!-- <link href="parts/theme/css/musictheme.css" type="text/css" rel="stylesheet"/> -->
	<link href="parts/theme/imgs/music.png" type="image/png" rel="shortcut icon">
	<script src="music.js"></script>

		<!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS for full screen (Layout-2)-->
    <link href="css/layouts/style-fullscreen.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">

	<title id="title">PlayCodeX :: Music Player ::</title>
</head>

<body onload="init()">
	<span id="splash"></span>

	<!-- Start Page Loading -->
	<div id="loader-wrapper">
			<div id="loader"></div>
			<div class="loader-section section-left"></div>
			<div class="loader-section section-right"></div>
	</div>
	<!-- End Page Loading -->

	<!-- //////////////////////////////////////////////////////////////////////////// -->

	<!-- START HEADER -->
	<header id="header" class="page-topbar">
			<!-- start header nav-->
			<div class="navbar-fixed">
					<nav class="navbar-color">
							<div class="nav-wrapper">
									<ul class="left">
										<li><h1 class="logo-wrapper"><a href="#" class="brand-logo darken-1"><img src="images/logo.png" alt="CodeX logo"></a> <span class="logo-text">Marcelo Motta</span></h1></li>
									</ul>

									<div class="header-search-wrapper hide-on-med-and-down">
											<i class="mdi-action-search"></i>
											<input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize"/>
									</div>

									<ul class="right hide-on-med-and-down">
											<li><a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button"  data-activates="translation-dropdown"><img src="images/flag-icons/United-States.png" alt="USA" /></a>
											</li>
											<li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
											</li>
											<li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-social-notifications"><small class="notification-badge">5</small></i>

											</a>
											</li>
											<li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
											</li>
									</ul>
									<!-- translation-button -->
									<!-- <ul id="translation-dropdown" class="dropdown-content">
										<li>
											<a href="#!"><img src="images/flag-icons/United-States.png" alt="English" />  <span class="language-select">English</span></a>
										</li>
										<li>
											<a href="#!"><img src="images/flag-icons/France.png" alt="French" />  <span class="language-select">French</span></a>
										</li>
										<li>
											<a href="#!"><img src="images/flag-icons/China.png" alt="Chinese" />  <span class="language-select">Chinese</span></a>
										</li>
										<li>
											<a href="#!"><img src="images/flag-icons/Germany.png" alt="German" />  <span class="language-select">German</span></a>
										</li>

									</ul> -->
									<!-- notifications-dropdown -->
									<ul id="notifications-dropdown" class="dropdown-content">
										<li>
											<h5>NOTIFICATIONS <span class="new badge">5</span></h5>
										</li>
										<li class="divider"></li>
										<li>
											<a href="#!"><i class="mdi-action-add-shopping-cart"></i> A new order has been placed!</a>
											<time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
										</li>
										<li>
											<a href="#!"><i class="mdi-action-stars"></i> Completed the task</a>
											<time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
										</li>
										<li>
											<a href="#!"><i class="mdi-action-settings"></i> Settings updated</a>
											<time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
										</li>
										<li>
											<a href="#!"><i class="mdi-editor-insert-invitation"></i> Director meeting started</a>
											<time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
										</li>
										<li>
											<a href="#!"><i class="mdi-action-trending-up"></i> Generate monthly report</a>
											<time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
										</li>
									</ul>
							</div>
					</nav>
			</div>
			<!-- end header nav-->
	</header>
	<!-- END HEADER -->
