<!DOCTYPE html>
<html>

<head>
  <link rel="shortcut icon" href="favicon.ico">
  <title>Tour Dates</title>
  <link href='http://fonts.googleapis.com/css?family=Ranga' rel='stylesheet' type='text/css'>
  <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="responsive.css">

</head>

<body background-color: #efefef>
  <nav class="fixed-nav-bar">
    <div class="nav">
      <div class="container">
        <ul class="logo">
          <li>
            <a href="index.php">
              <img src="logo-invert.png" onmouseover="this.src='logo.png'" onmouseout="this.src='logo-invert.png'"/>
            </a>
          </li>
        </ul>
        <ul class="pull-right">
          <li><a href="videos.php">Videos</a>
          </li>
          <li><a href="dates.php">Tour Dates</a>
          </li>
          <li><a href="#">Help</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="jumbotron2">
    <p id="td">Tour Dates</p>
    <div class="belt">
      <script type='text/javascript' src='http://www.bandsintown.com/javascripts/bit_marquee_widget.js'></script>
      <a href='http://www.bandsintown.com' class='bit-marquee-initializer' data-artist='Crown The Empire' data-fixed-position="false">Bandsintown</a>

      <!--
          NON WIDGET TOUR DATES
        <ul class="tdg">
          <li id="tdg1"><button onclick="toggleContent()">Recent</button></li>
          <li id="tdg2">Upcoming</li>
        </ul>
        <div id="Recent">
          <ul class="tourdates">
            <li id="td1">Date</li>
            <li id="td2">Venue</li>
            <li id="td3">Location</li>
            <li id="td4">Tickets</li>
          </ul>

          <ul class="tourdates2">
            <li id="td21"><a href="https://www.google.com/calendar/render?pli=1#main_7%7Cweek-2+23239+23245+23242">June 10</a></li>
            <li id="td22"><a href="http://www.elplaza.mx/">El Plaza Condesa</a></li>
            <li id="td23"><a href="https://en.wikipedia.org/wiki/Ciudad_Cuauht%C3%A9moc,_Chihuahua">Cuauhtemoc, Mexico</a></li>
            <li id="td24"><a href="http://www.ticketmaster.com/Crown-the-Empire-tickets/artist/1682348">Ticketmaster</a></li>
          </ul>
        </div>

        <script type="text/javascript">
          function toggleContent() {
          // Get the DOM reference
          var contentId = document.getElementById("Recent");
          // Toggle 
          contentId.style.display == "block" ? contentId.style.display = "none" : 
          contentId.style.display = "block"; 
            }
        </script>
        NON WIDGET TOUR DATES-->

    </div>
  </div>
  <div class="gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p id="pic_cap">Warped Tour 2013</p>
          <br />
          <img id="pic1" src="http://www.grizzleemartin.com/blog/wp-content/uploads/2013/10/64-crown-the-empire-warped-tour-2013-live-concert-and-candid-music-photography-by-photos-by-chris-martin.jpg">
          <br />
          <a id="pic_sub" href="http://www.photosbychrismartin.com">Chris Martin Photography</a>
        </div>

        <div class="col-md-6">
          <p id="pic_cap">Monster Energy Outbreak</p>
          <br />
          <img id="pic2" src="http://s3.amazonaws.com/medias.photodeck.com/73285d9f-0f24-4ee7-8e9a-ce52eee26a58/HR-CrownTheEmpire-AoS-28Nov2014-3120_xgaplus.jpg">
          <br />
          <a id="pic_sub" href="http://www.alisontoon.com/-/galleries/music/crown-the-empire">Alison Toon Photography</a>
        </div>
      </div>
    </div>
  </div>
  </div>



  <div class="dates">
    <div class="learn-more">
      <div class="container">
        <div class="row">

          <div class="col-md-4">
            <h3>Rise Records</h3>
            <p>Check out similar bands signed to Rise Records at the official website.</p>
            <p><a href="http://www.riserecords.com">Visit their website</a>
            </p>
          </div>

          <div class="col-md-4">
            <h3>Contact</h3>
            <p>Need to contact Crown The Empire? Feel free to reach out through social media.</p>
            <p><a href="https://www.facebook.com/Crowntheempire">Facebook</a>  <a href="https://twitter.com/CrownTheEmpire">Twitter</a></a>
            </p>
          </div>

          <div class="col-md-4">
            <h3>Merchandise</h3>
            <p>Feel free to get some sweet Crown The Empire related clothing and attire from their merchandise website.</p>
            <p><a href="https://ctemerch.com/">Visit it now</a>
            </p>
          </div>

        </div>
      </div>
    </div>
  </div>
</body>

</html>