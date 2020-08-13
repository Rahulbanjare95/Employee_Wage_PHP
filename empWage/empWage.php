<?php

$IS_PART_TIME = 1;
$IS_FULL_TIME = 2;
$EMP_RATE_PER_HR = 20;
$TOTAL_WORKING_DAYS = 20;
$monthlyWage = 0;
$empHrs = 0;
$empWage = 0;

for ($i=1; $i <=$TOTAL_WORKING_DAYS ; $i++) { 
    $checkEmployee = mt_rand(0,2);
    switch ($checkEmployee) {
        case $IS_PART_TIME:
            $empHrs = 8;
            echo " day $i  = Part Time <br>";
            break;
        case $IS_FULL_TIME:
            $empHrs = 12;
            echo " day $i  = Full Time <br>";
            break;    
        default: 
            $empHrs = 0; 
            echo " day $i  = Absent <br>";
            break;    
}
$empWage = $empHrs * $EMP_RATE_PER_HR;
$monthlyWage += $empWage;
}

echo " <br> Employee Wage for month is = $monthlyWage";

?>