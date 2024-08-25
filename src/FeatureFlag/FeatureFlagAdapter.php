<?php

namespace FeatureFlag;

class FeatureFlagAdapter
{
    private featureFlagInterface $featureFlagInterface;

    public function __construct(FeatureFlagInterface $featureFlagInterface)
    {
        $this->featureFlagInterface = $featureFlagInterface;
    }

    public function getValue(string $key, $defaultValue)
    {
        return $this->featureFlagInterface->getValue($key, $defaultValue);
    }

    public function getUser()
    {
        return $this->featureFlagInterface->getUser();
    }
}
