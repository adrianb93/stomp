<?php

namespace React\Tests\Stomp\Constraint;

use React\Stomp\Protocol\Frame;
use PHPUnit_Framework_Constraint as Constraint;

class FrameIsEqual extends Constraint
{
    protected $frame;

    public function __construct(Frame $frame)
    {
        $this->frame = $frame;
    }

    protected function matches($other)
    {
        return (string) $this->frame === (string) $other;
    }

    protected function failureDescription($other)
    {
        return sprintf(
          '%s is the same frame as "%s"',

          json_encode($other),
          json_encode($this->frame)
        );
    }

    public function toString()
    {
        return sprintf(
          'is the same frame as "%s"',

          json_encode($this->frame)
        );
    }
}
