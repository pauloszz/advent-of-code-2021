<?php

echo "<h1>Day 11</h1>";
echo "<a href='index.html' target='_top'>Back</a>";

global $lines;

$lines =
	"1254117228
4416873224
8354381553
1372637614
5586538553
7213333427
3571362825
1681126243
8718312138
5254266347";

$lines = str_replace("\r", ",", $lines);
$lines = str_replace("\n", ",", $lines);
$lines = explode(",", $lines);

foreach ($lines as $i => &$line) {
	$line = str_split($line);
	foreach ($line as &$number) {
		$number = (int)$number;
	}
}

echo "<h3>Part 1</h3>";

$flashCount = 0;
$checkFlash = true;
$checkForAllFlash = true;
$allFlashStep = 0;

for ($s = 0; $s < 500; $s++) {
	if (!$checkForAllFlash && !$checkFlash) {
		break;
	}

	$allFlashCount = 0;
	for ($i = 0; $i < 10; $i++) {
		for ($k = 0; $k < 10; $k++) {
			$lines[$i][$k]++;
			if ($lines[$i][$k] === 10) {
				addAround($lines, $i, $k);
			}
		}
	}
	foreach ($lines as &$line) {
		foreach ($line as &$number) {
			if ($number > 9) {
				if ($checkForAllFlash) {
					$allFlashCount++;
				}
				if ($checkFlash) {
					$flashCount++;
				}
				$number = 0;
			}
		}
	}

	if ($s === 99) {
		$checkFlash = false;
	}

	if ($allFlashCount === 100) {
		$checkForAllFlash = false;
		$allFlashStep = $s + 1;
	}
}

echo "Number of flashes: " . $flashCount;

echo "<h3>Part 2</h3>";
echo "All flashing together for first time at step: " . $allFlashStep;

function addAround(&$lines, $row, $index): bool
{
	if (key_exists($row - 1, $lines)) {
		if (key_exists($index - 1, $lines[$row - 1])) {
			$lines[$row - 1][$index - 1]++;
			if ($lines[$row - 1][$index - 1] === 10) {
				addAround($lines, $row - 1, $index - 1);
			}
		}
		if (key_exists($index + 1, $lines[$row - 1])) {
			$lines[$row - 1][$index + 1]++;
			if ($lines[$row - 1][$index + 1] === 10) {
				addAround($lines, $row - 1, $index + 1);
			}
		}
		$lines[$row - 1][$index]++;
		if ($lines[$row - 1][$index] === 10) {
			addAround($lines, $row - 1, $index);
		}
	}

	if (key_exists($index - 1, $lines[$row])) {
		$lines[$row][$index - 1]++;
		if ($lines[$row][$index - 1] === 10) {
			addAround($lines, $row, $index - 1);
		}
	}
	if (key_exists($index + 1, $lines[$row])) {
		$lines[$row][$index + 1]++;
		if ($lines[$row][$index + 1] === 10) {
			addAround($lines, $row, $index + 1);
		}
	}


	if (key_exists($row + 1, $lines)) {
		if (key_exists($index - 1, $lines[$row + 1])) {
			$lines[$row + 1][$index - 1]++;
			if ($lines[$row + 1][$index - 1] === 10) {
				addAround($lines, $row + 1, $index - 1);
			}
		}
		if (key_exists($index + 1, $lines[$row + 1])) {
			$lines[$row + 1][$index + 1]++;
			if ($lines[$row + 1][$index + 1] === 10) {
				addAround($lines, $row + 1, $index + 1);
			}
		}
		$lines[$row + 1][$index]++;
		if ($lines[$row + 1][$index] === 10) {
			addAround($lines, $row + 1, $index);
		}
	}

	return true;
}
