<?php

$IS_PART_TIME = 1;
$IS_FULL_TIME = 2;
$EMP_RATE_PER_HR = 20;
$empHrs = 0;
$checkEmployee = rand(0,2);
if ($checkEmployee == $IS_PART_TIME) {
    $empHrs = 8;
    echo "Employee is present Part time ";
    $empWage = $empHrs * $EMP_RATE_PER_HR;
}
elseif ($checkEmployee == $IS_FULL_TIME) 
{
    $empHrs = 12;
    echo "Employee is present Full time ";
    $empWage = $empHrs * $EMP_RATE_PER_HR;
}
else{
    $empHrs = 0;
    echo "Employee is absent";
    $empWage = $empHrs * $EMP_RATE_PER_HR;
}

echo " <br> Employee wage is $empWage ";

?>