<?php

$IS_PRESENT = 1;
$EMP_RATE_PER_HR = 20;
$empHrs = 0;
$checkEmployee = rand(0,1);
if ($checkEmployee == $IS_PRESENT) {
    $empHrs = 8;
    echo "Employee is present ";
    $empWage = $empHrs * $EMP_RATE_PER_HR;
}
else{
    $empHrs = 0;
    echo "Employee is absent";
    $empWage = $empHrs * $EMP_RATE_PER_HR;
}

echo " <br> Employee wage is $empWage ";

?>