<?php

declare(strict_types=1);

function toRna(string $dna): string
{
    $rawArr = str_split($dna);
    $rna = '';

    for ($i=0;$i < count($rawArr);$i++) {
        switch ($rawArr[$i]) {
            case 'A' :
                $rna .= 'U';
                break;
            case 'C' :
                $rna .= 'G';
                break;
            case 'G' :
                $rna .= 'C';
                break;
            case 'T' :
                $rna .= 'A';
                break;
            default:
                throw new InvalidArgumentException ('Invalid data');
        }
    }
    
    return $rna;
}
