<?php

namespace EeKay\Abtest\Events;

class GoalCompleted
{
    public $goal;

    public function __construct($goal)
    {
        $this->goal = $goal;
    }
}
