# DateRange PHP

Handy PHP class for useful date range related functions.

## Examples
### Get today's start and end DateTime objects
```php
// Instantiate
$dateRangeToday = new DateRange();
$dateRangeToday->day();

// Use anywhere
echo 'From: ' . $dateRangeToday->from->format('Y-m-d H:i:s') . PHP_EOL;
echo 'To: ' . $dateRangeToday->to->format('Y-m-d H:i:s');
```
### Use custom timezone
By default `DateRange` uses `UTC` timezone. You can customize that by passing another timezone:
```php
// Instantiate
$dtz = new DateTimeZone('GMT');
$dateRangeToday = new DateRange($dtz);
$dateRangeToday->day();

// Use anywhere
echo 'From: ' . $dateRangeToday->from->format('Y-m-d H:i:s') . PHP_EOL;
echo 'To: ' . $dateRangeToday->to->format('Y-m-d H:i:s');
```

## Documentation
### Initantiate
```php
$dateRange = new DateRange();
```
#### In Custom Timezone
```php
$dtz = new DateTimeZone('GMT');
$dateRange = new DateRange($dtz);
```
### Get Date Range
```php
// Get "today" as date range
$dateRangeToday = new DateRange();
$dateRangeToday->day();
echo 'From: ' . $dateRangeToday->from->format('Y-m-d H:i:s') . PHP_EOL;
echo 'To: ' . $dateRangeToday->to->format('Y-m-d H:i:s');

// Specify "hour" as the date range to get from/to DateTime objects for the current hour
$dateRangeHour = new DateRange();
$dateRangeHour->hour();
echo 'From: ' . $dateRangeHour->from->format('Y-m-d H:i:s') . PHP_EOL;
echo 'To: ' . $dateRangeHour->to->format('Y-m-d H:i:s');

// You can also specify offsets to get custom date ranges. For example, to get yesterday's date range, offset the day() function by -1 as follows:
$dateRangeYesterday = new DateRange();
$dateRangeYesterday->day(-1);
echo 'From: ' . $dateRangeYesterday->from->format('Y-m-d H:i:s') . PHP_EOL;
echo 'To: ' . $dateRangeYesterday->to->format('Y-m-d H:i:s');
```
### Using `from` and `to`
The `from` and `to` methods provide `DateTime` objects of the date range you specified.
```php
echo $dateRange->from->format('Y-m-d H:i:s');
echo $dateRange->to->format('Y-m-d H:i:s');
```