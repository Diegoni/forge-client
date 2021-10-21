<?php
require_once('vendor/autoload.php');

Autodesk\Auth\Configuration::getDefaultConfiguration()
    ->setClientId('90Wu7ak6vUw5tqAvk1O1cbXmhs1mmcwb')
    ->setClientSecret('ENoqH4GEaezLdjTT');

$twoLeggedAuth = new Autodesk\Auth\OAuth2\TwoLeggedAuth();
$twoLeggedAuth->setScopes(['bucket:read']);

$twoLeggedAuth->fetchToken();

$tokenInfo = [
    'applicationToken' => $twoLeggedAuth->getAccessToken(),
    'expiry'           => time() + $twoLeggedAuth->getExpiresIn(),
];