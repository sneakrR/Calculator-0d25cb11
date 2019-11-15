<?php

echo ("Welke operatie wil je uitvoeren? (+, -)") . PHP_EOL;

$operatie = readline ("");
echo ("Eerste getal?") . PHP_EOL;
$first = readline("");
echo ("Tweede getal") . PHP_EOL;
$second = readline ("");

if ($operatie == "+") {
	echo ($first + $second);
} else {
	echo ( $first - $second);
}
