<?php

namespace FeatureFlag;

interface FeatureFlagInterface
{
    public function getValue(string $key, $defaultValue);

    public function getUser();
}
