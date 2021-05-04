<?php include('functions.php'); ?>
<!doctype html>
<html>
<head>
	<title>C&C Calendar</title>
	<meta charset="utf-8"/>
	<link rel='stylesheet' type="text/css" href="style2.css" />
	<style type="text/css">
	body {
		background-image: url("background1.jpg");
		background-attachment: fixed;
		background-size: 100%;
		position: relative;
		color: #332622;
	}

	.text{
		color: #332622;
	}



	</style>


	<script language="javascript">

		var this_day;
		var this_month;
		var this_year;

		/* ACCESS APIs FUNCTION: Calls quote API and Date&Time API */
		function accessAPI(){
			getQuote();
			dateNtime();

		}

		/* GET QUOTE FUNCTION: Accesses API */
		function getQuote() {
			/* Step 1: Make instance of request object...
			...to make HTTP request after page is loaded*/
			request = new XMLHttpRequest();
			if(!request){
				alert("Unable to retrieve quote.");
			}
			console.log("1 - request object created");

			// Step 2: Set the URL for the AJAX request to be the JSON file
			request.open("GET", "http://quotes.rest/qod.json", true);
			console.log("2 - opened request file");

			// Step 3: set up event handler/callback
			request.onreadystatechange = function() {
				if (request.readyState == 4 && request.status == 200) {
					// Step 5: wait for done + success
					console.log("5 - response received");
					result = this.responseText;
					info = JSON.parse(result);
					var qotd = info.contents.quotes[0].quote;
					var auth = info.contents.quotes[0].author;
					document.getElementById("data").innerHTML = "\"" + qotd + "\" - " + auth;

				}
				else if (request.readyState == 4 && request.status != 200) {
					document.getElementById("data").innerHTML = "Something is wrong. Check logs.";
				}
				else if (request.readyState == 3) {
					document.getElementById("data").innerHTML = "Too soon!  Try again";
				}

			}
			// Step 4: fire off the HTTP request
			request.send();
			console.log("4 - Request sent");
		}

		/* DATE & TIME FUNCTION: Accesses API */
		function dateNtime(){
			/* Step 1: Make instance of request object...
			...to make HTTP request after page is loaded*/
			request2 = new XMLHttpRequest();
			if(!request2){
				alert("Unable to retrieve date and time data.");
			}
			console.log("1 - request object created");

			// Step 2: Set the URL for the AJAX request to be the JSON file
			request2.open("GET", "https://api.ipgeolocation.io/timezone?apiKey=9b49662971d34427acea9b0c7e6481e6&tz=America/New_York", true);
			console.log("2 - opened request file");

			// Step 3: set up event handler/callback
			request2.onreadystatechange = function() {
				if (request2.readyState == 4 && request2.status == 200) {
					// Step 5: wait for done + success
					console.log("5 - date response received");
					result = this.responseText;
					info = JSON.parse(result);

					//need to convert day of the week into a number
					var day;
					var dow = info.date_time_txt.substring(0,3);
					if(dow=="Sun"){
						day = 0;
					}
					else if(dow=="Mon"){
						day = 1;
					}
					else if(dow=="Tue"){
						day = 2;
					}
					else if(dow=="Wed"){
						day = 3;
					}
					else if(dow=="Thu"){
						day = 4;
					}
					else if(dow=="Fri"){
						day = 5;
					}
					else if(dow=="Sat"){
						day = 6;
					}

					//fill week depending on what day it is today
					if(day == 1){
						document.getElementById("day0").innerHTML = "Monday (today)";
						document.getElementById("day1").innerHTML = "Tuesday";
						document.getElementById("day2").innerHTML = "Wednesday";
						document.getElementById("day3").innerHTML = "Thursday";
						document.getElementById("day4").innerHTML = "Friday";
						document.getElementById("day5").innerHTML = "Saturday";
						document.getElementById("day6").innerHTML = "Sunday";
					}
					else if(day == 2){
						document.getElementById("day0").innerHTML = "Tuesday (today)";
						document.getElementById("day1").innerHTML = "Wednesday";
						document.getElementById("day2").innerHTML = "Thursday";
						document.getElementById("day3").innerHTML = "Friday";
						document.getElementById("day4").innerHTML = "Saturday";
						document.getElementById("day5").innerHTML = "Sunday";
						document.getElementById("day6").innerHTML = "Monday";
					}
					else if(day == 3){
						document.getElementById("day0").innerHTML = "Wednesday (today)";
						document.getElementById("day1").innerHTML = "Thursday";
						document.getElementById("day2").innerHTML = "Friday";
						document.getElementById("day3").innerHTML = "Saturday";
						document.getElementById("day4").innerHTML = "Sunday";
						document.getElementById("day5").innerHTML = "Monday";
						document.getElementById("day6").innerHTML = "Tuesday";
					}
					else if(day == 4){
						document.getElementById("day0").innerHTML = "Thursday (today)";
						document.getElementById("day1").innerHTML = "Friday";
						document.getElementById("day2").innerHTML = "Saturday";
						document.getElementById("day3").innerHTML = "Sunday";
						document.getElementById("day4").innerHTML = "Monday";
						document.getElementById("day5").innerHTML = "Tuesday";
						document.getElementById("day6").innerHTML = "Wednesday";
					}
					else if(day == 5){
						document.getElementById("day0").innerHTML = "Friday (today)";
						document.getElementById("day1").innerHTML = "Saturday";
						document.getElementById("day2").innerHTML = "Sunday";
						document.getElementById("day3").innerHTML = "Monday";
						document.getElementById("day4").innerHTML = "Tuesday";
						document.getElementById("day5").innerHTML = "Wednesday";
						document.getElementById("day6").innerHTML = "Thursday";
					}
					else if(day == 6){
						document.getElementById("day0").innerHTML = "Saturday (today)";
						document.getElementById("day1").innerHTML = "Sunday";
						document.getElementById("day2").innerHTML = "Monday";
						document.getElementById("day3").innerHTML = "Tuesday";
						document.getElementById("day4").innerHTML = "Wednesday";
						document.getElementById("day5").innerHTML = "Thursday";
						document.getElementById("day6").innerHTML = "Friday";
					}
					else if(day == 0){
						document.getElementById("day0").innerHTML = "Sunday (today)";
						document.getElementById("day1").innerHTML = "Monday";
						document.getElementById("day2").innerHTML = "Tuesday";
						document.getElementById("day3").innerHTML = "Wednesday";
						document.getElementById("day4").innerHTML = "Thursday";
						document.getElementById("day5").innerHTML = "Friday";
						document.getElementById("day6").innerHTML = "Saturday";
					}

					//update year in form

					var year = parseInt(info.year);
					document.getElementById("thisyear").innerHTML = year;
					document.getElementById("and1").innerHTML = year+1;
					document.getElementById("and2").innerHTML = year+2;
					document.getElementById("and3").innerHTML = year+3;
					document.getElementById("and4").innerHTML = year+4;
					document.getElementById("and5").innerHTML = year+5;
					document.getElementById("and6").innerHTML = year+6;
					document.getElementById("and7").innerHTML = year+7;
					document.getElementById("and8").innerHTML = year+8;
					document.getElementById("and9").innerHTML = year+9;
					document.getElementById("and10").innerHTML = year+10;

					document.getElementById("thisyear").value = year;
					document.getElementById("and1").value = year+1;
					document.getElementById("and2").value = year+2;
					document.getElementById("and3").value = year+3;
					document.getElementById("and4").value = year+4;
					document.getElementById("and5").value = year+5;
					document.getElementById("and6").value = year+6;
					document.getElementById("and7").value = year+7;
					document.getElementById("and8").value = year+8;
					document.getElementById("and9").value = year+9;
					document.getElementById("and10").value = year+10;



					//update selected month and day depending on current date
					var month = parseInt(info.month);
					var day = parseInt(info.date.substring(8,10));
					document.getElementById("months").selectedIndex = month-1;
					document.getElementById("days").selectedIndex = day-1;
					fillEvents(day, month, year);

				}

			}
			// Step 4: fire off the HTTP request
			request2.send();
			console.log("4 - Request sent");


		}
		
		function checkOverflowMonth(day, month, addValue) {
			d = parseInt(day);
			m = parseInt(month);
			add = parseInt(addValue);
			
			if (m == 2){
				if (d + add > 28) {
					return (d + add) % 28;
				}
			}
			else if (m == 4 || m == 6 || m == 9 || m == 11) {
				if (d + add > 30) {
					return (d + add) % 30;
				}
			}
			else {
				if (d + add > 31) {
					return (d + add) % 31;
				}
			}
			return -1;
		}

		function fillEvents(day, month, year){
			//access array with event values and insert into calendar
			//document.getElementById("event0").innerHTML = "event from database";

			day0 = "";
			day1 = "";
			day2 = "";
			day3 = "";
			day4 = "";
			day5 = "";
			day6 = "";
			otherEvents = "";
			
			var num_events = events.length;
			for(var i = 0; i < events.length; i++){
				//if month, day and year match today put in event0

					//ORIGINAL CODE
					// if(events[i].year == year){
					// 	if(month == events[i].month){
							
							var check = false;
							if (month == 12) {
								var mod = 1;
							}
							else {
								var mod = 0;
							}
							
							if(events[i].day == day) {
								if(events[i].year == year){
									if(month == events[i].month) {
										check = true;
										console.log(events[i].timeStartHour);
										console.log(events[i].timeStartMinute);
										console.log(events[i].timeEndHour);
										console.log(events[i].timeEndMinute);
										day0 += events[i].name+"<br>";
										day0 += events[i].timeStartHour+":"+events[i].timeStartMinute;
										if(events[i].start_am_or_pm==1){
											day0 += "AM";
										} else{
											day0 += "PM";
										}
										day0 += " - "+events[i].timeEndHour+":"+events[i].timeEndMinute;
										if(events[i].end_am_or_pm==1){
											day0 += "AM";
										} else{
											day0 += "PM";
										}
										day0 += "<br><br>";
										
									}
									else if (events[i].month > month) {
										check = true;
										otherEvents += events[i].name+"<br><br>";
									}
								}
								else if (events[i].year > year) {
									check = true;
									otherEvents += events[i].name+"<br><br>";
								}
							}
								// day0 += events[i].name+"<br><br>";
							if(checkOverflowMonth(day, month, 1) > 0) {
								if (events[i].day == checkOverflowMonth(day, month, 1)) {
									if(events[i].year == year + mod){
										if(((month + 1) % 12) == events[i].month) {
											check = true;
											day1 += events[i].name+"<br><br>";
										}
										else if (events[i].month > ((month + 1) % 12)) {
											check = true;
											otherEvents += events[i].name+"<br><br>";
										}
									}
									else if (events[i].year > year + mod) {
										check = true;
										otherEvents += events[i].name+"<br><br>";
									}
								}
							}
							else if (events[i].day == day+1) {
								if(events[i].year == year){
									if(month == events[i].month) {
										check = true;
										day1 += events[i].name+"<br><br>";
									}
									else if (events[i].month > month) {
										check = true;
										otherEvents += events[i].name+"<br><br>";
									}
								}
								else if (events[i].year > year) {
									check = true;
									otherEvents += events[i].name+"<br><br>";
								}
							}
							if(checkOverflowMonth(day, month, 2) > 0) {
								if (events[i].day == checkOverflowMonth(day, month, 2)) {
									if(events[i].year == year + mod){
										if(((month + 1) % 12) == events[i].month) {
											check = true;
											day2 += events[i].name+"<br><br>";
										}
										else if (events[i].month > ((month + 1) % 12)) {
											check = true;
											otherEvents += events[i].name+"<br><br>";
										}
									}
									else if (events[i].year > year + mod) {
										check = true;
										otherEvents += events[i].name+"<br><br>";
									}
								}
							}
							else if (events[i].day == day+2) {
								if(events[i].year == year){
									if(month == events[i].month) {
										check = true;
										day2 += events[i].name+"<br><br>";
									}
									else if (events[i].month > month) {
										check = true;
										otherEvents += events[i].name+"<br><br>";
									}
								}
								else if (events[i].year > year) {
									check = true;
									otherEvents += events[i].name+"<br><br>";
								}
							}
							if(checkOverflowMonth(day, month, 3) > 0) {
								if (events[i].day == checkOverflowMonth(day, month, 3)) {
									if(events[i].year == year + mod){
										if(((month + 1) % 12) == events[i].month) {
											check = true;
											day3 += events[i].name+"<br><br>";
										}
										else if (events[i].month > ((month + 1) % 12)) {
											check = true;
											otherEvents += events[i].name+"<br><br>";
										}
									}
									else if (events[i].year > year + mod) {
										check = true;
										otherEvents += events[i].name+"<br><br>";
									}
								}
							}
							else if (events[i].day == day+3) {
								if(events[i].year == year){
									if(month == events[i].month) {
										check = true;
										day3 += events[i].name+"<br><br>";
									}
									else if (events[i].month > month) {
										check = true;
										otherEvents += events[i].name+"<br><br>";
									}
								}
								else if (events[i].year > year) {
									check = true;
									otherEvents += events[i].name+"<br><br>";
								}
							}
							if(checkOverflowMonth(day, month, 4) > 0) {
								if (events[i].day == checkOverflowMonth(day, month, 4)) {
									if(events[i].year == year + mod){
										if(((month + 1) % 12) == events[i].month) {
											check = true;
											day4 += events[i].name+"<br><br>";
										}
										else if (events[i].month > ((month + 1) % 12)) {
											check = true;
											otherEvents += events[i].name+"<br><br>";
										}
									}
									else if (events[i].year > year + mod) {
										check = true;
										otherEvents += events[i].name+"<br><br>";
									}
								}
							}
							else if (events[i].day == day+4) {
								if(events[i].year == year){
									if(month == events[i].month) {
										check = true;
										day4 += events[i].name+"<br><br>";
									}
									else if (events[i].month > month) {
										check = true;
										otherEvents += events[i].name+"<br><br>";
									}
								}
								else if (events[i].year > year) {
									check = true;
									otherEvents += events[i].name+"<br><br>";
								}
							}
							if(checkOverflowMonth(day, month, 5) > 0) {
								if (events[i].day == checkOverflowMonth(day, month, 5)) {
									if(events[i].year == year + mod){
										if(((month + 1) % 12) == events[i].month) {
											check = true;
											day5 += events[i].name+"<br><br>";
										}
										else if (events[i].month > ((month + 1) % 12)) {
											check = true;
											otherEvents += events[i].name+"<br><br>";
										}
									}
									else if (events[i].year > year + mod) {
										check = true;
										otherEvents += events[i].name+"<br><br>";
									}
								}
							}
							else if (events[i].day == day+5) {
								if(events[i].year == year){
									if(month == events[i].month) {
										check = true;
										day5 += events[i].name+"<br><br>";
									}
									else if (events[i].month > month) {
										check = true;
										otherEvents += events[i].name+"<br><br>";
									}
								}
								else if (events[i].year > year) {
									check = true;
									otherEvents += events[i].name+"<br><br>";
								}
							}
							if(checkOverflowMonth(day, month, 6) > 0) {
								if (events[i].day == checkOverflowMonth(day, month, 6)) {
									if(events[i].year == year + mod){
										if(((month + 1) % 12) == events[i].month) {
											check = true;
											day6 += events[i].name+"<br><br>";
										}
										else if (events[i].month > ((month + 1) % 12)) {
											check = true;
											otherEvents += events[i].name+"<br><br>";
										}
									}
									else if (events[i].year > year + mod) {
										check = true;
										otherEvents += events[i].name+"<br><br>";
									}
								}
							}
							else if (events[i].day == day+6) {
								if(events[i].year == year){
									if(month == events[i].month) {
										check = true;
										day6 += events[i].name+"<br><br>";
									}
									else if (events[i].month > month) {
										check = true;
										otherEvents += events[i].name+"<br><br>";
									}
								}
								else if (events[i].year > year) {
									check = true;
									otherEvents += events[i].name+"<br><br>";
								}
							}
							if (check == false){
								if(events[i].day > day){
									otherEvents += events[i].name+"<br><br>";
								}
								else if(events[i].month > month){
									otherEvents += events[i].name+"<br><br>";
								}
								else if(events[i].year > year){
									otherEvents += events[i].name+"<br><br>";
								}

							}
					}
					//later year
					
			document.getElementById("event0").innerHTML = day0;
			document.getElementById("event1").innerHTML = day1;
			document.getElementById("event2").innerHTML = day2;
			document.getElementById("event3").innerHTML = day3;
			document.getElementById("event4").innerHTML = day4;
			document.getElementById("event5").innerHTML = day5;
			document.getElementById("event6").innerHTML = day6;
			document.getElementById("listedEvents").innerHTML = otherEvents;


		}

		function Event(name, location, description, day, month, year,
				       timeStartHour, timeStartMinute, timeEndHour,
					   timeEndMinute, start_am_or_pm, end_am_or_pm)
		{
			this.name=name;
			this.location=location;
			this.description=description;
			this.day=day;
			this.month=month;
			this.year=year;
			if(timeStartHour==0){
				this.timeStartHour=12;
			} else {
				this.timeStartHour=timeStartHour;
			}
			if(timeStartMinute==0){
				this.timeStartMinute="00";
			} else{
				this.timeStartMinute=timeStartMinute;
			}
			this.timeEndHour=timeEndHour;
			if(timeEndMinute==0){
				this.timeEndMinute="00";
			} else{
				this.timeEndMinute=timeEndMinute;
			}
			this.start_am_or_pm=start_am_or_pm;
			this.end_am_or_pm=end_am_or_pm;
		}

		//make javascript array from php arrays
		events = new Array();
		later_events = new Array();

		<?php
		//php array definitions, for global access
		$names = array();
		$locals = array();
		$descrips = array();
		$days = array();
		$months = array();
		$years = array();
		$tstarthour = array();
		$tstartmin = array();
		$tendhour = array();
		$tendmin = array();
		$samorpm = array();
		$eamorpm = array();
		?>

		<?php test($names, $locals, $descrips, $days, $months, $years, $tstarthour, $tstartmin, $tendhour, $tendmin, $samorpm, $eamorpm);?>
		<?php hello();?>

		var n = <?php echo json_encode($names) ?>;
		var l = <?php echo json_encode($locals) ?>;
		var d = <?php echo json_encode($descrips) ?>;
		var d2 = <?php echo json_encode($days) ?>;
		var m = <?php echo json_encode($months) ?>;
		var y = <?php echo json_encode($years) ?>;
		var s = <?php echo json_encode($tstarthour) ?>;
		var s2 = <?php echo json_encode($tstartmin) ?>;
		var e = <?php echo json_encode($tendhour) ?>;
		var e2 = <?php echo json_encode($tendmin) ?>;
		var sa = <?php echo json_encode($samorpm) ?>;
		var ea = <?php echo json_encode($eamorpm) ?>;

		var n_length = <?php echo json_encode(sizeof($names), JSON_HEX_TAG); ?>;

		for(var i = 0; i < n_length; i++){
			events.push(new Event(n[i],l[i],d[i],d2[i],m[i],y[i],s[i],s2[i],e[i],e2[i],sa[i],ea[i]));
		}

	</script>
