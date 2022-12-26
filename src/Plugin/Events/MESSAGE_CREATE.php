<?php

namespace Bot\Plugin\Events;

use DiscordPHP\Abstracts\DiscordEventHandler;
use DiscordPHP\Logging\Logger;

class MESSAGE_CREATE extends DiscordEventHandler
{
    public function onInit() {}

    public function run(array $event)
    {
        Logger::Info("New Message Created :D");
    }
}
