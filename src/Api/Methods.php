<?php

namespace Kolgaev\TelegramBot\Api;

trait Methods
{
    use ForwardMessage,
        GetMe,
        GetWebhookInfo,
        SendMessage;
}
