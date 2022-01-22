<?php

namespace Kolgaev\TelegramBot\Api\Webhook;

trait GetWebhookInfo
{
    /**
     * Use this method to get current webhook status. Requires no parameters. On success,
     * returns a WebhookInfo object. If the bot is using getUpdates, will return an object
     * with the url field empty.
     * 
     * @see https://core.telegram.org/bots/api#getwebhookinfo
     */
    public function getWebhookInfo()
    {
        return $this->client()->post("getWebhookInfo");
    }
}