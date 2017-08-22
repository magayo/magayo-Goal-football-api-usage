<?
	// Replace with your API key
	$api_key = "hXJDjsp8I6RY";

	$league = "E";
	$season = 2017;
	$date = "2017-08-19";
	
	$url = "https://www.magayogoal.com/api/fixtures.php?api_key=$api_key&league=$league&season=$season&date=$date";
	
	$ch = curl_init();  
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15); 
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$json_string = curl_exec($ch);
	$parsed_json = json_decode($json_string);

	$error = $parsed_json->error;
	$matches = $parsed_json->matches;
	
	foreach ($matches as $match) {
		$match_id = $match->match_id;
		$time = $match->time;
		$home = $match->home;
		$away = $match->away;

		echo "$match_id, $time, $home, $away<br>";
	}

?>
