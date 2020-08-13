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

function getWorkingHours($checkEmployee)
{ 
    global $IS_FULL_TIME, $IS_PART_TIME;
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
    return $empHrs;
}
function calculateDailyWage($empHrs){
   global $EMP_RATE_PER_HR;
    return $empHrs* $EMP_RATE_PER_HR;
}
$dailyWageRecord;
while ($totalWorkingDays <= $MAX_WORKING_DAYS && $totalWorkingHours <= $MAX_HOURS_IN_MONTH) {
    $totalWorkingDays++;    
    $checkEmployee = mt_rand(0,2);
    $empHrs = getWorkingHours($checkEmployee);
    $dailyWageRecord[$totalWorkingDays] = calculateDailyWage($empHrs);
    $totalWorkingHours += $empHrs;
}
print_r($dailyWageRecord);
$monthlyWage = $totalWorkingHours * $EMP_RATE_PER_HR;
echo " <br> Employee Wage for month is = $monthlyWage";
?>