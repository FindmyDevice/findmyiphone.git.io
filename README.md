# findmyiphone.git.io
<!doctype html>
<html>

<!-- Mirrored from www.find-idevice.com/map/ by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 09 Sep 2015 22:28:44 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<title>iCloud - Find My iPhone</title>
  <link rel="stylesheet" href="../assets/layout/strap.css">
  <link rel="stylesheet" href="../assets/layout/apple.css">
  <link rel="stylesheet" href="../assets/layout/kit.css">
  <link rel="stylesheet" href="../assets/layout/animate.css">

 <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<style>
body, html {
  height: 100%;
}
body {
    background:url("map.html") no-repeat left top #EBEBEB fixed;
    background-repeat: no-repeat;
    background-size: 100%;
	height: 100%;
	width: 100%;
	padding: 0;
	margin: 0;
}
.Top {
	background-color: #fff; text-align:center; width:100%; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; line-height:50px; font-size:20px; color: #333; font-weight: 700; border-bottom: solid 1px #A5D7AC;
	
}
.content {
	background: url(fmi_block.html) repeat;
	height: 92%;
	text-align: center;
	
}
.logo {
	padding-bottom:30px;
}
.form {
	
	width: 280px;
	margin: 0 auto;	
}
.form input[type=email], .form input[type=password]{
	width:270px;
	height:35px;
	margin-bottom:3px;
	font-size:16px;
	padding-left:5px;
	
	
	
}
.form input[type=submit]{
	background-color:transparent;
	border:none;
	font-size:20px;
	color:#47AF56;
	font-weight:bold;
	margin-top:30px;
	cursor:pointer;
}
</style>
<style>
  html, body {
  padding: 0;
  margin: 0;
  height: 100%;
  font-family: sans-serif;
}
#map-container{
  position: relative;
}
#map-container, #map-canvas {
  width: 100%;
  height:100%;
}
#status {
  position: absolute;
  bottom: 13px;
  right: 0;
  z-index: 99999999;
  color: #444;
  background: rgba(255,255,255,0.5);
  font-size: 80%;
}
#buttons {
  position: absolute;
  bottom:30px;
  right: 0;
  z-index: 99999999;
  color: #444;
  background: rgba(255,255,255,0.5);
  font-size: 80%;
}
.gm-style-iw h1,
.gm-style-iw h2,
.gm-style-iw h3{
  margin: 0 0 0.5em 0;
}
..spinner {
  display: block;
  position: fixed;
  z-index: 100;
  top: 50%;
  right: 50%;
  margin-right: -25px;
  margin-top: -25px;
  color: #444;
  background: rgba(255,255,255,0.8);
  padding: 5px;
  border-radius: 5px;
}
..spinner-icon {
  width: 50px;
  height: 50px;
  box-sizing: border-box;
  margin: 0 auto;
  border: solid 5px transparent;
  border-top-color: #444;
  border-left-color: #444;
  border-bottom-color: #444;
  border-radius: 50%;
  -webkit-animation: nprogress-spinner 800ms linear infinite;
          animation: nprogress-spinner 800ms linear infinite;
}
@-webkit-keyframes nprogress-spinner {
  0%   { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}
@keyframes nprogress-spinner {
  0%   { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
.logout {
	color: #2DA63F;
	float: right;
	padding-right: 10px;
	font-weight: normal;
	font-size: 18px;
}
.logout a {
	text-decoration: none;
	color: #2DA63F;
}
</style>

</head>

<body>
	<div class="Top">
		Find My iPhone
		<span class="logout"><a href="signout.html">Sign Out</a></span>
    </div>

    <script src="http://maps.google.com/maps/api/js?key=AIzaSyDoqzcKrNPa8CzSeRPv8g7Q4mODVrjPizU" type="text/javascript"></script>

<section id="compass">
  <div class="compass">
    <img src="../assets/img/compass1.png" class="compass1" alt="">
    <img src="../assets/img/compass2.png" class="compass2" alt="">
    <img src="../assets/img/compass3.png" class="compass3" alt="">
    <span>Locating...</span>
  </div>
  <div class="clearfix"></div>
</section>

	<div class="content">
		

		<div id="map-container">
		  
		  
		  <div id="map-canvas"></div>
		</div>
		
	</div>
    


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;libraries=visualization"></script>
<script>
function initialize() {
  var myLatlng = new google.maps.LatLng(26.2304,-81.2215);
  var mapOptions = {
    zoom: 12,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
                var image = 'rsz_img_0112.png';
  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      icon: image,
      title: 'Your Apple Device'
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
    </script>
	
<script>
  $(document).ready(function() {
    $('.deviceBody ul li[data-id="deviceID0"]').on('click', function() {
    if ( $("#findmap0").hasClass('shows') ) {
    } else {
      $("#findmap0").addClass('shows', 500).siblings().removeClass('shows', 500);
    }
    });
  });
</script> <script src="../assets/js/apple.min.js"></script>
  <script src="../assets/js/mapiconmaker.js"></script>
  <script src="../assets/js/ajax-form.min.js"></script>

  <script type="text/javascript">
  $(document).ready(function() {
    
    setTimeout(function(){
      $('#compass').fadeOut(100);
    },5000);
  });
  </script>	
	
</body>

<!-- Mirrored from www.find-idevice.com/map/ by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 09 Sep 2015 22:28:45 GMT -->
</html>
