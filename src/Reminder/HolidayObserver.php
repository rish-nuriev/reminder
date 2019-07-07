<?php

namespace Reminder;

class HolidayObserver extends Observer
{
    protected $priority = 20;

    protected $holidays = [
        '02-23' => ['День защитника Отечества'],
        '03-08' => ['Международный женский день'],
        '05-09' => ['День Победы'],
        '06-12' => ['День России'],
    ];

    public function displayInfo(string $date)
    {
        $holiday = substr($date, 5);
        if(isset($this->holidays[$holiday])){
            echo 'Сегодня есть следующие праздники: ' . implode(',', $this->holidays[$holiday]);
        } else {
            echo 'Сегодня нет особых праздников';
        }
        echo '</br></br>';
    }
}