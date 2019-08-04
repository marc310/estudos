<!-- CARD opções e playlist -->
  <div class="row center" id="opcoes" style="display: none;">
    <?php
    include("parts/php/options.php");
    ?>
  </div> 

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////////////////////////// -->



<!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <footer class="page-footer">
        
        <div class="footer-copyright">
            <div class="container">
                Copyright © 2019 <a class="grey-text text-lighten-4" href="http://marcelomotta.com" target="_blank">Marcelo Motta</a> <!-- Todos os direitos Reservados. -->
                <span class="right"> Desenvolvido por <a class="grey-text text-lighten-4" href="http://marcelomotta.com/">Marcelo Motta</a></span>
            </div>
        </div>
    </footer>



<!-- ================================================
Scripts
================================================ -->

<!-- jQuery Library -->
<script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
<!--materialize js-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<!--scrollbar-->
<script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>


<!-- chartist -->
<!-- <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script> -->

<!-- chartjs -->
<!-- <script type="text/javascript" src="js/plugins/chartjs/chart.min.js"></script>
<script type="text/javascript" src="js/plugins/chartjs/chart-script.js"></script> -->

<!-- sparkline -->
<script type="text/javascript" src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="js/plugins/sparkline/sparkline-script.js"></script>

<!-- google map api -->
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script> -->

<!--jvectormap-->
<script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script type="text/javascript" src="js/plugins/jvectormap/vectormap-script.js"></script>


<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="js/plugins.min.js"></script>
<!--custom-script.js - Add your own theme custom JS-->
<script type="text/javascript" src="js/custom-script.js"></script>
<!-- Toast Notification -->
<script type="text/javascript">
// // Toast Notification
// $(window).load(function() {
//     setTimeout(function() {
//         Materialize.toast('<span>Hiya! I am a toast.</span>', 1500);
//     }, 1500);
//     setTimeout(function() {
//         Materialize.toast('<span>You can swipe me too!</span>', 3000);
//     }, 5000);
//     setTimeout(function() {
//         Materialize.toast('<span>You have new order.</span><a class="btn-flat yellow-text" href="#">Read<a>', 3000);
//     }, 15000);
// });
//
//
// $(function() {
//   // Google Maps
//   $('#map-canvas').addClass('loading');
//   var latlng = new google.maps.LatLng(40.6700, -73.9400); // Set your Lat. Log. New York
//   var settings = {
//       zoom: 10,
//       center: latlng,
//       mapTypeId: google.maps.MapTypeId.ROADMAP,
//       mapTypeControl: false,
//       scrollwheel: false,
//       draggable: true,
//       styles: [{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e0efef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#1900ff"},{"color":"#c0e8e8"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":700}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#7dcdcd"}]}],
//       mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
//       navigationControl: false,
//       navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
//   };
//   var map = new google.maps.Map(document.getElementById("map-canvas"), settings);
//
//   google.maps.event.addDomListener(window, "resize", function() {
//       var center = map.getCenter();
//       google.maps.event.trigger(map, "resize");
//       map.setCenter(center);
//       $('#map-canvas').removeClass('loading');
//   });
//
//   var contentString =
//       '<div id="info-window">'+
//       '<p>18 McLuice Road, Vellyon Hills,<br /> New York, NY 10010<br /><a href="https://plus.google.com/102896039836143247306/about?gl=za&hl=en" target="_blank">Get directions</a></p>'+
//       '</div>';
//   var infowindow = new google.maps.InfoWindow({
//       content: contentString
//   });
//
//   var companyImage = new google.maps.MarkerImage('images/map-marker.png',
//       new google.maps.Size(36,62),// Width and height of the marker
//       new google.maps.Point(0,0),
//       new google.maps.Point(18,52)// Position of the marker
//   );
//
//   var companyPos = new google.maps.LatLng(40.6700, -73.9400);
//
//   var companyMarker = new google.maps.Marker({
//       position: companyPos,
//       map: map,
//       icon: companyImage,
//       title:"Shapeshift Interactive",
//       zIndex: 3});
//
//   google.maps.event.addListener(companyMarker, 'click', function() {
//       infowindow.open(map,companyMarker);
//       pageView('http://demo.geekslabs.com/#address');
//   });
// });
</script>
</body>


<!-- Mirrored from demo.geekslabs.com/materialize-v1.0/layout-fullscreen.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Dec 2018 23:47:29 GMT -->
</html>
