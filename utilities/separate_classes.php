<?php

/**
 * @author Ryan Winchester (fungku)
 * @license Apache 2.0
 */

require_once "includes/functions.php";
require "includes/ClassSeparator.php";

$version = "2015_2";

$file = base_path() . "/original/PHPToolkit_{$version}/PHPToolkit/NetSuiteService.php";

$separator = new ClassSeparator($file);

if ($separator->separate()) {
    echo PHP_EOL. 'Good!' .PHP_EOL;
} else {
    echo PHP_EOL. 'Bad!' .PHP_EOL;
}
