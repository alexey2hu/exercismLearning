<?php

declare(strict_types=1);

class SimpleCipher
{
    public $key;
    private $arrKeys;
    
    public function __construct(string $key = null)
    {
        $this->arrKeys = range('a', 'z');
        
        // key generation
        if ($key === null) {
            $key = '';
            
            for ($i=0;$i<rand(100, 200);$i++) {
                $key .= $this->arrKeys[rand(0, 25)];
            }
        }

        // empty, upper, number key exceptions
        if (!ctype_lower($key)) {
            throw new InvalidArgumentException('Invalid key.');
        }
        
        $this->key = $key;
    }

    public function encode($plainText) // text encode
    {
        $encodedStr = '';
        $plainTextArr = str_split($plainText);
        $keyArr = str_split($this->key);

        // longer key
        for ($i=0;count($keyArr) < count($plainTextArr);$i++) {
            $keyArr[] = $keyArr[$i];
        }
        
        for ($i=0;$i<count($plainTextArr);$i++) {
            if ($plainTextArr[$i] === ' ') {
                $encodedStr .= ' ';
            } else {
                $letterId = array_search($plainTextArr[$i], $this->arrKeys);
                $keyId = array_search($keyArr[$i], $this->arrKeys);
                
                // Encoded letter
                if (($letterId + $keyId) >= count($this->arrKeys)) {
                    $letterId -= count($this->arrKeys); // flip arr
                }
                $encodedStr .= $this->arrKeys[$letterId + $keyId];
            }
        }
        
        return $encodedStr;
    }

    public function decode($cipherText) // text decode
    {
        $decodedStr = '';
        $cipherTextArr = str_split($cipherText);
        $keyArr = str_split($this->key);

        // longer key
        for ($i=0;count($keyArr) < count($cipherTextArr);$i++) {
            $keyArr[] = $keyArr[$i];
        }
        
        for ($i=0;$i<count($cipherTextArr);$i++) {
            if ($cipherTextArr[$i] === ' ') {
                $decodedStr .= ' ';
            } else {
                $letterId = array_search($cipherTextArr[$i], $this->arrKeys);
                $keyId = array_search($keyArr[$i], $this->arrKeys);
                
                // Decoded letter
                if (($letterId - $keyId) < 0) {
                    $letterId += count($this->arrKeys); // flip arr
                }
                $decodedStr .= $this->arrKeys[$letterId - $keyId];
            }
        }
        
        return $decodedStr;
    }
}
