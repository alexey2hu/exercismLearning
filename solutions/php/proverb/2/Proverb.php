<?php

declare(strict_types=1);

class Proverb
{
    public function recite(array $rawArr): array
    {
        $arr = [];

        if (count($rawArr) > 0) {
            for ($i=0;$i < count($rawArr)-1;$i++) {
                $arr[$i] = "For want of a $rawArr[$i] the " . $rawArr[$i+1] . ' was lost.';
            }

            $arr[count($rawArr)-1] = "And all for the want of a $rawArr[0].";
        }
        
        return $arr;
    }
}
