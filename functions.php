<?php

$todayDate = date('M-d-Y h:i');
date_default_timezone_set("America/Chicago");
function todayDate(){
    global $todayDate;
    echo ("Todays date is " . $todayDate);
}
function calculateFutureDate($daysToAdd = 0){
    global $todayDate;
    $futureDate = date("Y-m-d: D", strtotime($todayDate . "+ $daysToAdd days"));
    return($futureDate);
}
//todayDate();
//calculateFutureDate(5);
?>