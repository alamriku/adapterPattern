<?php
declare(strict_types=1);

namespace App\Adapter\Component;


class UserScore
{
    private string $uuid;
    private string $name;
    private float $score;
    public function __construct(string $uuid, string $name, float $score)
    {
        $this->uuid = $uuid;
        $this->name = $name;
        $this->score = $score;
    }
    public function getUuid(): string
    {
        return $this->uuid;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function getScore(): float
    {
        return $this->score;
    }


}