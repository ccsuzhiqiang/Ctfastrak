<h1 style="text-align:center"> Lets fill the tables</h1>

	<p>All the SQL tables have been created in database "ctfastrak". Now we need to fill them with  provided GTFS data. This might take some time to execute.<br/><br/>
	Here is a list of files in your GTFS folder. Green labels means that the file is found, and red means its not<br/><br/>
	Click "Add data to MySQL.." button to continue....</p><br/>
	 
	
	<ul>
	<li>Files in /gtfs folder:</li>
		<ul>
			<li><?php
			if(file_exists("gtfs/agency.txt")){
			echo "<span style='color:green'>";
			$files = "agency.txt;";
			}else {echo "<span style='color:red'>";}
			?>agency.txt</span></li>
			
			<li><?php
			if(file_exists("gtfs/stops.txt")){
			echo "<span style='color:green'>";
			$files .= "stops.txt;";
			}else {echo "<span style='color:red'>";}
			?>stops.txt</span></li>
			
			<li><?php
			if(file_exists("gtfs/routes.txt")){
			echo "<span style='color:green'>";
			$files .= "routes.txt;";
			}else {echo "<span style='color:red'>";}
			?>routes.txt</span></li>
			
			<li><?php
			if(file_exists("gtfs/trips.txt")){
			echo "<span style='color:green'>";
			$files .= "trips.txt;";
			}else {echo "<span style='color:red'>";}
			?>trips.txt</span></li>
			
			<li><?php
			if(file_exists("gtfs/stop_times.txt")){
			echo "<span style='color:green'>";
			$files .= "stop_times.txt;";
			}else {echo "<span style='color:red'>";}
			?>stop_times.txt</span></li>
			
			<li><?php
			if(file_exists("gtfs/calendar.txt")){
			echo "<span style='color:green'>";
			$files .= "calendar.txt;";
			}else {echo "<span style='color:red'>";}
			?>calendar.txt</span></li>
			
			<li><?php
			if(file_exists("gtfs/calendar_dates.txt")){
			echo "<span style='color:green'>";
			$files .= "calendar_dates.txt;";
			}else {echo "<span style='color:red'>";}
			?>calendar_dates.txt</span></li>
			
			 
			
			<?php
			echo $files;
			?>
			
		</ul>
	</ul>
	<a href="createSQL.php?files=<?php echo $files ?>"style="margin-left:280px; margin-top:20px; margin-bottom:20px;" class="button">Add data to MySQL..</a>
</div>
</body>
</html>