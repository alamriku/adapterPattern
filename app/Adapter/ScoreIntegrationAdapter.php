<?php

declare(strict_types=1);

namespace App\Adapter;

use App\Adapter\Component\OldIntegration;
use App\Adapter\Component\UserScore;

class ScoreIntegrationAdapter implements ScoreIntegrationTarget
{
    private OldIntegration $oldIntegration;

    public function __construct(OldIntegration $oldIntegration)
    {
        $this->oldIntegration = $oldIntegration;
    }


//Composition is a relationship between classes that allows one class to contain another.
//Composition should typically be favored above inheritance, as it’s more flexible.
//Composition allows for a more loosely coupled structure that avoids a fragile hierarchy of classes.
//Composition is a Has-A relationship. A car has a steering wheel.
//we use composition to wrap the old integration (object),
//which is basically hidden behind the ScoreIntegrationTarget interface.
//If you think about the class that will use it, the only thing it will know is the Interface.
//Inside the method, “getUserScore” is where the real adaptation of interfaces takes place.
//Adapter has a adaptee. The adaptee is  oldIntegration->getUserSore()
    public function getUserScore(string $uuid): UserScore
    {
        $rawUser = $this->oldIntegration->getUserScore($uuid);
        $formattedUser = new UserScore(
            $rawUser['uuid'],
            $rawUser['name'],
            $rawUser['score']
        );
        return $formattedUser;
    }
}