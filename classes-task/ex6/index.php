<?php

class DateFormatter {
    public function convertStringToDate($dateString) {
        // Input '12-08-2004' is interpreted as m-d-Y (December 8, 2004)
        $date = DateTime::createFromFormat('m-d-Y', $dateString);
        if ($date) {
            return $date->format('Y-m-d');
        } else {
            return "Invalid date format";
        }
    }
}

$object=new DateFormatter();

echo $object->convertStringToDate("12-08-2004");
?>