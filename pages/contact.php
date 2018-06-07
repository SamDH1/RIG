<div>
    <div style="text-align: center; margin-top: 16px;">
        <h2>Contact RIG</h2>
        <span class="spacer"></span>
        <p>Get in touch with us!</p>
    </div>
    <div id="pageContainer" class="container-fluid">
        <h3>Phone Number</h3>
        <p>01234 567890</p>
        <div class="spacer"></div>
        <h3>E-mail address</h3>
        <p>infor@rig.co.uk</p>
        <div class="spacer"></div>
        <h3>Our Address</h3>
        <p>Nyth Bran,<br>A location,<br>Location 3<br>CF48 4hl</p>
        <div class="spacer"></div>
        <div id="map"></div>
        <script>
        // GOOGLE MAPS API CODE FROM GOOGLE DOCUMENTATION https://developers.google.com/maps/documentation/javascript/adding-a-google-map
      function initMap() {
        var uluru = {lat: 51.709, lng: -3.354};
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
        <!-- END OF THE GOOGLE MAPS API CODE -->
        <div class="spacer"></div>
        
    </div>
</div>