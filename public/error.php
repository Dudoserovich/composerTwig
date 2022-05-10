<?php

require_once join(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'vendor', 'autoload.php']);

$logger = new LoggerWrapper("Error Logger");
$logger->error("Someone found \"error.php\"");