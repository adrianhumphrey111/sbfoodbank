<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
		<meta name="mobile-web-app-capable" content="yes"/>
		<meta name="apple-mobile-web-app-capable" content="yes"/>
		<title>Ally - Food Bank Partners</title>
		<meta name="description" content="An app to help people find food in Santa Barbara"/>
		<meta name="author" content="Westmont Inspired Computing Lab"/>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/styles.css"/>
	</head>
	<body>
		<div id="header" class="container">
			<div class="page-header">
				<h3>Map Many</h3>
				
			</div>
		</div>
		<div id="map">
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
		<script>
      		function ally_initMap(){
				// A little jquery hacking to get the size that the map should be
				var b_h = $(window).height();
				var h_h = $("#header").height();
				var f_h = b_h- $("footer.footer").position().top;
				$("#map").height(b_h-h_h-f_h);


				<?php 

				// Pull the where parameter off the URL, default to "" if it's
				// not present
				$query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
				parse_str($query, $params);
				$where = isset($params['where']) ? $params['where'] : "";
				

				class TableRows extends RecursiveIteratorIterator { 
    				function __construct($it) { 
        				parent::__construct($it, self::LEAVES_ONLY); 
    				}

    				function current() {
						

						if(parent::key() == "Distribution Site Address"){
							return parent::current().",";
						}
						if(parent::key() == "City"){
							return parent::current().",";
						}
						if(parent::key() == "State"){
							return parent::current().",";
						}
						if(parent::key() == "Zip"){
							return parent::current();
						}
						return "";
    				}

    				function beginChildren() { 
        				echo "\""; 
    				} 

    				function endChildren() { 
       					echo "\"," . "\n";
    				} 
				} 

				$servername = "localhost";
				$username = "ally_user";
				$password = "ally_user_password";
				$dbname = "ally";

				try {
    				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					//If $where wasn't specified in the url plot the first 100
					if(is_null($where) || ($where=="")){
    					$stmt = $conn->prepare("SELECT `Distribution Site Address`,City,State,Zip FROM sites LIMIT 100"); 
					}
					else{
						$stmt = $conn->prepare("SELECT `Distribution Site Address`,City,State,Zip FROM sites WHERE ". urldecode($where)); 
					}
    				$stmt->execute();
    				echo "var locations_to_plot=[";

    				// set the resulting array to associative
    				$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    				foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        				echo $v;
    				}
    				echo "];";
				}
				catch(PDOException $e) {
    				echo "Error: " . $e->getMessage();
				}
				$conn = null;
				?>

				
				
        		var map = new google.maps.Map(document.getElementById('map'), {
					zoom: 4,
					center: {lat:34.4208,lng:-119.6982}
				});
				for(var i=0;i<locations_to_plot.length;i++){
					var x=reverse_geocode(locations_to_plot[i]);
					new google.maps.Marker({position: x,map: map});

				}
			}
		</script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAivupYZInhP_RsRvPW5NByQy7qcCcoa0U&callback=ally_initMap"></script>
	</body>
</html>
