<?
	// Replace with your API key
	$api_key = "hXJDjsp8I6RY";

	$league = "E";
	$match_id = 9303;
	
	$url = "https://www.magayogoal.com/api/scores.php?api_key=$api_key&league=$league&match_id=9303";
	
	$ch = curl_init();  
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15); 
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$json_string = curl_exec($ch);
	$parsed_json = json_decode($json_string);

	$error = $parsed_json->error;
	$status = $parsed_json->status;
	$home = $parsed_json->home;
	$away = $parsed_json->away;
	$home_score = $parsed_json->home_score;
	$away_score = $parsed_json->away_score;
	
	echo "$error<br>";
	echo "$match_id, $status, $home, $away, $home_score, $away_score<br>";

?>
