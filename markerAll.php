<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Ctfastrak bus route</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>

  <body>
    <div id="map"></div>

    <script>
     /* var customLabel = {
       101: {
          label: '101'
        },
       140: {
          label: '140'
        },
	   102: {
          label: '102'
        }
      };*/

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng( 41.741192, -72.716437), 
          zoom: 11
        });
        var infoWindow = new google.maps.InfoWindow;
            
			// read data from XML file
          
          downloadUrl('/ctfastrak/createXMLall.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              //var type = markerElem.getAttribute('type');
			  // var rsn = markerElem.getAttribute('rsn');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
			  
			  
			  var strong = document.createElement('strong');
              strong.textContent = "Stop Id:"+id
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

			  var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
			  infowincontent.appendChild(document.createElement('br'));
			   
			  
			  var id = document.createElement('id');
              id.textContent =name
              infowincontent.appendChild(id);             
             
               
			  var icon="/ctfastrak/stop2.png"; 
              var marker = new google.maps.Marker({
                map: map,
				icon:icon,
                position: point,
               // label: "s"
				 
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
		  
		  
        }

     

      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      
	  
	 
	 function doNothing() {} 
	  
	  
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBezkqLyMpXAF9dBb4X5rZeQkyF8Y5_Te4&callback=initMap">
    </script>
  </body>
</html>