<html>
<head>
    <title>Homepage Clerk Page</title>
    <link rel="stylesheet" type="text/css" href="css/userstyle.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvYX97g3Oa3kass6osiGPouAqSL_yg5T4&callback=initMap" async defer></script>
</head>

<body>
   

<aside>
    <nav>
        <ul>
            
            <li>
                <a href = "display-owner.php">PALM OWNERS</a>   
            </li>
            <li>
                <a href = "display-palm.php">PLANTATIONS</a>
            </li>
            
            <li>
                <a href = "display-weight.php">WEIGHT</a>
            </li>
            <li>
                <a href = "display-voucher.php">VOUCHER</a>
            </li>
             <li>
                <a href = "https://utem.maps.arcgis.com/apps/dashboards/148b9199d18f4907b1979878b1303c35">LOCATION</a> 
            </li>
            <!-- <li>
                <p class="GIS-container" id="mapContainer">Location</p>
                <div id="popupMap" style="display: none; width: 400px; height: 400px;"></div>
            </li> -->
            <li>
                <a href = "logout.php">LOGOUT</a>
            </li>
        </ul>
    </nav>
</aside>

<!-- <style >
.GIS-container {
    padding: 5px;
    color: #fff;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);
    background-color: rgba( 0, 0, 0, 0.3);
    flex: 0 0 calc(60% - 10px);
    text-align: center;
    white-space: nowrap;
    cursor: pointer;
}

.GIS-container p{
    color: #fff;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);
    background-color: rgb(0, 64, 145);
    padding: 2px;
}

.location-img {
    border-radius: 5px;
    border: 2px solid rgb(0, 64, 145);
}

#popupMap {
    position: absolute;
    top: 50%;
    left: 50%;
    /* transform: translate(-50%, -50%); */
    width: 400px;
    height: 400px;
    background-color: #fff;
    border: 5px solid rgb(0, 64, 145);
  }
  </style>
<script>
function initMap() {
    var map = new google.maps.Map(document.getElementById('popupMap'), {
      center: {lat: 2.310104, lng: 102.318550},
      zoom: 20
    });

    var mapContainer = document.getElementById('mapContainer');
    var popupMap = document.getElementById('popupMap');
    var locationImg = document.querySelector('.location-img');

    mapContainer.addEventListener('click', function() {
      popupMap.style.display = 'block';
    });

    locationImg.addEventListener('click', function(event) {
      event.stopPropagation(); // Prevent click event from propagating to mapContainer
      popupMap.style.display = 'block';
    });

    document.addEventListener('click', function(event) {
      if (!popupMap.contains(event.target) && event.target.id !== 'mapContainer') {
        popupMap.style.display = 'none';
      }
    });

    map.addListener('click', function(event) {
      var lat = event.latLng.lat();
      var lng = event.latLng.lng();
      var googleMapLink = 'https://www.google.com/maps?q=' + lat + ',' + lng;
      window.location.href = googleMapLink;
    });
  }
</script> -->
</body>

</html>