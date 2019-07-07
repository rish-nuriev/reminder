<?php

namespace Reminder;

use SplSubject;
use SplObserver;

class Calendar implements SplSubject
{
    protected $observers = [];
    protected $orderList = [];
    protected $date;

    public function __construct()
    {
        $this->date = date('Y-m-d');
    }

    public function attach(SplObserver $observer)
    {
        $observerKey = spl_object_hash($observer);
        $this->observers[$observerKey] = $observer;
        $this->orderList[$observerKey] = $observer->getPriority();
        asort($this->orderList);
    }

    public function detach(SplObserver $observer)
    {
        $observerKey = spl_object_hash($observer);
        unset($this->observers[$observerKey]);
        unset($this->orderList[$observerKey]);
    }

    public function notify()
    {
        foreach ($this->orderList as $key => $value) {
            $this->observers[$key]->update($this);
        }
    }

    public function getDate()
    {
        return $this->date;
    }
}