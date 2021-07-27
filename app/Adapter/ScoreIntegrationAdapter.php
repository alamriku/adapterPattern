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


//we use composition to wrap the old integration (object),
//which is basically hidden behind the ScoreIntegrationTarget interface.
//If you think about the class that will use it, the only thing it will know is the Interface.
//Inside the method, “getUserScore” is where the real adaptation of interfaces takes place.
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