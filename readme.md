# DateRange PHP

Handy PHP class for useful date range related functions.

## Example
```
// Get today's start and end DateTime objects
$dateRangeToday = new DateRange();
$dateRangeToday->today();

// Use anywhere
echo 'From: ' . $dateRangeToday->from()->format('Y-m-d H:i:s') . PHP_EOL;
echo 'To: ' . $dateRangeToday->to()->format('Y-m-d H:i:s');
```