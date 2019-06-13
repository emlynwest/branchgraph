<?php

namespace BranchGraph\Test\Entity;

use BranchGraph\Entity\Branch;
use PHPUnit\Framework\TestCase;

class BranchTest extends TestCase
{
    public function testGetSet()
    {
        $branch = new Branch('');

        $this->assertEquals('', $branch->getName());

        $branch->setName('new');
        $this->assertEquals('new', $branch->getName());
    }
}