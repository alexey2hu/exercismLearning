<?php

class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {
        $nums1;
        for ($i=0; $i< count($digitsOfNumber1);$i++) {
             $nums1 .= (string) $digitsOfNumber1[$i];
        }
        $nums2;
        for ($i=0; $i< count($digitsOfNumber2);$i++) {
             $nums2 .= (string) $digitsOfNumber2[$i];
        }
        return (int) $nums1 + (int) $nums2;
    }

    public function isPalindrome(int $number): bool
    {
        return str_split($number) == array_reverse(str_split($number));
    }

    public function validate(string $input): string
    {
        if ($input == null) {
            return 'Required field';
        } else if (((int)$input) <= 0) {
            return 'Must be a whole number larger than 0';
        }
        return '';
    }
}
