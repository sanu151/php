<?php
// General
// d: Day of the month, 2 digits with leading zeros (01 to 31)
// D: Day of the week, text, 3 letters (Mon to Sun)
// j: Day of the month without leading zeros (1 to 31)
// l: Day of the week, text, full name (Sunday to Saturday)
// N: ISO-8601 numeric representation of the day of the week (1 for Monday to 7 for Sunday)
// S: English ordinal suffix for the day of the month (st, nd, rd, th)   
// w: Day of the week, numeric (0 for Sunday to 6 for Saturday)
// W: ISO-8601 week number of year, weeks starting on Monday (01-53)
// F: Month name, full (January to December)
// m: Month, numeric, with leading zeros (01 to 12)
// M: Month name, short (Jan to Dec)
// n: Month, numeric without leading zeros (1 to 12)
// t: Number of days in the given month
// L: Whether it's a leap year (1 if it is a leap year, 0 otherwise)
// o: ISO-8601 year number
// Y: Year, numeric, four digits (e.g., 2024)
// y: Year, numeric, two digits (e.g., 24)

// Time
// a: Lowercase Ante meridiem and Post meridiem (am or pm)
// A: Uppercase Ante meridiem and Post meridiem (AM or PM)
// g: Hour, 12-hour format without leading zeros (1 to 12)   
// G: Hour, 24-hour format without leading zeros (0 to 23)
// h: Hour, 12-hour format with leading zeros (01 to 12)   
// H: Hour, 24-hour format with leading zeros (00 to 23)
// i: Minutes, with leading zeros (00 to 59)
// s: Seconds, with leading zeros (00 to 59)
// u: Microseconds
// e: Timezone identifier
// I: Daylight Saving Time (1 if Daylight Saving Time is in effect, 0 otherwise)
// O: Difference to Greenwich time (GMT) in hours
// P: Difference to Greenwich time (GMT) with colon between hour and minute (e.g., -08:00)
// T: Timezone abbreviation
// Z: Timezone offset in seconds from UTC
date_default_timezone_set('Asia/Kolkata');
echo date('d / F(m) / Y [h:i:s a] - l' );
echo "<br>";
$str = strtotime('23-07-1987 20:00:00');
echo date('d - F - Y h:i:s-a', $str);

?>