<?php

namespace Reminder;

class BirthdayObserver extends Observer
{
    protected $priority = 30;

    protected $datesOfBirth = [
        '02-07' => ['Лера'],
        '04-16' => ['Рома'],
        '08-24' => ['Лена'],
        '09-02' => ['Леонид'],
    ];

    public function displayInfo(string $date)
    {
        $birthday = substr($date, 5);
        if(isset($this->datesOfBirth[$birthday])){
            echo 'Сегодня День Рождения у следующих людей: ' . implode(',', $this->datesOfBirth[$birthday]);
            echo 'Рекомендуем отправить поздравления';
        } else {
            echo 'Reminder не обнаружил в списке людей у которых сегодня День Рождения';
        }
        echo '</br></br>';
    }
}