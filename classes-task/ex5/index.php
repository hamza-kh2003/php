<?php

class DateDifference {
    public function getDifference($date1, $date2) {
        $datetime1 = new DateTime($date1);
        $datetime2 = new DateTime($date2);
        $interval = $datetime1->diff($datetime2);

        return "Difference : {$interval->y} years, {$interval->m} months, {$interval->d} days";
    }
}

$object = new DateDifference();

echo $object->getDifference("1981-11-03", "2013-09-04");
?>