<?php

$IS_PRESENT = 1;

$checkEmployee = rand(0,1);
if ($checkEmployee == $IS_PRESENT) {
    echo "Employee is Present";    
}
else
    echo "Employee is Absent";


?>