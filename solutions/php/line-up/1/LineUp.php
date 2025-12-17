<?php

declare(strict_types=1);

function format(string $name, int $number): string
{
    $numArr = str_split("$number");
    $lastNum = (int) $numArr[count($numArr)-1];
    $lastNums = (int) ($numArr[count($numArr)-2] . $lastNum);
    
    if ($lastNum === 1 && $lastNums !== 11) {
        $ending = 'st';
    } else if ($lastNum === 2 && $lastNums !== 12) {
        $ending = 'nd';
    } else if ($lastNum === 3 && $lastNums !== 13) {
        $ending = 'rd';
    } else {
        $ending = 'th';
    }
    $message = "$name, you are the $number$ending customer we serve today. Thank you!";
    
    return $message;
}

?>
