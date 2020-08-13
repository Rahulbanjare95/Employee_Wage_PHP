<?php

$IS_PART_TIME = 1;
$IS_FULL_TIME = 2;
$EMP_RATE_PER_HR = 20;
$empHrs = 0;
$empWage = 0;
$checkEmployee = mt_rand(0,2);
switch ($checkEmployee) {
    case $IS_PART_TIME:
        $empHrs = 8;
        echo " Part Time ";
        break;
    case $IS_FULL_TIME:
        $empHrs = 12;
        echo " Full Time ";
        break;    
    default: 
        $empHrs = 0; 
        echo " Absent ";
        break;
}
$empWage = $empHrs * $EMP_RATE_PER_HR;
echo " <br> Employee Wage is = $empWage";

?>