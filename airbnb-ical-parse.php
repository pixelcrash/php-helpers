<?php
// Airbnb doesnt allow a get_file_content() request -> Error 403
// You have to use curl and fake the user agent
// This is a script I found on the Airbnb Forum by user: Chris in Eindhoven, Netherlands
// It works great

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.airbnb.com/calendar/ical/xxxxxxx.ics?s=xxxxxx");

//return the transfer as a string, here I fake the user agent, AirBNB thinks it's a request from Firefox / mozilla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

// $output contains the output string
$output = curl_exec($ch);

// close curl resource to free up system resources
curl_close($ch);

echo $output;

?>
