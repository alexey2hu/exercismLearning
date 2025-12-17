<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        return substr(trim($name), 0, 1);
    }

    public function initial(string $name): string
    {
        return strtoupper($this->firstLetter($name)) . '.';
    }

    public function initials(string $name): string
    {
        $nameArr = explode(' ', trim($name));
        return $this->initial($nameArr[0]) . ' ' . $this->initial($nameArr[1]);
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $firstPerson = $this -> initials($sweetheart_a);
        $secondPerson = $this -> initials($sweetheart_b);
        return (<<<EXPECTED_HEART
                 ******       ******
               **      **   **      **
             **         ** **         **
            **            *            **
            **                         **
            **     $firstPerson  +  $secondPerson     **
             **                       **
               **                   **
                 **               **
                   **           **
                     **       **
                       **   **
                         ***
                          *
            EXPECTED_HEART);
    }
}
