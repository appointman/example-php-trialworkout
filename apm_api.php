<?php

    $api = 'https://www.appointman.net/api/';
    setlocale(LC_TIME, "de_DE");
    date_default_timezone_set('Europe/Berlin');

	if (strcmp($_GET["methodname"], "getEvents") == 0 ) {
		$providerId = "TODO_YOUR_PROVIDER_ID";

		$url = $api . "trialworkout/appointments/" . $providerId . "?categoryId=all&doubleDate=false";

		$jsonData = file_get_contents($url);
		$jsonDataObject = json_decode($jsonData);
		print_r( $jsonDataObject );
		usort($jsonDataObject, 'sortByDate');
		print_r( $jsonDataObject );

		foreach($jsonDataObject as $option) {
			echo '<option value=' . $option->courseId . '#' . $option->date . '>' . strftime("%A, %d.%m.%Y um %H:%M Uhr", $option->date) . '</option>';
		}
	}

function sortByDate($a, $b) {
	return strcmp($a->date, $b->date);
}
exit;