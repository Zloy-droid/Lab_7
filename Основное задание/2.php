<?php

function declension_hours($hours) {
    if ($hours % 10 == 1 && $hours % 100 != 11) {
        return "час";
    } elseif ($hours % 10 >= 2 && $hours % 10 <= 4 && !($hours % 100 >= 12 && $hours % 100 <= 14)) {
        return "часа";
    } else {
        return "часов";
    }
}

function declension_minutes($minutes) {
    if ($minutes % 10 == 1 && $minutes % 100 != 11) {
        return "минута";
    } elseif ($minutes % 10 >= 2 && $minutes % 10 <= 4 && !($minutes % 100 >= 12 && $minutes % 100 <= 14)) {
        return "минуты";
    } else {
        return "минут";
    }
}

function get_time_with_declension() {
    $currentTime = getdate();
    
    $hours = $currentTime['hours'];
    $minutes = $currentTime['minutes'];
    
    $timeString = "$hours " . declension_hours($hours) . " $minutes " . declension_minutes($minutes);
    
    return $timeString;
}

echo get_time_with_declension();

?>
