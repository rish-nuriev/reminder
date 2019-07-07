<?php

use Reminder\{Calendar, BirthdayObserver, HolidayObserver, DateObserver};

require_once 'vendor/autoload.php';

$calendar = new Calendar();
$calendar->attach(new BirthdayObserver());
$calendar->attach(new HolidayObserver());
$calendar->attach(new DateObserver());
$calendar->notify();