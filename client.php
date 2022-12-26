<?php

require_once "vendor/autoload.php";

use DiscordPHP\Discord;
use Bot\Plugin\Commands\Ping;
use Bot\Plugin\Events\MESSAGE_CREATE;

\Dotenv\Dotenv::createUnsafeImmutable(__DIR__)->safeLoad();

$discord = new Discord(getenv("DISCORD_TOKEN"));

$discord->event->registerEventHandler(new MESSAGE_CREATE($discord));

$discord->event->registerCommand(new Ping($discord));

$discord->run();
