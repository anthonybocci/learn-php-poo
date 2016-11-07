<?php

namespace Traits;

/**
 * A Trait in PHP can be used like an Interface by defining methods without
 * implement them, or like a "class" by defining and implementing methods.
 * Then, a class can use a Trait. Methods inherited by a Trait have precedence
 * and override methods inherited by a super class.
 */
trait TimeTrait
{
    public function birthDayTimestamp()
    {
        return $this->birthday()->getTimestamp();
    }
    
    public function birthday()
    {
        return new \DateTime();
    }
}