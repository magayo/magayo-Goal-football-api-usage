<?
	// Replace with your API key
	$api_key = "hXJDjsp8I6RY";

	$league = "E";
	$season = 2016;
	
	$url = "https://www.magayogoal.com/api/standings.php?api_key=$api_key&league=$league&season=$season";
	
	$ch = curl_init();  
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15); 
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$json_string = curl_exec($ch);
	$parsed_json = json_decode($json_string);

	$error = $parsed_json->error;
	$teams = $parsed_json->teams;
	
	foreach ($teams as $temp_team) {
		$position = $temp_team->position;
		$team = $temp_team->team;
		$played = $temp_team->played;
		$win = $temp_team->win;
		$draw = $temp_team->draw;
		$lose = $temp_team->lose;
		$scored = $temp_team->scored;
		$conceded = $temp_team->conceded;
		$difference = $temp_team->difference;
		$points = $temp_team->points;

		echo "$position, $team, $played, $win, $draw, $lose, $scored, $conceded, $difference, $points, <br>";
	}

?>
