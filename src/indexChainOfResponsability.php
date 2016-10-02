<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Didando8a\Patterns\Abstracts\AbstractEmailHandler;

$email = "I need my car repaired";

echo AbstractEmailHandler::handle($email) . "\n";

