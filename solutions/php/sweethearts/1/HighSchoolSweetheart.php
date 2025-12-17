<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        for ($i = 0; $i <= mb_strlen($name); $i++) {
             if ($name[$i] != ' ' && strlen($name[$i]) > 0) {
                 return $name[$i];
             }
        }
        return 0;
    }

    public function initial(string $name): string
    {
        return (strtoupper($this->firstLetter($name)) . '.');
    }

    public function initials(string $name): string
    {
        $firstLetter = ($this -> initial($name));
        
        for ($i = 0; $i <= mb_strlen($name); $i++) {
             if ($name[$i-1] === ' ' && strlen($name[$i-1]) > 0) {
                 return ($firstLetter . ' ' . $name[$i] . '.');
             }
        }
        return 0;
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $firstPerson = $this -> initials($sweetheart_a);
        $secondPerson = $this -> initials($sweetheart_b);
        $expected = <<<EXPECTED_HEART
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
EXPECTED_HEART;
        return $expected;
    }
}
