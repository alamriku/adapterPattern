<?php
declare(strict_types=1);
namespace App\Adapter;
use App\Adapter\Component\UserScore;


interface ScoreIntegrationTarget
{
    public function getUserScore(string $uuid): UserScore;
}