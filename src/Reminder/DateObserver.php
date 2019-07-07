<?php

namespace Reminder;

class DateObserver extends Observer
{
    protected $priority = 10;

    public function displayInfo(string $date)
    {
        echo 'Сегодня ' . $date ;
        echo '</br></br>';
    }
}