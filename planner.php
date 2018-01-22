<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Trip Planner</title>
    <style>
        
	#navigation
{
    height: 42px;
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
    height: 35px;
	 
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

#map {
        height: 91%;
        float: right;
        width: 70%;
         
      }

	 #left-panel {
        font-family: 'Roboto','sans-serif';
        line-height: 26px;
        padding-right: 5px;
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
      
      #left-panel {
        margin: 20px;
        border-width: 2px;
        width: 26%;
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
  
   <div id="left-panel">
	  
	 <h4> Find Near Ctfastrak Stop and Available Route</h4> 	 
<p>
   
         <div style="color:#0000FF">  
		 <form action="planner.php " method="post">
                  <input type="hidden" name="submitted" value="true"/>                                  
                        
                        
                   <div>                      
                       <label for="form5">FROM:</label><br/>
					   <input type="text" class="form-control" id="origin" name="txtOrg">                     
                   </div>               
                    
                   
                   <div>                 
                      <label for="form5">TO:</label><br/>
					  <input type="text" class="form-control" id="Dest" name="txtDest">                     
                   </div>      
				   
				    <div>                 
                      <label for="form5">Radius(miles):</label><br/>
					  <input type="text" class="form-control" id="Dest" name="txtRa">                     
                   </div>      
                   
                    
       </div>    
        <input type="submit"  value="submit" name="submitted"/>
      </form>    	  
