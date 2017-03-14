<?php

namespace Org_Heigl\Gamification;

class Account
{
    private $amount = 0;

    public function add(int $amount)
    {
        $this->amount = $this->amount + $amount;
    }

    public function sub(int $amount)
    {
        $this->amount = $this->amount - $amount;
    }
}
