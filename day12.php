<?php

echo "<h1>Day 11</h1>";
echo "<a href='k.html' target='_top'>Back</a>";

$input = "
fs-end
he-DX
fs-he
start-DX
pj-DX
end-zg
zg-sl
zg-pj
pj-he
RW-he
fs-DX
pj-RW
zg-RW
start-pj
he-WI
zg-he
pj-fs
start-RW";

$input = str_replace("\r", ",", $input);
$input = str_replace("\n", ",", $input);
$input = explode(",", $input);

echo "<pre>";
print_r($input);
echo "<pre>";

echo "<h3>Part 1</h3>";
