<?php
$temp = $_GET['q'];
$question = explode(" ", $temp);
$position = sizeof($question) - 1;
$loc = $question[$position];
$t = explode("?", $loc);
$city = $t[0];
$term = $question[$position-2];

$url='http://api.openweathermap.org/data/2.5/weather?q='.$city;
$json = file_get_contents($url);
$array = json_decode($json, true);
if($question[0]=="What"){
	if($term=="temperature")
		$res=$array['main']['temp']."K";
	if($term=="humidity")
		$res=$array['main']['humidity'];
}
elseif($question[0]=="Is")
{
	$samp=$array['weather'][0]['main'];
	if($question[2]==$samp)
		$res="Yes";
	else
		$res="No";
}
else
	$res = "Please, check question formate";

$ans = array('answer'=>$res);
header('Content-Type: application/json');
echo json_encode($ans);
?>