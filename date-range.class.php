<?php

class DateRange
{
    var DateTimeZone $dtz;
    var DateTime $from;
    var DateTime $to;

    function __construct(?DateTimeZone $dtz = null)
    {
        $this->dtz = $dtz ?? new DateTimeZone('UTC');
    }

    function today()
    {
        $dt = new DateTime('now', $this->dtz);

        $dt->setTime(0, 0, 0);
        $this->from = clone $dt;

        $dt->setTime(23, 59, 59);
        $this->to = clone $dt;
    }

    function hour()
    {
        $dt = new DateTime('now', $this->dtz);

        $dt->setTime($dt->format('h'), 0, 0);
        $this->from = clone $dt;

        $dt->setTime($dt->format('h'), 59, 59);
        $this->to = clone $dt;
    }
}
