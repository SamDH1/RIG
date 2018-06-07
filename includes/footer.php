<div class="fluid-container d-none d-sm-none d-md-block" style="height: 140px ; bottom:0;">
    <div class="row" style="margin-top:30px; margin-left: 32px">
        <div class="col-4">
            <img src="assets/logoblack.svg" style="max-width: 80px">
            <h5 style="font-size: 12px; ">RIG<br>The Ultimate Bike Building Tool</h5>
            <p style="font-size: 10px; " >© University of Worcester 2018<br>This is a Univeristy Project</p>
        </div>
        
        <div class="col-2">
            <h5>Site Navigation</h5>
            <a href="../pages/home.php">Home</a><br>
            <a href="../pages/build.php">Build</a><br>
            <a href="../pages/about.php">About</a>
        </div>
        <div class="col-2">
            <h5>Site Disclaimer</h5>
            <p>This website is part<br>of a university project<br>therefore please do<br>not contact the details</p>
        </div>
        <div class="col-2">
            <h5>Contact Us</h5>
            <p>Email: info@rig.co.uk</p>
            <p>Phone: 01234 12345</p>
        
            <p></p>
        </div>
        
        <h3>My Google Maps Demo</h3>
        <div id="map"></div>
        <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFgD5ise7ILW-ZQoXsWKRcwtn0-48AlKs&callback=initMap">
    </script>
    </div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.js"></script>
<script src="js/index.js"></script>
</body>
</html>