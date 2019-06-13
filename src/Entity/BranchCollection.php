<?php
declare(strict_types = 1);

namespace BranchGraph\Entity;

class BranchCollection
{
    /**
     * @var Branch[]
     */
    protected $branches;

    /**
     * BranchCollection constructor.
     * @param Branch[] $branches
     */
    public function __construct(array $branches = [])
    {
        $this->branches = $branches;
    }

    public function getBranch(string $name): ?Branch
    {
        if (!$this->hasBranch($name)) {
            return null;
        }

        return $this->branches[$name];
    }

    public function addBranch(Branch $branch): BranchCollection
    {
        $this->branches[$branch->getName()] = $branch;
        return $this;
    }

    public function hasBranch(string $name): bool
    {
        $names = $this->getNames();

        return array_key_exists($name, $names);
    }

    public function getNames(): array
    {
        return array_map(function(Branch $branch) {return $branch->getName();}, $this->branches);
    }

    public function count(): int
    {
        return count($this->branches);
    }
}