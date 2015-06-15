<?php

$temp = $_GET['q'];
$question = explode("!", $temp);

if($question[1]=="How are you?")
	$ans = "Hello, Kitty! I am fine.";
elseif($question[1]=="What is your name?")
	$ans = "Hello, Kitty! I am Nahid. Nice to meet you";
elseif($question[2]==" It’s a pleasure to meet you")
	$ans = "Hello, Kitty! Nice to meet you too";
	else
		$ans = "Hello, Kitty! How can I help you"
?>