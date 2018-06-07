<div>
    <div style="text-align: center; margin-top: 16px;">
        <h2>{$title}</h2>
        <span class="spacer"></span>
        <p>{$sub}</p>
    </div>
    <div id="pageContainer" class="container-fluid">
        <h3>You Have a Plan?</h3>
        <p>Yup! We love building bikes. It's a great way to understand how a it all works, and you get to put in exactly what you want from the bike. Perhaps you want to get shorter travel suspension to climb better, but you want that dream frame that doesn't come with that kind of setup... Or maybe you just want to swap out that drivetrain from your current rig, but have no idea of what will fit.<br><br><b>This is what we wanna help out with.</b></p>
        <div class="spacer"></div>
        <h3>What Do You Do?</h3>
        <p>We build with bikes, but also with code! <b>RIG</b> is an application that provides all of the fun parts of building and designing a bike, and we have done all of the nitty gritty work for you. Head on over to the build section, and you will find an array of frames, which we will add on to, along with all of the components that we have already worked out to sit nicely together. Once you are finished, hit Save and return to your build whenever you want. </p>
        <div class="spacer"></div>
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
        <div class="spacer"></div>
        
        
    </div>
</div>