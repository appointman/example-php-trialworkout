<?php
$api = 'https://www.appointman.net/api/';

$providerId = "TODO_YOUR_PROVIDER_ID";

$eventSelection = $_GET["eventSelection"];
$courseId = $_GET["eventSelection"];
$lessonDate = $_GET["eventSelection"];
$gender = $_GET["gender"];
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$email = $_GET['email'];
$phone = $_GET['phone'];

$createLeadUrl = $api . 'leads/create';
$leadData = array(
	'firstname' => $firstname,
	'lastname' => $lastname,
	'mail' => $email,
	'salutation' => $gender,
	'mobile' => $phone,
	'providerId' => $providerId
);
$lead = post(json_encode($leadData), $createLeadUrl);

$joinUrl = $api . 'leads/join/consumer/' . $courseId . '/' . $lessonDate . '/false/false';
$lead = post($lead, $joinUrl);

function post($data, $url) {
	$options = array(
		'http' => array(
			'header' => "Content-type: application/json\r\n",
			'method' => 'POST',
			'content' => $data
		)
	);
	$context = stream_context_create( $options );
	$result = file_get_contents( $url, false, $context );
	if ( $result === FALSE ) { /* Handle error */
		echo "error calling: " . $url;
	}

	echo $result;
	return $result;
}