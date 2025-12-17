<?php

class ProgramWindow
{
    public $x;
    public $y;
    public $width;
    public $height;

    public function __construct()
    {
        $this->x = 0;
        $this->y = 0;
        $this->width = 800;
        $this->height = 600;
    }

    public function resize($size)
    {
        $this->width = $size->width;
        $this->height = $size->height;
    }

    public function move($position)
    {
        $this->y = $position->y;
        $this->x = $position->x;
    }
}