</head>


<body onload="accessAPI()">

	<p>
	<div class="row">
	<div class="column lef" >
	<div id="title">
	Calm & Collected Calendar
</div>
</div>
<div class="column righ">
	<?php  if (isset($_SESSION['user'])) : ?>
		<span id="user"><?php echo $_SESSION['user']['username']; ?></span>

		<small>
			<a href="index.php?logout='1'" >Sign Out</a>
		</small>

	<?php endif ?>

	<?php  if (!isset($_SESSION['user'])) : ?>

		<small>
			<a href="sign_in.php" >Sign In</a>
		</small>

	<?php endif ?>

</div>
</div>
</p>
<br> <br> <br>
<div class="roww">
	<div class="text">
	<div id="data">
		Loading...
	</div>
	<div id="error"></div>
</div>
</div>

<div class="container col-sm-4 col-md-7 col-lg-4 mt-5">
    <div class="card">
			<!-- <h3 id="myInput" value="Hello"> <br> hello </h3> -->





        <div class="card-header" id="monthAndYear"> TO DO: </div>
				<!-- <div id="plsCenter"> -->
        <table class="table" id="calendar">
            <tr>
							<!-- where to add the ndays of the week -->
                <th id = "day0"  > Today </th>
                <th id = "day1"  > Tomorrow </th>
                <th id = "day2"  > PH</th>
                <th id = "day3"  > PH </th>
                <th id = "day4"  > PH </th>
                <th id = "day5"  > PH </th>
                <th id = "day6"  > PH </th>
            </tr>
						<tr>
							<!-- where to add the info from the data base -->
							<td id = "event0" style="text-align:center;"></td>
							<td id = "event1" style="text-align:center;"></td>
							<td id = "event2" style="text-align:center;"></td>
							<td id = "event3" style="text-align:center;"></td>
							<td id = "event4" style="text-align:center;"></td>
							<td id = "event5" style="text-align:center;"></td>
							<td id = "event6" style="text-align:center;"></td>
						</tr>
					</table>

            <tbody id="calendar-body">

            </tbody>
        </table>
    </div>
