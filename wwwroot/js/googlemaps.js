var map;
var directionsDisplay;
var lastMarker;
var polylineOptionsDotted;
var polylineOptionsSolid;
var lineSymbol;
var viceDistrict = {lat: 41.862492, lng: -87.624035};
var viceDistrictHomewood = {lat: 41.561994, lng: -87.665026};
var soldierField = {lat: 41.862305, lng: -87.616699};
var mccormickPlace = {lat: 41.850886, lng: -87.618916};
var unitedCenter = {lat: 41.881334, lng: -87.674185};
var busStop = {lat: 41.861795, lng: -87.624019};
var rooseveltStation = {lat: 41.867436, lng: -87.626642};




$(document).ready(function () {
    $("#soldierfield").on('click', function ()
    {
	  $("a.selectedorigin").removeClass('selectedorigin');
	  $(this).addClass('selectedorigin');
	  updateMap(soldierField, 'DRIVING');
	});
	$("#mccormickplace").on('click', function ()
    {
	  $("a.selectedorigin").removeClass('selectedorigin');
	  $(this).addClass('selectedorigin');
	  updateMap(mccormickPlace, 'DRIVING');
	});
	$("#unitedcenter").on('click', function ()
    {
	  $("a.selectedorigin").removeClass('selectedorigin');
	  $(this).addClass('selectedorigin');
	  updateMap(unitedCenter, 'DRIVING');
	});
	$("#busstop").on('click', function ()
    {
	  $("a.selectedorigin").removeClass('selectedorigin');
	  $(this).addClass('selectedorigin');
	  updateMap(busStop, 'WALKING');
	});
	$("#rooseveltstation").on('click', function ()
    {
	  $("a.selectedorigin").removeClass('selectedorigin');
	  $(this).addClass('selectedorigin');
	  updateMap(rooseveltStation, 'WALKING');
	});
   $("#centerhomewood").on('click', function ()
   {
      if (lastMarker != null) {
			lastMarker.setMap(null);
		}
      document.getElementById('homewood').style = "border: 1px solid #dbae51;"
      document.getElementById('southloop').style = "border: 1px solid rgba(0,0,0,0);"
      directionsDisplay.set('directions', null);
      map.setCenter(viceDistrictHomewood);
  	   $("a.selectedorigin").removeClass('selectedorigin');
      document.getElementById('nearbyVenues').style.visibility = 'hidden';
      document.getElementById('nearbyPublicTransit').style.visibility = 'hidden';
      document.getElementById('address').innerHTML = "18027 Dixie Hwy</br>Homewood, IL 60430";
      document.getElementById('address').href = "https://www.google.com/maps/place/18027+Dixie+Hwy,+Homewood,+IL+60430/@41.5619978,-87.6672312,17z/data=!3m1!4b1!4m5!3m4!1s0x880e18668577bbe3:0xf42310113a284038!8m2!3d41.5619978!4d-87.6650425";
   });
   $("#centersouthloop").on('click', function ()
   {
      document.getElementById('southloop').style = "border: 1px solid #dbae51;"
      document.getElementById('homewood').style = "border: 1px solid rgba(0,0,0,0);"
      directionsDisplay.set('directions', null);
  	   $("a.selectedorigin").removeClass('selectedorigin');
      map.setCenter(viceDistrict);
      document.getElementById('nearbyVenues').style.visibility = 'visible';
      document.getElementById('nearbyPublicTransit').style.visibility = 'visible';
      document.getElementById('address').innerHTML = "1454 S Michigan Ave</br>Chicago, IL 60605";
      document.getElementById('address').href = "https://www.google.com/maps/place/Vice+District+Brewing+Company/@41.8624994,-87.6265913,17z/data=!3m1!4b1!4m5!3m4!1s0x880e2c8464f6131d:0x3907d1208eaa2804!8m2!3d41.8624994!4d-87.6244026";
   });
});

function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: viceDistrict,
          zoom: 15,
		  styles: [
            {elementType: 'geometry', stylers: [{color: '#011028'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#011028'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#263c3f'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#6b9a76'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#38414e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#212a37'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9ca5b3'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#746855'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#1f2835'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#f3d19c'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#2f3948'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#17263c'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#515c6d'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#17263c'}]
            }
          ]
        });

		marker = new google.maps.Marker({
			map: map,
			draggable: false,
			position: viceDistrict,
			icon: "images/mapicons/viceicon.png"
		});

      homewoodmarker = new google.maps.Marker({
         map: map,
         draggable: false,
         position: viceDistrictHomewood,
			icon: "images/mapicons/viceicon.png"
      })

		directionsDisplay = new google.maps.DirectionsRenderer({
			map: map,
			suppressMarkers: true
		});

		lineSymbol = {
			path: google.maps.SymbolPath.CIRCLE,
			fillOpacity: 1,
			scale: 3
		};

		polylineDotted = new google.maps.Polyline({
			strokeColor: '#fff',
			strokeOpacity: 0,
			icons: [{
				icon: lineSymbol,
				offset: '0',
				repeat: '15px'
			}],
		});

		polylineSolid = new google.maps.Polyline({
			strokeColor: '#fff'
		});
}



function updateMap(newOrigin, travelMode) {


		directionsDisplay.setDirections({routes: []});

		if (travelMode == 'WALKING') {
			directionsDisplay.setOptions({polylineOptions: polylineDotted});
		}
		else {
			directionsDisplay.setOptions({polylineOptions: polylineSolid});
		}

		if (lastMarker != null) {
			lastMarker.setMap(null);
		}

		var newMarker = new google.maps.Marker({
          position: newOrigin,
		  draggable: false,
          map: map
        });

		lastMarker = newMarker;


        // Set destination, origin and travel mode.
        var request = {
          destination: viceDistrict,
          origin: newOrigin,
          travelMode: travelMode
        };

        // Pass the directions request to the directions service.
        var directionsService = new google.maps.DirectionsService();
        directionsService.route(request, function(response, status) {
          if (status == 'OK') {
            // Display the route on the map.
            directionsDisplay.setDirections(response);
          }
        });
}
