<?php

namespace FeatureFlag;

class ConfigCat implements FeatureFlagInterface
{
    private $client;
    private $User;

    public function __construct(string $sdkKey, array $userData)
    {
        $this->client = new \ConfigCat\ConfigCatClient($sdkKey, [
            \ConfigCat\ClientOptions::LOG_LEVEL => \ConfigCat\Log\LogLevel::INFO,
         ]);

        $this->User = new \ConfigCat\User($userData["user_id"]);
    }

    public function getValue(string $key, $defaultValue)
    {
        return $this->client->getValue($key, $defaultValue, $this->User);
    }

    public function getUser()
    {
        return $this->User;
    }
}
