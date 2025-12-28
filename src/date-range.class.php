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

    function day(?int $offsetDays = 0)
    {
        $dt = new DateTime('now', $this->dtz);
        if ($offsetDays !== 0)
            $dt->add(new DateInterval('P' . $offsetDays . 'D'));

        $dt->setTime(0, 0, 0);
        $this->from = clone $dt;

        $dt->setTime(23, 59, 59);
        $this->to = clone $dt;
    }

    function hour(?int $offsetHours = 0)
    {
        $dt = new DateTime('now', $this->dtz);
        if ($offsetHours !== 0)
            $dt->add(new DateInterval('PT' . $offsetHours . 'H'));

        $dt->setTime($dt->format('h'), 0, 0);
        $this->from = clone $dt;

        $dt->setTime($dt->format('h'), 59, 59);
        $this->to = clone $dt;
    }

    function month(?int $offsetMonths = 0)
    {
        $dt = new DateTime('now', $this->dtz);
        if ($offsetMonths !== 0)
            $dt->add(new DateInterval('P' . $offsetMonths . 'M'));

        $dt->setDate($dt->format('Y'), $dt->format('m'), 0);
        $dt->setTime(0, 0, 0);
        $this->from = clone $dt;

        $dt->setTime(23, 59, 59);
        $this->to = clone $dt;
    }
}
