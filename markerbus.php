<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Ctfastrak Route Maps</title>
    <style>
    
	#navigation
{
    height: 40px;
    border: 3px solid #E3E3E3;
    margin-top: 1px;
   text-shadow: 0.1em 0.1em #333;
   background-color:#4e9d3e;
     
}

#nav
{
    list-style: none;
}

#nav ul
{
    margin: 0;
    padding: 0;
    width: auto;
    display: none;
}

#nav li
{
    font-size: 21px;
    float:right;
    position: fix;
    width: 220px;
    height: 40px;
	 
}

#nav a:link, nav a:active, nav a:visited
{
    display: block;
    color: #fff;
	text-align: left;   
    text-decoration: none;
}

#nav a:hover
{
    color: Black;
}



	 #left-panel {
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-right: 10px;
      }

      #left-panel select, #left-panel input {
        font-size: 15px;
      }

      #left-panel select {
        width: 100%;
      }

      #left-panel i {
        font-size: 12px;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 90%;
        float: right;
        width: 100%;
         
      }
      #left-panel {
        margin: 20px;
        border-width: 2px;
        width: 20%;
        height: 400px;
        float: left;
        text-align: left;
        padding-top: 0;
      }
      #directions-panel {
        margin-top: 10px;
        background-color: #FFEE77;
        padding: 10px;
        overflow: scroll;
        height: 174px;
      }
     
    </style>
  </head>
  
  <body>
   <nav id="navigation">
                <ul id="nav">
				<li><a href="index.php">Home</a></li>
                <li><a href="routemap.php">Service Map</a></li>                  
	            	 <li><a href="ptest.php">Route & Stops</a></li>
		        <li><a href="rlist.php">Real-Time Stop Info</a></li>		    
				<li><a href="markerbus.php">Real-Time Bus Info</a></li>
		   	     <li><a href="planner.php">Trip Planner</a></li>	   
				            
			   </ul>
            </nav>
  
    <div id="map"></div>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script>
   
   
   
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: new google.maps.LatLng( 41.741192, -72.716437),
          zoom: 12
        });
      
	 //101
        var stops101 = [
          {lat: 41.765179, lng: -72.673431},
		  {lat: 41.767319, lng: -72.676261},
          {lat: 41.767715, lng: -72.680275},
		  {lat: 41.764210, lng: -72.695061},
		  {lat: 41.757088, lng: -72.703903},
		  {lat: 41.750462, lng: -72.709076},
		  {lat: 41.741192, lng: -72.716437},		  
		  {lat: 41.730511, lng: -72.724861},
		  {lat: 41.716209, lng: -72.736412},
		  {lat: 41.695854, lng: -72.753853},
		  {lat: 41.687618, lng: -72.758667},
		  {lat: 41.671501, lng: -72.766281},
		  {lat: 41.668674, lng: -72.780342}, 
        ];
        var route101 = new google.maps.Polyline({
          path:stops101,
          geodesic: true,
          strokeColor: '#FF0000',
          strokeOpacity: 1.0,
          strokeWeight: 4
        });

        route101.setMap(map);
		
		var infowindow = new google.maps.InfoWindow({
             content: "101"});
             infowindow.setPosition(  {lat: 41.767319, lng: -72.676261},);
			 infowindow.open(map);
	//102
	    var stops102 = [
            
{lat:41.674648 ,  lng:-72.946381},	
{lat:41.671078 ,  lng:-72.943062},	
{lat:41.668381 ,  lng:-72.943344},	
{lat:41.667908 ,  lng:-72.939438},	
{lat:41.668213 ,  lng:-72.938133},	
{lat:41.668629 ,  lng:-72.933945},	
{lat:41.668327 ,  lng:-72.931297},	
{lat:41.668053 ,  lng:-72.929001},	
{lat:41.666431 ,  lng:-72.922752},	
{lat:41.666969 ,  lng:-72.920372},	
{lat:41.668392 ,  lng:-72.914261},	
{lat:41.668877 ,  lng:-72.910576},	
{lat:41.669727 ,  lng:-72.878624},	
{lat:41.669926 ,  lng:-72.875275},	
{lat:41.670132 ,  lng:-72.871979},	
{lat:41.670765 ,  lng:-72.869041},	
{lat:41.671482 ,  lng:-72.866081},	
{lat:41.672279 ,  lng:-72.863937},	
{lat:41.672771 ,  lng:-72.862633},	
{lat:41.675041 ,  lng:-72.856216},	
{lat:41.675934 ,  lng:-72.853241},	
{lat:41.676750 ,  lng:-72.850349},	
{lat:41.677589 ,  lng:-72.845840},	
{lat:41.676556 ,  lng:-72.841690},	
{lat:41.675652 ,  lng:-72.840332},	
{lat:41.672596 ,  lng:-72.837234},
{lat:41.668617 ,  lng:-72.778946},
{lat:41.671482 ,  lng:-72.766228},
{lat:41.687939 ,  lng:-72.758110}, 
{lat:41.696362 ,  lng:-72.753479}, 
{lat:41.716415 ,  lng:-72.736084}, 
{lat:41.730473 ,  lng:-72.724792}, 
{lat:41.741711 ,  lng:-72.716476}, 
{lat:41.750416 ,  lng:-72.708984}, 
{lat:41.757095 ,  lng:-72.703674}, 
{lat:41.764683 ,  lng:-72.694962}, 
{lat:41.766747 ,  lng:-72.693626}, 
{lat:41.767948 ,  lng:-72.688309}, 
{lat:41.768044 ,  lng:-72.684273}, 
{lat:41.767635 ,  lng:-72.681305}, 
{lat:41.765022 ,  lng:-72.676598}, 
{lat:41.765179 ,  lng:-72.673431}, 

        ];
        var route102 = new google.maps.Polyline({
          path:stops102,
          geodesic: true,
          strokeColor: '#00E100',
          strokeOpacity: 1.0,
          strokeWeight: 4
        });

        route102.setMap(map);
		
		var infowindow = new google.maps.InfoWindow({
             content: "102"});
             infowindow.setPosition({lat:41.675041 ,  lng:-72.856216},	);
			 infowindow.open(map);
			 
	//121
	 
	    var stops121 = [         
{lat:41.734146,   lng:-72.789665}, 
{lat:41.733727,   lng:-72.793724}, 
{lat:41.725746,   lng:-72.791306}, 
{lat:41.722260,   lng:-72.789223}, 
{lat:41.696148,   lng:-72.753922}, 
{lat:41.716415,   lng:-72.736084}, 
{lat:41.730473,   lng:-72.724792}, 
{lat:41.741711,   lng:-72.716476}, 
{lat:41.750416,   lng:-72.708984}, 
{lat:41.757095,   lng:-72.703674}, 
{lat:41.764683,   lng:-72.694962}, 
{lat:41.763386,   lng:-72.692520}, 
{lat:41.763622,   lng:-72.686943},
{lat:41.762882,   lng:-72.683037}, 
{lat:41.762371,   lng:-72.681107}, 
{lat:41.761421,   lng:-72.677505}, 
{lat:41.762444,   lng:-72.674255}, 
{lat:41.765179,   lng:-72.673431}, 
{lat:41.768295,   lng:-72.670921}, 
{lat:41.769333,   lng:-72.656479}, 
{lat:41.769329,   lng:-72.649269}, 
{lat:41.769028,   lng:-72.644180}, 
{lat:41.766850,   lng:-72.645470}, 
{lat:41.760384,   lng:-72.643776}, 
{lat:41.761665,   lng:-72.634583},   
{lat:41.762772,   lng:-72.626022}, 
{lat:41.763214,   lng:-72.617638}, 
{lat:41.764496,   lng:-72.608589}, 
{lat:41.765324,   lng:-72.602539}, 
{lat:41.765808,   lng:-72.599319}, 
{lat:41.765957,   lng:-72.591614}, 
{lat:41.765472,   lng:-72.580009}, 
{lat:41.767418,   lng:-72.574417}, 
{lat:41.766773,   lng:-72.570274}, 
{lat:41.761139,   lng:-72.563423}, 

 
        ];
        var route121 = new google.maps.Polyline({
          path:stops121,
          geodesic: true,
          strokeColor: '#0000FF',
          strokeOpacity: 1.0,
          strokeWeight: 2
        });

        route121.setMap(map);
		
		var infowindow = new google.maps.InfoWindow({
             content: "121"});
             infowindow.setPosition({lat:41.767418,   lng:-72.574417},  );
			 infowindow.open(map);
	
	
	//128
	var stops128 = [ 	
          {lat:41.668537, lng:  -72.779732},	 	
          {lat:41.670761, lng:	-72.771843},	 	
          {lat:41.671993, lng:	-72.775352},	 	
          {lat:41.674229, lng:	-72.772690},	 	
          {lat:41.678383, lng:	-72.768814},	 	
          {lat:41.681126, lng:	-72.768196},	 	
          {lat:41.683151, lng:	-72.767540},	 	
          {lat:41.687767, lng:	-72.770111},	 	
          {lat:41.690323, lng:	-72.770691},	 	
          {lat:41.692699, lng:	-72.771317},	 
          {lat:41.695713, lng:	-72.772263},	 
          {lat:41.697117, lng:	-72.773811},	 
          {lat:41.698994, lng:	-72.774216},	 	
          {lat:41.700798, lng:	-72.774544},	 	
          {lat:41.704048, lng:	-72.771530},	 
          {lat:41.706444, lng:	-72.767754},
          {lat:41.710007, lng:	-72.765785},
          {lat:41.716244, lng:	-72.762947},	 
          {lat:41.719166, lng:	-72.761749},	 
          {lat:41.720558, lng:	-72.761154},	 
          {lat:41.722893, lng:	-72.760231},	 
          {lat:41.724922, lng:	-72.761452},	 
          {lat:41.725658, lng:	-72.757675},	 
          {lat:41.729553, lng:  -72.752197},	  
   
          {lat:41.730331, lng:	-72.749313},	
          {lat:41.730721, lng:	-72.747665},	
          {lat:41.731380, lng:	-72.744881},		
          {lat:41.731560, lng:	-72.743073},	
          {lat:41.731861, lng:	-72.740189},	
          {lat:41.732170, lng:	-72.737503},	
          {lat:41.732502, lng:	-72.734695},		
          {lat:41.731792, lng:	-72.729851},	
          {lat:41.731617, lng:	-72.724648},	
          {lat:41.735001, lng:	-72.722473},	
          {lat:41.736691, lng:	-72.721222},		
          {lat:41.741711, lng:	-72.716476},		
          {lat:41.750416, lng:	-72.708984},		
          {lat:41.757095, lng:	-72.703674},	
          {lat:41.764324, lng:  -72.694603},	
          {lat:41.767635, lng:	-72.681305},	
          {lat:41.765022, lng:	-72.676598},	
          {lat:41.765179, lng:	-72.673431},	
 
        ];
        var route128 = new google.maps.Polyline({
          path:stops128,
          geodesic: true,
          strokeColor: '#950095',
          strokeOpacity: 1.0,
          strokeWeight: 2
        });

        route128.setMap(map);
		
		var infowindow = new google.maps.InfoWindow({
             content: "128"});
             infowindow.setPosition(  {lat:41.731792, lng:	-72.729851},	  );
             infowindow.open(map);	
				 
		
	//140
        var stops140 = [
          {lat: 41.696148, lng: -72.753922},
          {lat: 41.687771, lng: -72.758759},
		  {lat: 41.688698, lng: -72.759895},
		  {lat: 41.691319, lng: -72.761459},
		  {lat: 41.690380, lng: -72.765610},
		  {lat: 41.688568, lng: -72.769493},		  
		  {lat: 41.690323, lng: -72.770691},
		  {lat: 41.692314, lng: -72.770821},
		  {lat: 41.693726, lng: -72.767921},
		  {lat: 41.695045, lng: -72.764771},
		  {lat: 41.698414, lng: -72.760033},
		  {lat: 41.696148, lng: -72.753922},
        ];
        var route140 = new google.maps.Polyline({
          path:stops140,
          geodesic: true,
          strokeColor: '#0000FF',
          strokeOpacity: 1.0,
          strokeWeight: 4
        });

        route140.setMap(map);
		
		var infowindow = new google.maps.InfoWindow({
             content: "140"});
             infowindow.setPosition( {lat: 41.693726, lng: -72.767921},);
             infowindow.open(map);	
		
		/*for (i=0;i<stops140.length;i++){ 
		var data = stops140[i];
        stops140[i].latLng = new google.maps.LatLng(data.lat, data.lng);
        var marker = new google.maps.Marker({
          position: stops140[i].latLng,
          map: map,})
		   marker.setMap(map);
		};	*/			
				
		
		//144
        var stops144 = [
{lat:41.723999,   lng:-72.667450}, 
{lat:41.723839,   lng:-72.668488}, 
{lat:41.723618,   lng:-72.669785}, 
{lat:41.723095,   lng:-72.673393}, 
{lat:41.722607,   lng:-72.676994}, 
{lat:41.722252,   lng:-72.679375}, 
{lat:41.721931,   lng:-72.681618},
{lat:41.721508,   lng:-72.684715}, 
{lat:41.721222,   lng:-72.686729}, 
{lat:41.721039,   lng:-72.687927}, 
{lat:41.720257,   lng:-72.693390}, 
{lat:41.703384,   lng:-72.703468}, 
{lat:41.700848,   lng:-72.705940}, 
{lat:41.697544,   lng:-72.719322}, 
{lat:41.695633,   lng:-72.718994}, 
{lat:41.695366,   lng:-72.722008}, 
{lat:41.697590,   lng:-72.728737}, 
{lat:41.695385,   lng:-72.745125}, 
{lat:41.693962,   lng:-72.756012}, 
{lat:41.696148,   lng:-72.753922}, 
{lat:41.687771,   lng:-72.758759}, 
{lat:41.688698,   lng:-72.759895}, 
{lat:41.691319,   lng:-72.761459}, 
{lat:41.690380,   lng:-72.765610}, 
{lat:41.688568,   lng:-72.769493}, 
{lat:41.690323,   lng:-72.770691}, 
{lat:41.692699,   lng:-72.771317}, 
{lat:41.695713,   lng:-72.772263}, 
{lat:41.697117,   lng:-72.773811}, 
{lat:41.698994,   lng:-72.774216}, 
{lat:41.700798,   lng:-72.774544}, 
{lat:41.704048,   lng:-72.771530}, 
{lat:41.706444,   lng:-72.767754}, 
{lat:41.709946,   lng:-72.767418}, 
{lat:41.710857,   lng:-72.768959}, 
{lat:41.712360,   lng:-72.768509}, 
{lat:41.713238,   lng:-72.770622}, 
{lat:41.712254,   lng:-72.774757}, 
{lat:41.710835,   lng:-72.775284}, 
{lat:41.710724,   lng:-72.772446}, 
{lat:41.710526,   lng:-72.769188}, 
{lat:41.710007,   lng:-72.765785}, 
{lat:41.716244,   lng:-72.762947}, 
{lat:41.719166,   lng:-72.761749}, 
{lat:41.720558,   lng:-72.761154}, 
{lat:41.722893,   lng:-72.760231}, 
{lat:41.724922,   lng:-72.761452},   
        ];
        var route144 = new google.maps.Polyline({
          path:stops144,
          geodesic: true,
          strokeColor: '#804040',
          strokeOpacity: 1.0,
          strokeWeight: 3
        });

        route144.setMap(map);
		
		var infowindow = new google.maps.InfoWindow({
             content: "144"});
             infowindow.setPosition( {lat:41.723839,   lng:-72.668488}, );
             infowindow.open(map);	
	
         //153
        var stops153 = [        
{lat:41.739746,   lng:-72.720261}, 
{lat:41.742172,   lng:-72.716827}, 
{lat:41.741215,   lng:-72.711685}, 
{lat:41.742443,   lng:-72.717262}, 
{lat:41.742905,   lng:-72.726662}, 
{lat:41.744659,   lng:-72.729782}, 
{lat:41.746582,   lng:-72.729538}, 
{lat:41.748512,   lng:-72.729286}, 
{lat:41.750450,   lng:-72.729126},
{lat:41.752731,   lng:-72.729012}, 
{lat:41.754215,   lng:-72.729057}, 
{lat:41.755241,   lng:-72.729187}, 
{lat:41.755707,   lng:-72.730156}, 
{lat:41.755272,   lng:-72.732483}, 
{lat:41.754833,   lng:-72.734909}, 
{lat:41.754219,   lng:-72.738060}, 
{lat:41.753525,   lng:-72.741592}, 
{lat:41.753216,   lng:-72.743202}, 
{lat:41.754063,   lng:-72.743752}, 
{lat:41.756001,   lng:-72.743698}, 
{lat:41.759262,   lng:-72.742172}, 
{lat:41.764053,   lng:-72.741882}, 
{lat:41.765896,   lng:-72.742401}, 
{lat:41.767746,   lng:-72.742645}, 
{lat:41.769436,   lng:-72.743004}, 
{lat:41.771759,   lng:-72.744118}, 
{lat:41.773102,   lng:-72.744804}, 
{lat:41.775185,   lng:-72.745155}, 
{lat:41.777203,   lng:-72.745445}, 
{lat:41.780930,   lng:-72.746262}, 
{lat:41.782825,   lng:-72.746529}, 
{lat:41.784630,   lng:-72.746735}, 
{lat:41.788002,   lng:-72.747780}, 
{lat:41.789539,   lng:-72.747223}, 
{lat:41.790791,   lng:-72.746780},
{lat:41.793022,   lng:-72.746513}, 
{lat:41.795658,   lng:-72.747292}, 
{lat:41.797268,   lng:-72.747696}, 
{lat:41.799576,   lng:-72.748993}, 
{lat:41.800606,   lng:-72.749611}, 
{lat:41.801811,   lng:-72.750153}, 
{lat:41.803314,   lng:-72.750633}, 
{lat:41.813473,   lng:-72.745872}, 
{lat:41.808529,   lng:-72.745506}, 
{lat:41.801659,   lng:-72.737061}, 
{lat:41.794689,   lng:-72.716919},
{lat:41.796677,   lng:-72.720512}, 
{lat:41.801811,   lng:-72.725327}, 
{lat:41.804440,   lng:-72.727554}, 
{lat:41.806362,   lng:-72.729240}, 
{lat:41.807533,   lng:-72.730255},
{lat:41.809441,   lng:-72.731949}, 
{lat:41.812267,   lng:-72.734543}, 
{lat:41.814648,   lng:-72.737038}, 
{lat:41.816685,   lng:-72.737938},
{lat:41.816788,   lng:-72.734520}, 
{lat:41.816956,   lng:-72.730217}, 
{lat:41.817142,   lng:-72.726753}, 
{lat:41.817192,   lng:-72.725586}, 
{lat:41.817280,   lng:-72.722115},
{lat:41.817387,   lng:-72.719429}, 
{lat:41.817848,   lng:-72.717537}, 
{lat:41.816853,   lng:-72.713097}, 
   
        ];
        var route153 = new google.maps.Polyline({
          path:stops153,
          geodesic: true,
          strokeColor: '#FF8040',
          strokeOpacity: 1.0,
          strokeWeight: 4
        });

        route153.setMap(map);
		
		var infowindow = new google.maps.InfoWindow({
             content: "153"});
             infowindow.setPosition( {lat:41.817387,   lng:-72.719429},  );
             infowindow.open(map);

	     //161
        var stops161 = [         
{lat:41.753597,   lng:-72.682678}, 
{lat:41.754742,   lng:-72.682533}, 
{lat:41.758144,   lng:-72.682182}, 
{lat:41.759407,   lng:-72.682053},
{lat:41.761017,   lng:-72.681862}, 
{lat:41.763325,   lng:-72.684319}, 
{lat:41.763935,   lng:-72.687706}, 
{lat:41.763580,   lng:-72.692238}, 
{lat:41.764435,   lng:-72.695137}, 
{lat:41.766747,   lng:-72.693626}, 
{lat:41.768169,   lng:-72.693649}, 
{lat:41.770672,   lng:-72.694893}, 
{lat:41.771847,   lng:-72.698601}, 
{lat:41.772366,   lng:-72.700356},
{lat:41.774048,   lng:-72.699722}, 
{lat:41.774860,   lng:-72.699341}, 
{lat:41.775707,   lng:-72.698395},   
        ];
        var route161 = new google.maps.Polyline({
          path:stops161,
          geodesic: true,
          strokeColor: '#8000FF',
          strokeOpacity: 1.0,
          strokeWeight: 4
        });

        route161.setMap(map);
		
		var infowindow = new google.maps.InfoWindow({
             content: "161"});
             infowindow.setPosition( {lat:41.775707,   lng:-72.698395},  );
             infowindow.open(map);
			 
		 var infoWindow = new google.maps.InfoWindow;           	 
		
      downloadUrl('/ctfastrak/createXMLbus.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var sign = markerElem.getAttribute('sign');
			    var lat = markerElem.getAttribute('lat');
			  var lng = markerElem.getAttribute('lng');
              //var address = markerElem.getAttribute('address');
              //var type = markerElem.getAttribute('type');
			  // var rsn = markerElem.getAttribute('rsn');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
			  
			  var strong = document.createElement('strong');
              strong.textContent ="Bus Label:"+id
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));		
			  
			  
             var text = document.createElement('text');
              text.textContent = sign
              infowincontent.appendChild(text);    
			   infowincontent.appendChild(document.createElement('br')); 
			   
			   var lat1 = document.createElement('lat1');
              lat1.textContent = "lat:"+lat+";   "
              infowincontent.appendChild(lat1);
			  
			  
			  var lng1 = document.createElement('lng1');
              lng1.textContent = "     lng"+lng
              infowincontent.appendChild(lng1);		
               infowincontent.appendChild(document.createElement('br')); 
 
    
   /*
   var add1= document.createElement('add1');
              add1.textContent = "address:"   
              infowincontent.appendChild(add1);
	*/		    
   
 		  
			  
			  var icon="/ctfastrak/bus3.png";
              var marker = new google.maps.Marker({
                map: map,
				icon:icon,
                position: point,
                //label: "B"
				 
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