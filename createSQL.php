<meta charset="UTF-8">
<?php
 
$link = mysqli_connect("localhost", "root", "", "ctfastrak"); 
 
$query1= "LOAD DATA INFILE 'c:/wamp/tmp/agency.txt' INTO TABLE agency FIELDS TERMINATED BY ','";
mysqli_query($link,$query1);

$query2= "LOAD DATA INFILE 'c:/wamp/tmp/calendar.txt' INTO TABLE calendar FIELDS TERMINATED BY ','";
mysqli_query($link,$query2);

$query3= "LOAD DATA INFILE 'c:/wamp/tmp/calendar_dates.txt' INTO TABLE calendar_dates FIELDS TERMINATED BY ','";
mysqli_query($link,$query3);

$query4= "LOAD DATA INFILE 'c:/wamp/tmp/routes.txt' INTO TABLE  routes FIELDS TERMINATED BY ','";
mysqli_query($link,$query4);

$query5= "LOAD DATA INFILE 'c:/wamp/tmp/stops.txt' INTO TABLE stops FIELDS TERMINATED BY ','";
mysqli_query($link,$query4);

$query6= "LOAD DATA INFILE 'c:/wamp/tmp/stop_times.txt' INTO TABLE stop_times FIELDS TERMINATED BY ','";
mysqli_query($link,$query6);

$query7= "LOAD DATA INFILE 'c:/wamp/tmp/trips.txt' INTO TABLE trips FIELDS TERMINATED BY ','";
mysqli_query($link,$query7);
 echo "Done!";
 
?>