<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
		<meta name="mobile-web-app-capable" content="yes"/>
		<meta name="apple-mobile-web-app-capable" content="yes"/>
		<title>Ally - Find Other Resorces</title>
		<meta name="description" content="An app to help people find food in Santa Barbara"/>
		<meta name="author" content="Westmont Inspired Computing Lab"/>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/styles.css"/>

		<style>
			div.border-row{
				border: 1px solid;
			}
			div.big-font{
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="page-header">
				<h3>Find Other Resources</h3>
			</div>
		</div>
		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-12 big-font">
					<p><b>SOUTH COUNTY</b></p>
					<br/>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-12 big-font">
					<p><b>SUPPLEMENTAL GROCERY DISTRIBUTION</b></p>
					<br/>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p><b>Organization</b></p>
					<br/>
				</div>
				<div class="col-md-4">
					<p><b>Address</b></p>
					<br/>
				</div>
				<div class="col-md-4">
					<p><b>Hours</b></p>
					<br/>
				</div>
			</div>
		</div>

		<div id="test" class="container">
			<script language="jquery" type="text/jquery">
				var scrt_var = 10; 
				var location1 = $("#location").val();

				//var address = ""
				//var dates = ""
			</script>
			<p id="test">Why is this not working</p>
			<a class="btn pull-right btn-lg" href="share.html" onclick="location.href=this.href+'?key='+scrt_var+'&location='+location1;return false;" role="button">
						<span class="glyphicon glyphicon-share" aria-hidden="true"></span>
						Share
						</a>
			<div id="containerInfo" class="row-fluid text-center border-row">
				<!--<a class"btn pull-right" href="share.html" onclick="location.href=this.href+'?key='+scrt_var;return false;">Link</a>-->
				<div class="col-md-4">
					<p id="location" >Catholic Charities (SB)</p>
				</div>
				<div class="col-md-4">
					<p id="address">609 E Haley St, Santa Barbara, CA 93103</p>
				</div>

				<div class="col-md-4">
					<p id="dates">Monday - Friday</p>
					<p id="times">9:00AM - 4:30PM</p>

				</div>
				
			</div>


		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Unity Shoppe, Inc.</p>
				</div>
				<div class="col-md-4">
					<p>110 W Sola St, Santa Barbara, CA 93101</p>
				</div>
				<div class="col-md-4">
					<p>Monday - Friday</p>
					<p>12:00PM - 5:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Grace Food Pantry</p>
				</div>
				<div class="col-md-4">
					<p>3869 State St, Santa Barbara, CA 93105</p>
				</div>
				<div class="col-md-4">
					<p>1st, 2nd, & 4th Saturday</p>
					<p>9:00AM - 10:30AM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Iglesia Bautista</p>
				</div>
				<div class="col-md-4">
					<p>736 W Islay St, Santa Barbara, CA 93101</p>
				</div>
				<div class="col-md-4">
					<p>Every Other Thursday</p>
					<p>4:00PM - 6:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Salvation Army</p>
				</div>
				<div class="col-md-4">
					<p>4849 Hollister Ave, Santa Barbara, CA 93111</p>
				</div>
				<div class="col-md-4">
					<p>Third or Fourth Thursday</p>
					<p>By Appointment (964-8738 x20)</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Good Shepherd Pantry</p>
				</div>
				<div class="col-md-4">
					<p>380 N Fairview Ave, Goleta, CA 93117</p>
				</div>
				<div class="col-md-4">
					<p>1st Saturday</p>
					<p>9:00AM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Catholic Charities (Carpenteria)</p>
				</div>
				<div class="col-md-4">
					<p>941 Walnut Ave, Carpinteria, CA 93013</p>
				</div>
				<div class="col-md-4">
					<p>Monday - Friday</p>
					<p>9:00AM - 12:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Food for Angels Isla Vista</p>
				</div>
				<div class="col-md-4">
					<p>781 Embarcadero del Mar, Goleta, CA 93117</p>
				</div>
				<div class="col-md-4">
					<p>Mondays</p>
					<p>3:45PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Catholic Charities (Isla Vista)</p>
				</div>
				<div class="col-md-4">
					<p>6550 Picasso Rd, Goleta, CA 93117</p>
				</div>
				<div class="col-md-4">
					<p>Thursdays</p>
					<p>3:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-12 big-font">
					<p><b>PREPARED MEALS</b></p>
					<br/>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p><b>Organization</b></p>
					<br/>
				</div>
				<div class="col-md-4">
					<p><b>Address</b></p>
					<br/>
				</div>
				<div class="col-md-4">
					<p><b>Hours</b></p>
					<br/>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Salvation Army</p>
				</div>
				<div class="col-md-4">
					<p>423 Chapala St, Santa Barbara, CA 93101</p>
				</div>
				<div class="col-md-4">
					<p>Monday - Saturday (Breakfast)/Saturday (Dinner)</p>
					<p>7:30AM/6:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Santa Barbara Rescue Mission</p>
				</div>
				<div class="col-md-4">
					<p>535 E Yananoli St, Santa Barbara, CA 93101</p>
				</div>
				<div class="col-md-4">
					<p>Daily</p>
					<p>5:40AM, 6:30PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>St Brigid's Fellowship</p>
				</div>
				<div class="col-md-4">
					<p>976 Embarcadero Del Mar, Goleta, CA 93117</p>
				</div>
				<div class="col-md-4">
					<p>Monday</p>
					<p>4:30PM - 5:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-12 big-font">
					<p><b>MOBILE FOOD PANTRIES</b></p>
					<br/>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p><b>Organization</b></p>
					<br/>
				</div>
				<div class="col-md-4">
					<p><b>Address</b></p>
					<br/>
				</div>
				<div class="col-md-4">
					<p><b>Hours</b></p>
					<br/>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Lower Westside</p>
				</div>
				<div class="col-md-4">
					<p>520 Wentworth Ave, Santa Barbara, CA 93101</p>
				</div>
				<div class="col-md-4">
					<p>1st Tuesday</p>
					<p>1:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Franklin Community Center</p>
				</div>
				<div class="col-md-4">
					<p>1136 E Montecito St, Santa Barbara, CA 93103</p>
				</div>
				<div class="col-md-4">
					<p>3rd Tuesday</p>
					<p>2:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>St. Joseph's Church</p>
				</div>
				<div class="col-md-4">
					<p>1532 Linden Ave, Carpinteria, CA 93013</p>
				</div>
				<div class="col-md-4">
					<p>1st Wednesday</p>
					<p>1:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-12 big-font">
					<p><b>MOBILE FARMERS MARKETS</b></p>
					<br/>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p><b>Organization</b></p>
					<br/>
				</div>
				<div class="col-md-4">
					<p><b>Address</b></p>
					<br/>
				</div>
				<div class="col-md-4">
					<p><b>Hours</b></p>
					<br/>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Westside Community Center</p>
				</div>
				<div class="col-md-4">
					<p>423 W Victoria St, Santa Barbara, CA 93101</p>
				</div>
				<div class="col-md-4">
					<p>Mondays</p>
					<p>1:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Franklin Neighborhood Center</p>
				</div>
				<div class="col-md-4">
					<p>1136 E Montecito St, Santa Barbara, CA 93103</p>
				</div>
				<div class="col-md-4">
					<p>Thursdays</p>
					<p>1:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Lower Westside</p>
				</div>
				<div class="col-md-4">
					<p>520 Wentworth Ave, Santa Barbara, CA 93101</p>
				</div>
				<div class="col-md-4">
					<p>3rd Tuesday</p>
					<p>1:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>St. Joseph's Church</p>
				</div>
				<div class="col-md-4">
					<p>1532 Linden Ave, Carpinteria, CA 93013</p>
				</div>
				<div class="col-md-4">
					<p>3rd Wednesday</p>
					<p>1:30PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Main Family Resource Center</p>
				</div>
				<div class="col-md-4">
					<p>5201 8th St, Carpinteria, CA 93013</p>
				</div>
				<div class="col-md-4">
					<p>4th Wednesday</p>
					<p>1:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-12 big-font">
					<p><b>NORTH COUNTY</b></p>
					<br/>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-12 big-font">
					<p><b>SUPPLEMENTAL GROCERY DISTRIBUTION</b></p>
					<br/>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p><b>Organization</b></p>
					<br/>
				</div>
				<div class="col-md-4">
					<p><b>Address</b></p>
					<br/>
				</div>
				<div class="col-md-4">
					<p><b>Hours</b></p>
					<br/>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Catholic Charities</p>
				</div>
				<div class="col-md-4">
					<p>607 W Main St, Ventura, CA 93001</p>
				</div>
				<div class="col-md-4">
					<p>Monday - Friday (Call First)</p>
					<p>9:00AM - 4:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Central Coast Rescue Mission</p>
				</div>
				<div class="col-md-4">
					<p>1207 N McClelland St, Santa Maria, CA 93454</p>
				</div>
				<div class="col-md-4">
					<p>Wednesday</p>
					<p>11:00AM - 12:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Coast Valley Worship Center</p>
				</div>
				<div class="col-md-4">
					<p>1265 W McCoy Ln, Santa Maria, CA 93455</p>
				</div>
				<div class="col-md-4">
					<p>Tuesday</p>
					<p>10:00AM - 11:00AM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Hope Community</p>
				</div>
				<div class="col-md-4">
					<p>3010 Skyway Dr, Santa Maria, CA 93455</p>
				</div>
				<div class="col-md-4">
					<p>3rd Thursday</p>
					<p>5:00PM - 6:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>OASIS - Orcutt Senior Center</p>
				</div>
				<div class="col-md-4">
					<p>420 Soares Ave, Santa Maria, CA 93455</p>
				</div>
				<div class="col-md-4">
					<p>3rd Thursday</p>
					<p>9:30AM - 11:30AM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Orcutt Presbyterian</p>
				</div>
				<div class="col-md-4">
					<p>993 Patterson Rd, Santa Maria, CA 93455</p>
				</div>
				<div class="col-md-4">
					<p>Friday</p>
					<p>2:00PM - 4:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Angel Food/Pacific Christian</p>
				</div>
				<div class="col-md-4">
					<p>1217 D So. Blosser, Santa Maria, CA 93458</p>
				</div>
				<div class="col-md-4">
					<p>Saturday</p>
					<p>11:00AM - 12:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Salvation Army</p>
				</div>
				<div class="col-md-4">
					<p>200 W Cook Ave, Santa Maria, CA 93454</p>
				</div>
				<div class="col-md-4">
					<p>Daily (Call First)</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Seventh Day Adventist</p>
				</div>
				<div class="col-md-4">
					<p>1775 S Thornburg St, Santa Maria, CA 93458</p>
				</div>
				<div class="col-md-4">
					<p>Every Other Tuesday</p>
					<p>1:00PM - 3:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>St. John Neumann Church</p>
				</div>
				<div class="col-md-4">
					<p>966 W Orchard St, Santa Maria, CA 93458</p>
				</div>
				<div class="col-md-4">
					<p>2nd Wednesday</p>
					<p>9:00AM - 10:00AM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>St. Peter's Episcopal Church</p>
				</div>
				<div class="col-md-4">
					<p>402 S Lincoln St, Santa Maria, CA 93458</p>
				</div>
				<div class="col-md-4">
					<p>Thursday</p>
					<p>8:30AM - 10:00AM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Victory Harvest Church of God</p>
				</div>
				<div class="col-md-4">
					<p>619 N Railroad Ave, Santa Maria, CA 93458</p>
				</div>
				<div class="col-md-4">
					<p>3rd Monday</p>
					<p>8:00AM - 10:00AM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Vineyard Church</p>
				</div>
				<div class="col-md-4">
					<p>200 S. East Ave, Santa Maria, CA 93454</p>
				</div>
				<div class="col-md-4">
					<p>Sunday</p>
					<p>9:15AM - 10:00AM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>People Helping People: Creekside Village</p>
				</div>
				<div class="col-md-4">
					<p>260 Gonzales Dr, Los Alamos, CA 93440</p>
				</div>
				<div class="col-md-4">
					<p>Every Other Thursday</p>
					<p>10:00AM - 11:00AM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>St. Patrick's Church</p>
				</div>
				<div class="col-md-4">
					<p>501 Fair Oaks Ave, Arroyo Grande, CA 93420</p>
				</div>
				<div class="col-md-4">
					<p>Tuesday - Thursday</p>
					<p>4:00PM - 5:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Nipomo Food Basket</p>
				</div>
				<div class="col-md-4">
					<p>197 W Tefft St, Nipomo, CA 93444</p>
				</div>
				<div class="col-md-4">
					<p>Monday, Tuesday, Thursday, Friday</p>
					<p>10:00AM - 1:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>People Helping People: Santa Ynez Mission</p>
				</div>
				<div class="col-md-4">
					<p>545 Alisal Rd, Solvang, CA 93463</p>
				</div>
				<div class="col-md-4">
					<p>Every Other Thursday</p>
					<p>11:00AM - 12:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-12 big-font">
					<p><b>PREPARED HOT MEALS</b></p>
					<br/>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p><b>Organization</b></p>
					<br/>
				</div>
				<div class="col-md-4">
					<p><b>Address</b></p>
					<br/>
				</div>
				<div class="col-md-4">
					<p><b>Hours</b></p>
					<br/>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Salvation Army</p>
				</div>
				<div class="col-md-4">
					<p>200 W Cook Ave, Santa Maria, CA 93454</p>
				</div>
				<div class="col-md-4">
					<p>Monday - Thursday/Friday</p>
					<p>11:30AM - 12:30PM/10:00AM - 11:00AM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Salvation Army</p>
				</div>
				<div class="col-md-4">
					<p>200 W Cook Ave, Santa Maria, CA 93454</p>
				</div>
				<div class="col-md-4">
					<p>Monday - Thursday/Friday</p>
					<p>11:30AM - 12:30PM/10:00AM - 11:00AM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>SM Foursquare</p>
				</div>
				<div class="col-md-4">
					<p>709 N Curryer St, Santa Maria, CA 93458</p>
				</div>
				<div class="col-md-4">
					<p>Monday</p>
					<p>5:00PM - 6:30PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Power of God Church</p>
				</div>
				<div class="col-md-4">
					<p>1503 No. McClelland St, Santa Maria, CA 93458</p>
				</div>
				<div class="col-md-4">
					<p>Friday</p>
					<p>5:00PM - 6:30PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Buellton Senior Center</p>
				</div>
				<div class="col-md-4">
					<p>164 W. Hwy 246, Buellton, CA</p>
				</div>
				<div class="col-md-4">
					<p>Monday - Friday</p>
					<p>12:00PM - 1:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Foursquare Church - Lompoc</p>
				</div>
				<div class="col-md-4">
					<p>125 No. C St, Lompoc, CA 93436</p>
				</div>
				<div class="col-md-4">
					<p>Monday</p>
					<p>4:00PM - 5:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>St Timothy Antiochian Orthodox Church</p>
				</div>
				<div class="col-md-4">
					<p>403 No. J St, Lompoc, CA 93436</p>
				</div>
				<div class="col-md-4">
					<p>Tuesday</p>
					<p>5:00PM - 5:45PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Bethany Lutheran Church</p>
				</div>
				<div class="col-md-4">
					<p>135 So. E St, Lompoc, CA</p>
				</div>
				<div class="col-md-4">
					<p>Wednesday</p>
					<p>12:00PM - 1:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Half Century Club</p>
				</div>
				<div class="col-md-4">
					<p>341 No. N St, Lompoc, CA  93436</p>
				</div>
				<div class="col-md-4">
					<p>Thursday</p>
					<p>5:00PM - 5:45PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>LaPurisma Concepcion Church</p>
				</div>
				<div class="col-md-4">
					<p>213 W Olive Avenue, Lompoc, CA 93436</p>
				</div>
				<div class="col-md-4">
					<p>Friday</p>
					<p>5:00PM - 5:45PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Trinity Church of the Nazarene</p>
				</div>
				<div class="col-md-4">
					<p>500 E North Ave, Lompoc, CA</p>
				</div>
				<div class="col-md-4">
					<p>Saturday</p>
					<p>2:00PM - 3:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>New Life Christian Center</p>
				</div>
				<div class="col-md-4">
					<p>816 No. C St, Lompoc, CA</p>
				</div>
				<div class="col-md-4">
					<p>3rd Saturday</p>
					<p>5:00PM - 5:45PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-12 big-font">
					<p><b>FOOD PANTRIES</b></p>
					<br/>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p><b>Organization</b></p>
					<br/>
				</div>
				<div class="col-md-4">
					<p><b>Address</b></p>
					<br/>
				</div>
				<div class="col-md-4">
					<p><b>Hours</b></p>
					<br/>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Buellton Senior Center</p>
				</div>
				<div class="col-md-4">
					<p>164 W Hwy 246, Buellton, CA 93427</p>
				</div>
				<div class="col-md-4">
					<p>Monday - Friday</p>
					<p>9:00AM - 3:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Beatitude House</p>
				</div>
				<div class="col-md-4">
					<p>267 Campodonico Ave, Guadalupe, CA 93434</p>
				</div>
				<div class="col-md-4">
					<p>Tuesday</p>
					<p>11:30AM - 12:45PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>New Hope Christian Church</p>
				</div>
				<div class="col-md-4">
					<p>213 N J St, Lompoc, CA 93436</p>
				</div>
				<div class="col-md-4">
					<p>Wednesday</p>
					<p>10:00AM - 2:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Catholic Charities Lompoc</p>
				</div>
				<div class="col-md-4">
					<p>329 N 2nd Street, Lompoc, CA 93436</p>
				</div>
				<div class="col-md-4">
					<p>Monday - Friday</p>
					<p>10:00AM - 12:00PM, 12:30PM - 3:30PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Coast Valley Worship - Lompoc</p>
				</div>
				<div class="col-md-4">
					<p>125 N C St, Lompoc, CA 93436</p>
				</div>
				<div class="col-md-4">
					<p>1st & 3rd Thursdays</p>
					<p>10:00AM - 12:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-12 big-font">
					<p><b>MOBILE FOOD PANTRIES</b></p>
					<br/>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p><b>Organization</b></p>
					<br/>
				</div>
				<div class="col-md-4">
					<p><b>Address</b></p>
					<br/>
				</div>
				<div class="col-md-4">
					<p><b>Hours</b></p>
					<br/>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Santa Rita Village</p>
				</div>
				<div class="col-md-4">
					<p>926 W Apricot Ave, Lompoc, CA 93436</p>
				</div>
				<div class="col-md-4">
					<p>4th Wednesday</p>
					<p>10:30AM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>First United Methodist Church</p>
				</div>
				<div class="col-md-4">
					<p>925 No. F St, Lompoc, CA 93436</p>
				</div>
				<div class="col-md-4">
					<p>3rd Monday</p>
					<p>3:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>New Cuyama</p>
				</div>
				<div class="col-md-4">
					<p>60 Newsome St, New Cuyama, CA 93254</p>
				</div>
				<div class="col-md-4">
					<p>3rd Wednesday</p>
					<p>12:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Family Service Center</p>
				</div>
				<div class="col-md-4">
					<p>4681 11th St, Guadalupe, CA 93434</p>
				</div>
				<div class="col-md-4">
					<p>Last Thursday</p>
					<p>12:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Ranch Acres</p>
				</div>
				<div class="col-md-4">
					<p>1050 Escalante St, Guadalupe, CA</p>
				</div>
				<div class="col-md-4">
					<p>4th Tuesday</p>
					<p>3:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-12 big-font">
					<p><b>MOBILE FARMERS MARKETS</b></p>
					<br/>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p><b>Organization</b></p>
					<br/>
				</div>
				<div class="col-md-4">
					<p><b>Address</b></p>
					<br/>
				</div>
				<div class="col-md-4">
					<p><b>Hours</b></p>
					<br/>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Christian Family Church</p>
				</div>
				<div class="col-md-4">
					<p>324 Suey Rd, Santa Maria, CA 93454</p>
				</div>
				<div class="col-md-4">
					<p>Tuesday</p>
					<p>11:00AM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Church at Crossroads</p>
				</div>
				<div class="col-md-4">
					<p>236 La Lata Dr, Buellton, CA 93427</p>
				</div>
				<div class="col-md-4">
					<p>2nd Wednesday</p>
					<p>12:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>New Hope Christian Church</p>
				</div>
				<div class="col-md-4">
					<p>213 N J St, Lompoc, CA 93436</p>
				</div>
				<div class="col-md-4">
					<p>4th Tuesday</p>
					<p>12:00PM</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid text-center border-row">
				<div class="col-md-4">
					<p>Los Alamos Senior Center</p>
				</div>
				<div class="col-md-4">
					<p>690 Bell St, Los Alamos, CA</p>
				</div>
				<div class="col-md-4">
					<p>2nd Wednesday</p>
					<p>3:00PM</p>
				</div>
			</div>
		</div>

		<footer class="footer">
			<div class="container">
				<div class="row-fluid text-center">
					<div class="col-xs-6">
						<a class="btn btn-default btn-lg" href="index.php" role="button">
							<img class="bw_logo_button" src="img/\logos\black_and_white\black_on_clear.png"/>
							Home
						</a>
					</div>
					<div class="col-xs-6">
						<a class="btn btn-default btn-lg" href="feedback.php" role="button">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							Feedback
						</a>
					</div>
				</div>
			</div>
		</footer>

		<!-- Load javascript at the end for speed -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>
