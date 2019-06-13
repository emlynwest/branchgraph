<?php

namespace BranchGraph\Test\Entity;

use BranchGraph\Entity\Branch;
use BranchGraph\Entity\BranchCollection;
use PHPUnit\Framework\TestCase;

class BranchCollectionTest extends TestCase
{
    public function testGetBranch()
    {
        $branch = new Branch('test');

        $collection = new BranchCollection([$branch]);

        $this->assertEquals($branch, $collection->getBranch('test'));
    }

    public function testGetNames()
    {
        $branch1 = new Branch('test');
        $branch2 = new Branch('test2');
        $branch3 = new Branch('test3');

        $collection = new BranchCollection([$branch1, $branch2, $branch3]);

        $this->assertEquals(
            ['test', 'test2', 'test3'],
            $collection->getNames()
        );
    }

    public function testHasBranch()
    {
        $collection = new BranchCollection();

        $this->assertFalse($collection->hasBranch('test'));

        $branch = new Branch('test');

        $collection->addBranch($branch);

        $this->assertTrue($collection->hasBranch('test'));
    }

    public function testCount()
    {
        $collection = new BranchCollection();

        $this->assertEquals(0, $collection->count());

        $collection->addBranch(new Branch('joe'));

        $this->assertEquals(1, $collection->count());
    }
}