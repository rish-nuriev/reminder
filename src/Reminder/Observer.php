<?php

namespace Reminder;

use SplObserver;
use SplSubject;

abstract class Observer implements SplObserver
{
    protected $priority = 0;

    public function update(SplSubject $calendar)
    {
        if(method_exists($calendar, 'getDate')){
            return $this->displayInfo($calendar->getDate());
        }
        return True;
    }

    public function getPriority()
    {
        return $this->priority;
    }

    abstract public function displayInfo(string $date);
}