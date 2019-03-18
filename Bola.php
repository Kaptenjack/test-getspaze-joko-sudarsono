<?php

class Bola
{
    public $nilai = 0;

    public function __construct($type, $val)
    {
        $this->nilai = $type == 'diameter' ? $val / 2 : $val;
    }

    public function volume()
    {
        if ($this->nilai % 7 == 0) {
            return ((($this->nilai * $this->nilai * $this->nilai) / 7) * 22 * 4) / 3;
        }

        return ($this->nilai * $this->nilai * $this->nilai * 3.14 * 4) / 3;
    }
}