# DateRange PHP

Handy PHP class for useful date range related functions.

## Examples
### Get today's start and end DateTime objects
```
// Instantiate
$dateRangeToday = new DateRange();
$dateRangeToday->today();

// Use anywhere
echo 'From: ' . $dateRangeToday->from()->format('Y-m-d H:i:s') . PHP_EOL;
echo 'To: ' . $dateRangeToday->to()->format('Y-m-d H:i:s');
```
### Use custom timezone
By default `DateRange` uses `UTC` timezone. You can customize that by passing another timezone:
```
// Instantiate
$dtz = new DateTimeZone('America/New_York');
$dateRangeToday = new DateRange($dtz);
$dateRangeToday->today();

// Use anywhere
echo 'From: ' . $dateRangeToday->from()->format('Y-m-d H:i:s') . PHP_EOL;
echo 'To: ' . $dateRangeToday->to()->format('Y-m-d H:i:s');
```