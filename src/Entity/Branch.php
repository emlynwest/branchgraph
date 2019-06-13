<?php
declare(strict_types = 1);

namespace BranchGraph\Entity;

class Branch
{
    /**
     * Name of the branch
     * @var string
     */
    protected $name;

    /**
     * Branch constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}