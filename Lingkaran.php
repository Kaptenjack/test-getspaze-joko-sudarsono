<?php

class Lingkaran
{
    public $nilai = 0;

    public function __construct($type, $val)
    {
        $this->nilai = $type == 'diameter' ? $val / 2 : $val;
    }

    public function luas()
    {
        if ($this->nilai % 7 == 0) {
            return (($this->nilai * $this->nilai) / 7) * 22;
        }

        return 3.14 * ($this->nilai * $this->nilai);
    }
}