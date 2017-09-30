<?php
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];

echo "1) What is the capital of Kansas?<br>";
echo "You answered: ".$q1."<br>";
echo "Correct answer: Topeka<br><br>";

echo "2) What is the capital of the United States?<br>";
echo "You answered: ".$q2."<br>";
echo "Correct answer: DC<br><br>";

echo "3) When is this lab due?<br>";
echo "You answered: ".$q3."<br>";
echo "Correct answer: 10/2/2017<br><br>";

echo "4) Which choice is choice 3?<br>";
echo "You answered: ".$q4."<br>";
echo "Correct answer: 3<br><br>";

echo "5) What's 9+10?<br>";
echo "You answered: ".$q5."<br>";
echo "Correct answer: 19<br><br>";

$count = 0;
if($q1 == "Topeka")
	$count++;
if($q2 == "DC")
	$count++;
if($q3 == "10/2/2017")
	$count++;
if($q4 == "3")
	$count++;
if($q5 == "19")
	$count++;

echo "You answered ".$count." of the questions correctly.<br>";
echo "You got ".($count*20)." percent of the questions correct.<br>";
?>