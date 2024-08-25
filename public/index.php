<?php

use FeatureFlag\ConfigCat;
use FeatureFlag\FeatureFlagAdapter;

require '../vendor/autoload.php';

$sdkKey = 'configcat-sdk-1/UrfcCBz0TEuMcF0ZAS4uQA/kCUMwds9PEWvKKOma-qOMw';
$user = array("user_id" => "teste123");

$featureFlag = new FeatureFlagAdapter(new ConfigCat($sdkKey, $user));

$myFeatureFlag = $featureFlag->getValue('my-feature', false);

var_dump($myFeatureFlag);
