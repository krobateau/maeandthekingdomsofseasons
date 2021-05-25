<?php
/*
Template Name: Character Table
*/
$characterName = $_GET["name"];
$characterData = file_get_contents('https://script.google.com/macros/s/AKfycbwk4hdhsehHOSd_zUdZ2hXvNsTU0TNNQbKM3eX7vwGYhDixptc0/exec?name=' . $characterName);
echo "<code>$characterData</code>";
?>