<?php
use App\Adapter\Component\OldIntegration;
use App\Adapter\ScoreIntegrationAdapter;
require_once 'vendor/autoload.php';
$oldIntegration = new OldIntegration;
$integrationAdapter = new ScoreIntegrationAdapter($oldIntegration);
$userUuid = 'e605fa5f-f805-4ca8-ade2-908c8d5a8c4c';
$userScore = $integrationAdapter->getUserScore($userUuid);
echo "<pre>";
print_r($userScore);
echo "</pre>";
die();


