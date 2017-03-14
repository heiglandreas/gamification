<?php

namespace Org_Heigl\GamificationTest;

use Org_Heigl\Gamification\Account;
use PHPUnit\Framework\TestCase;

class AccountTest extends TestCase
{
    /**
     * @covers Org_Heigl\Gamification\Account::add
     */
    public function testAddingAmount()
    {
        $account = new Account();

        $this->assertAttributeEquals(0, 'amount', $account);

        $account->add(5);

        $this->assertAttributeEquals(5, 'amount', $account);
    }
}

