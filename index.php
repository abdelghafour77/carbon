<?php
require 'vendor/autoload.php';

use Carbon\Carbon;


$now = Carbon::now();
$tomorrow = Carbon::tomorrow();
$yesterday = Carbon::yesterday();
$af = Carbon::now()->addDays(3);

echo "<hr/>";
echo "<h2>How to get date</h2>";
echo "<hr/>";
echo "Date now :" . Carbon::now();
echo "<hr/>";
echo "Date Today :" . Carbon::today();
echo "<hr/>";
echo "Date Yesterday :" . Carbon::yesterday();
echo "<hr/>";
echo "Date Tomorrow :" . Carbon::tomorrow();
echo "<hr/>";




echo "<hr/>";
echo "<h2>Get what you want from the time</h2>";
echo "<hr/>";

echo "<hr/>";
echo "Minute :$now->minute  Second :  $now->second";
echo "<hr/>";
echo "Month :" . $now->month;
echo "<hr/>";
echo "Month in letters :" . $now->localeMonth;
echo "<hr/>";
echo "Number of day of week :" . $now->dayOfWeek;
echo "<hr/>";
echo "Number week in month :" . $now->weekNumberInMonth;
echo "<hr/>";
echo "Number week of year :" . $now->weekOfYear;
echo "<hr/>";
echo "short name of day :" . $now->shortLocaleDayOfWeek;
echo "<hr/>";

echo "<hr/>";
echo "<h2>How to use time zone</h2>";
echo "<hr/>";
echo "<hr/>";

$x = Carbon::createFromFormat('Y-m-d H:i:s', '2023-01-01 14:55:55', 'Europe/London');

echo $x;
echo "<hr/>";
echo $x->tz('Europe/Paris');
echo "<hr/>";

echo "<hr/>";
echo "<h2>Get what you want from the time</h2>";
echo "<hr/>";

echo "<hr/>";
echo $af->diffForHumans();
