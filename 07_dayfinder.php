<?php
date_default_timezone_set("Asia/Kolkata");

$day =date("D"); 
switch($day){
    case 'Mon':
        echo "Monday";
        break;
    case 'Tue':
        echo "Tuesday";
        break;
    case 'Wed':
        echo "wednesday";
        break;
    case 'Thu':
        echo "Thrusday";
        break;
    case 'Fri':
        echo "Fiday";
        break;
    case 'Sat':
        echo "Saturday";
        break;
    case 'Sun':
        echo "Sunday";
        break;
    default:
        echo "not valid";
}
?>