</div>

<div class="row">
<div class="column left" >
	<div id= "plsCenter"> ADD EVENT </div>

		<div class="eventForm">
	<form id = "form" method="POST" action="index.php">
		<div class="listedForm">
		<p id = "name"> Event Name: <input type="text" name="name"> </p>
		<p id = "name">  Date:
		<br>
			<span id="notBold" >Month:</span><select id="months" name = "month">
				<option value=1>January</option>
				<option value=2>February</option>
				<option value=3>March</option>
				<option value=4>April</option>
				<option value=5>May</option>
				<option value=6>June</option>
				<option value=7>July</option>
				<option value=8>August</option>
				<option value=9>September</option>
				<option value=10>October</option>
				<option value=11>November</option>
				<option value=12>December</option>
			</select>
			&nbsp;
			<span id="notBold" >Day:</span><select id="days" name = "day">
				<option value=1>1</option>
				<option value=2>2</option>
				<option value=3>3</option>
				<option value=4>4</option>
				<option value=5>5</option>
				<option value=6>6</option>
				<option value=7>7</option>
				<option value=8>8</option>
				<option value=9>9</option>
				<option value=10>10</option>
				<option value=11>11</option>
				<option value=12>12</option>
				<option value=13>13</option>
				<option value=14>14</option>
				<option value=15>15</option>
				<option value=16>16</option>
				<option value=17>17</option>
				<option value=18>18</option>
				<option value=19>19</option>
				<option value=20>20</option>
				<option value=21>21</option>
				<option value=22>22</option>
				<option value=23>23</option>
				<option value=24>24</option>
				<option value=25>25</option>
				<option value=26>26</option>
				<option value=27>27</option>
				<option value=28>28</option>
				<option value=29>29</option>
				<option value=30>30</option>
				<option value=31>31</option>
			</select>
			&nbsp;
			<span id="notBold" >Year:</span><select name = "year">
				<option id = "thisyear" value=""></option>
				<option id = "and1" value=""></option>
				<option id = "and2" value=""></option>
				<option id = "and3" value=""></option>
				<option id = "and4" value=""></option>
				<option id = "and5" value=""></option>
				<option id = "and6" value=""></option>
				<option id = "and7" value=""></option>
				<option id = "and8" value=""></option>
				<option id = "and9" value=""></option>
				<option id = "and10" value=""></option>
			</select><br>
		</p>
		<p id="time">Start Time: <span style="margin-left: 1.5px;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<br>
			<span id="notBold" >Hour:</span><select name = "start_hour">
				<option value=12>12:00</option>
				<option value=1>1:00</option>
				<option value=2>2:00</option>
				<option value=3>3:00</option>
				<option value=4>4:00</option>
				<option value=5>5:00</option>
				<option value=6>6:00</option>
				<option value=7>7:00</option>
				<option value=8>8:00</option>
				<option value=9>9:00</option>
				<option value=10>10:00</option>
				<option value=11>11:00</option>
			</select>
			&nbsp;
			<span id="notBold" >Minute:</span><select name = "start_min">
				<option value=00>00</option>
				<option value=05>05</option>
				<option value=10>10</option>
				<option value=15>15</option>
				<option value=20>20</option>
				<option value=25>25</option>
				<option value=30>30</option>
				<option value=35>35</option>
				<option value=40>40</option>
				<option value=45>45</option>
				<option value=50>50</option>
				<option value=55>55</option>
			</select>
			&nbsp;
			<span id="notBold" >am/pm:</span><select name="start_am_or_pm">
				<option value=1>AM</option>
				<option value=2>PM</option>
			</select><br>
			<br>
		End Time:<span style="margin-left: 2px;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<br>
			<span id="notBold" >Hour:</span><select name = "end_hour">
				<option value=12>12:00</option>
				<option value=1>1:00</option>
				<option value=2>2:00</option>
				<option value=3>3:00</option>
				<option value=4>4:00</option>
				<option value=5>5:00</option>
				<option value=6>6:00</option>
				<option value=7>7:00</option>
				<option value=8>8:00</option>
				<option value=9>9:00</option>
				<option value=10>10:00</option>
				<option value=11>11:00</option>
			</select>
			&nbsp;
			<span id="notBold" >Minute:</span><select name = "end_min">
				<option value=00>00</option>
				<option value=05>05</option>
				<option value=10>10</option>
				<option value=15>15</option>
				<option value=20>20</option>
				<option value=25>25</option>
				<option value=30>30</option>
				<option value=35>35</option>
				<option value=40>40</option>
				<option value=45>45</option>
				<option value=50>50</option>
				<option value=55>55</option>
			</select>
			&nbsp;
			<span id="notBold" >am/pm:</span><select name="end_am_or_pm">
				<option value=1>AM</option>
				<option value=2>PM</option>
			</select>
		</p>
		<p id = "location" >Location: <input type="text" name = "location"></p>
		<p id="description">Description: <input type="text" name = "description"></p>
		<input id="makeEvent" type = "submit" value = "Make Event" name="event_btn">

	</form>
	</div>
</div>
	</div>

<div class="column right" >
<!-- <div class="uE" > -->
	<div id= "plsCenterGreen"> UPCOMING EVENTS </div>

<!-- </div> -->
<!-- <div class="aE" >
	Add New Event
<a href="#event">&#43;</a>
</div> -->
<!-- where to add the upcoming events -->
<div id="listedEvents">

</div>
</div>
</div>

</body>
</html>
