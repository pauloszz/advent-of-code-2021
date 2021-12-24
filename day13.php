<?php

echo "<h1>Day 12</h1>";
echo "<a href='index.html' target='_top'>Back</a>";

$input =
	"6,10
0,14
9,10
0,3
10,4
4,11
6,0
6,12
4,1
0,13
10,12
3,4
3,0
8,4
1,10
2,14
8,10
9,0

fold along y=7
fold along x=5";

$input = str_replace("\r", ",", $input);
$input = str_replace("\n", ",", $input);
$input = explode(",", $input);

echo "<pre>";
print_r($input);
echo "</pre>";
