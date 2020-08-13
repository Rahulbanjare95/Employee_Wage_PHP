<?php

$IS_PART_TIME = 1;
$IS_FULL_TIME = 2;
$EMP_RATE_PER_HR = 20;
$MAX_WORKING_DAYS = 20;
$MAX_HOURS_IN_MONTH = 100;
$monthlyWage = 0;
$empHrs = 0;
$empWage = 0;
$totalWorkingDays = 0;
$totalWorkingHours = 0;

while ($totalWorkingDays <= $MAX_WORKING_DAYS && $totalWorkingHours <= $MAX_HOURS_IN_MONTH) {
    $totalWorkingDays++;
    $checkEmployee = mt_rand(0,2);
    switch ($checkEmployee) {
        case $IS_PART_TIME:
            $empHrs = 8;
            break;
        case $IS_FULL_TIME:
            $empHrs = 12;
            break;    
        default: 
            $empHrs = 0; 
            break;    
}
$totalWorkingHours += $empHrs;
$empWage = $empHrs * $EMP_RATE_PER_HR;
$monthlyWage += $empWage;
}
echo " <br> Employee Wage for month is = $monthlyWage";
?>