</p>
	 	    
	 
    
    
  <?php 
   if(isset($_POST["submitted"]))
    { 
//date_default_timezone_set('America/New_York');  
	//	 echo "TIME: ".date("H:i:s");  
	//	  echo "<br>";
		  
$add1 =$_POST['txtOrg'] ;
$add2 =$_POST['txtDest'] ;
$ra =$_POST['txtRa'] ;
     
  
        $geocode1=file_get_contents('https://maps.google.com/maps/api/geocode/json?address='.urlencode($add1).'&sensor=false');
        $output1= json_decode($geocode1);
        $lat1= $output1->results[0]->geometry->location->lat;
        $lng1= $output1->results[0]->geometry->location->lng;
		 // echo "lat1:$lat1" ;  
		// echo "lng1:$lng1";
		//echo "<br>";
		?> 
		
		 <script>
		  var lat1=<?php echo $lat1 ?>;
		   var lng1=<?php echo $lng1 ?>;
		 </script>
		 
		 <?php 
		$geocode2=file_get_contents('https://maps.google.com/maps/api/geocode/json?address='.urlencode($add2).'&sensor=false');
        $output2= json_decode($geocode2);
        $lat2= $output2->results[0]->geometry->location->lat;
        $lng2= $output2->results[0]->geometry->location->lng;	     
		 // echo "lat2:$lat2";  
		 // echo "lng2:$lng2";
		// echo "<br>";	
		 ?> 
		
		 <script>
		  var lat2=<?php echo $lat2 ?>;
		  var lng2=<?php echo $lng2 ?>;
		 </script>
		 
		 <?php 

  $link = mysqli_connect("localhost", "root", "", "ctfastrak");
        $q1=" Truncate table os ";
		$q2=" Truncate table ds ";
		$q3=" Truncate table rsn ";
		mysqli_query($link, $q1);  	 
		mysqli_query($link, $q2);   
		mysqli_query($link, $q3);   
	//step1		
		 
	    $q4=" Insert into os(stop_id,stop_name,distance) SELECT stop_id, stop_name,( 3959 * acos( cos( radians($lat1) ) * cos( radians( stop_lat ) ) * cos( radians( stop_lng ) - radians($lng1) ) + sin( radians($lat1) ) * sin( radians(stop_lat ) ) ) ) as distance  FROM stops HAVING distance <$ra ORDER BY distance LIMIT 0 , 3 ";
		mysqli_query($link, $q4);  
	//step2		
		 
		$q5=" Insert into ds(stop_id,stop_name,distance)  SELECT stop_id, stop_name,( 3959 * acos( cos( radians($lat2) ) * cos( radians( stop_lat ) ) * cos( radians( stop_lng ) - radians($lng2) ) + sin( radians($lat2) ) * sin( radians(stop_lat ) ) ) ) AS distance FROM stops HAVING distance <$ra ORDER BY distance LIMIT 0 , 3 ";
	    mysqli_query($link, $q5);   
	//step3	
		 
		$q6=" Insert into rsn(rsn)  SELECT distinct r.route_short_name FROM stop_times st inner join trips t on t.trip_id=st.trip_id inner join routes r on r.route_id=t.route_id WHERE st.stop_id in (select stop_id from os) and r.route_short_name in (SELECT distinct r.route_short_name FROM stop_times st inner join trips t on t.trip_id=st.trip_id inner join routes r on r.route_id=t.route_id WHERE st.stop_id in (select stop_id from ds)) ";
		 mysqli_query($link, $q6);  		
	//step4	
	   	$q7="select* from rsn ";		 	 
		 $result7=mysqli_query($link, $q7);  		 
           for ($i = 0; $i < count($result7); $i++){
        while ($row = mysqli_fetch_array($result7)) {
           $rsn= $row['rsn'];  
        ?>		   
		    <script>
		  var rsn=<?php echo $rsn ?>;
		  </script>
		 
		 <?php 
		 	 echo "The fastest route(within $ra miles):";
			 echo "<br>"; 
			 echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";
			 echo "<br>";  
            ECHO " $rsn(S1-->S2)";		 
		    echo "<br>";			
		}
		   }
		      
	//step5	
	    
		$q8="Select distinct os.stop_id, os.stop_name, distance, s.stop_lat,s.stop_lng from os inner join stops s on os.stop_id=s.stop_id inner join stop_times st on st.stop_id=os.stop_id inner join trips t on t.trip_id=st.trip_id inner join routes r on r.route_id=t.route_id inner join rsn on rsn.rsn=r.route_short_name where r.route_short_name in (select rsn from rsn) and os.distance in (select min(distance) from os)  ";
	    $result8=mysqli_query($link, $q8);  		 
           for ($i = 0; $i < count($result8); $i++){			   
            while ($row = mysqli_fetch_array($result8)) { 
		
		$stop_id= $row['stop_id'] ;
        $stop_name =  $row ['stop_name'] ;
		$distance=$row['distance'];
		$lat3=$row['stop_lat'];
		$lng3=$row['stop_lng'];
		?> 
		
		 <script>
		  var lat3=<?php echo $lat3 ?>;
		  var lng3=<?php echo $lng3 ?>;
		 </script>
		 
		 <?php 
		
		
		  	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";
		   echo "<br>";
		    echo "A1:$add1" ;  
		  echo "<br>";
			 
		  echo  "S1:$stop_name(ID:$stop_id)";
		    echo "<br>"; 
			 echo "<br>";  
		  echo " A1-->S1:$distance miles";		 
		   echo "<br>";  
		}	          
		   }
		   
	//step6	   
		  
		  $q9=" Select distinct ds.stop_id, ds.stop_name, distance, s.stop_lat,s.stop_lng from ds inner join stops s on ds.stop_id=s.stop_id inner join stop_times st on st.stop_id=ds.stop_id inner join trips t on t.trip_id=st.trip_id inner join routes r on r.route_id=t.route_id inner join rsn on rsn.rsn=r.route_short_name where r.route_short_name in (select rsn from rsn) and ds.distance in (select min(distance) from ds) "; 
		  $result9=mysqli_query($link, $q9);  
		 
           for ($i = 0; $i < count($result9); $i++){			   
            while ($row = mysqli_fetch_array($result9)) { 
		
		$stop_id= $row['stop_id'] ;
        $stop_name =  $row ['stop_name'] ;
		$distance=$row['distance'];
		$lat4=$row['stop_lat'];
		$lng4=$row['stop_lng'];
		?> 
		
		 <script>
		  var lat4=<?php echo $lat4 ?>;
		  var lng4=<?php echo $lng4 ?>;
		 </script>
		 
		 <?php 
		
		  	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";
			 echo "<br>";
			  echo "A2: $add2";  
		     echo "<br>";	
			   
		  echo  "S2:$stop_name(ID:$stop_id)";
		    echo "<br>"; 
			echo "<br>";  
		  echo " S2-->A2:$distance miles";		 
		   echo "<br>"; 
		  
	   	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";
		}	          
		  	   
		}
		 
	 mysqli_close($link);
		       	  
	}	  
	
   ?>
   
 
 
 
	
    <script>
 
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: new google.maps.LatLng( 41.741192, -72.716437),
          zoom: 12
        });
      
   //place marker   
	 var p1={lat:lat1,lng:lng1};	 
	 var p2={lat:lat2,lng:lng2};	   
	 var p3={lat:lat3,lng:lng3};	 
	 var p4={lat:lat4,lng:lng4};	 
	  
      var marker1 = new google.maps.Marker({
                map: map,
                position: p1,
                 
				label: "A1" 
				
        });
	
	 var marker2 = new google.maps.Marker({
                map: map,
                position:p2 ,
				 
                label: "A2" 
        });
	 
	 var marker3 = new google.maps.Marker({
                map: map,
                position: p3,			 
				label: "S1" 
        });
		
	 var marker4 = new google.maps.Marker({
                map: map,
                position: p4,			 
                label: "S2" 
        });
		
		marker1.setMap(map);
		marker2.setMap(map);
		marker3.setMap(map);
		marker4.setMap(map);
		
	//polyline
     	 var st = [
          {lat: lat3, lng: lng3},
		  {lat: lat4, lng: lng4},
           
        ];
        var st1 = new google.maps.Polyline({
          path:st ,
          geodesic: true,
          strokeColor: '#FF0000',
          strokeOpacity: 1.0,
          strokeWeight: 4
        });

       st1.setMap(map);
		 
	  }
	  
    </script>
    <script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBezkqLyMpXAF9dBb4X5rZeQkyF8Y5_Te4&callback=initMap">
     
    </script>
  </body>
</html>