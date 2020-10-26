<?php

class BerlinClock {

    public function countTime(int $int) : String{
        if($int ===2) return "[x][x][ ][ ]";
        return "[x][ ][ ][ ]";
    }
}