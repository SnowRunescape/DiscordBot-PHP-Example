<?php

namespace Bot\Plugin\Commands;

use DiscordPHP\Abstracts\DiscordCommand;

class Ping extends DiscordCommand
{
    public function getCommand()
    {
        return "!ping";
    }

    public function onInit() {}

    public function run(array $event, array $args)
    {
        $this->discord->discordAPI->createMessage(
            "Pong!",
            $event["channel_id"]
        );
    }
}
