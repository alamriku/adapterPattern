<?php


namespace App\Adapter\Component;


class OldIntegration
{
    public function getUserScore($uuid)
    {
        $response = [
            'uuid' => '7de2a62e-7628-4d2f-a02b-fe395c5ce85b',
            'name' => 'Gabriel Anhaia',
            'score' => 65.2
        ];
        return $response;
    }

}