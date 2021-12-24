<?php

echo "<h1>Day 12</h1>";
echo "<a href='index.html' target='_top'>Back</a>";
echo "<br>Most code for this day found on: <a href='https://github.com/duemti/adventofcode/tree/master/2021/day_11_Dumbo_Octopus' target='_blank'>duemti's GitHub</a>";

$input =
	"LA-sn
LA-mo
LA-zs
end-RD
sn-mo
end-zs
vx-start
mh-mo
mh-start
zs-JI
JQ-mo
zs-mo
start-JQ
rk-zs
mh-sn
mh-JQ
RD-mo
zs-JQ
vx-sn
RD-sn
vx-mh
JQ-vx
LA-end
JQ-sn";

$caves = [];

foreach (array_filter(explode("\n", $input)) as $row) {
	list($a, $b) = explode("-", $row);
	$caves[$a][] = $b;
	$caves[$b][] = $a;
}

echo "<h3>Part 1</h3>";
echo "Available paths: " . getPaths($caves);

echo "<h3>Part 2</h3>";
echo "Available paths: " . getPaths($caves, true);


function getPaths(array $caves, bool $allow_twice = false): int
{
	$paths = [
		['start']
	];
	$count_paths = 0;

	while (!empty($paths)) {
		$current = array_pop($paths);

		foreach ($caves[$current[0]] as $next_cavern) {
			if (ctype_lower($next_cavern) && in_array($next_cavern, $current)) {
				if (false === $allow_twice || in_array("double", $current) || $next_cavern === "start")
					continue;
				$paths[] = array_merge([$next_cavern, "double"], $current);
			} elseif ($next_cavern === "end")
				$count_paths++;
			else
				$paths[] = array_merge([$next_cavern], $current);
		}
	}
	return $count_paths;
}
