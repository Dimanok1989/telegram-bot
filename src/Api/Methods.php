<?php

namespace Kolgaev\TelegramBot\Api;

trait Methods
{
    use ForwardMessage,
        GetMe,
        GetMyCommands,
        GetWebhookInfo,
        SendMessage;
}
