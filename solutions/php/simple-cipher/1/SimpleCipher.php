<?php

/*
 * By adding type hints and enabling strict type checking, code can become
 * easier to read, self-documenting and reduce the number of potential bugs.
 * By default, type declarations are non-strict, which means they will attempt
 * to change the original type to match the type specified by the
 * type-declaration.
 *
 * In other words, if you pass a string to a function requiring a float,
 * it will attempt to convert the string value to a float.
 *
 * To enable strict mode, a single declare directive must be placed at the top
 * of the file.
 * This means that the strictness of typing is configured on a per-file basis.
 * This directive not only affects the type declarations of parameters, but also
 * a function's return type.
 *
 * For more info review the Concept on strict type checking in the PHP track
 * <link>.
 *
 * To disable strict typing, comment out the directive below.
 */

declare(strict_types=1);

class SimpleCipher
{
    public $key;
    
    public $arrKeys = [
        'a', 'b', 'c', 'd', 'e', 'f',
        'g', 'h', 'i', 'j', 'k', 'l',
        'm', 'n', 'o', 'p', 'q', 'r',
        's', 't', 'u', 'v', 'w', 'x',
        'y', 'z'
    ];
    
    public function __construct(string $key = null)
    {
        // key generation
        if ($key === null) {
            $key = '';
            
            for ($i=0;$i<rand(100, 200);$i++) {
                $key .= $this->arrKeys[rand(0, 25)];
            }
        }

        // empty or upper key exceptions
        if ($key === '' || $key === strtoupper($key)) {
            throw new InvalidArgumentException('Invalid key.');
        }
        
        $this->key = $key;
    }

    public function encode(string $plainText): string // text encode
    {
        $encodedStr = '';
        $plainTextArr = str_split($plainText);
        $keyArr = str_split($this->key);

        // longer key
        for ($i=0;count($keyArr) < count($plainTextArr);$i++) {
            array_push($keyArr, $keyArr[$i]);
        }
        
        for ($i=0;$i<count($plainTextArr);$i++) {
            if ($plainTextArr[$i] != ' ') {
                $letterId = array_search($plainTextArr[$i], $this->arrKeys);
                $keyId = array_search($keyArr[$i], $this->arrKeys);
                
                // Encoded letter
                if (($letterId + $keyId) >= count($this->arrKeys)) {
                    $letterId -= count($this->arrKeys); // flip arr
                }
                $encodedStr .= $this->arrKeys[$letterId + $keyId];
            } else {
                $encodedStr .= ' ';
            }
        }
        
        return $encodedStr;
    }

    public function decode(string $cipherText): string // text decode
    {
        $decodedStr = '';
        $cipherTextArr = str_split($cipherText);
        $keyArr = str_split($this->key);

        // longer key
        for ($i=0;count($keyArr) < count($cipherTextArr);$i++) {
            array_push($keyArr, $keyArr[$i]);
        }
        
        for ($i=0;$i<count($cipherTextArr);$i++) {
            if ($cipherTextArr[$i] != ' ') {
                $letterId = array_search($cipherTextArr[$i], $this->arrKeys);
                $keyId = array_search($keyArr[$i], $this->arrKeys);
                
                // Decoded letter
                if (($letterId - $keyId) < 0) {
                    $letterId += count($this->arrKeys); // flip arr
                }
                $decodedStr .= $this->arrKeys[$letterId - $keyId];
            } else {
                $decodedStr .= ' ';
            }
        }
        
        return $decodedStr;
    }
}
