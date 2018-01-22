<?php
//require("phpsqlajax_dbinfo.php");

// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);
 
// Opens a connection to a MySQL server
$link = mysqli_connect("localhost", "root", "", "ctfastrak");  
$query = "SELECT * FROM stops WHERE 1";
$result = mysqli_query($link,$query);
if (!$result) {
die('Invalid query: ' . mysqli_error());}
 

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each

while ($row = @mysqli_fetch_assoc($result)){
  // Add to XML document node
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("id",$row['stop_id']);
  $newnode->setAttribute("name",$row['routes']);
  $newnode->setAttribute("address", $row['stop_name']);
  $newnode->setAttribute("lat", $row['stop_lat']);
  $newnode->setAttribute("lng", $row['stop_lng']);
 // $newnode->setAttribute("type", $row['type']);
 // $newnode->setAttribute("rsn", $row['rsn']);
}

//$dom->save("/ctfastrak/markers.xml");
echo $dom->saveXML();
 

?>



 