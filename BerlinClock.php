<?php

class BerlinClock {

    public function countTime(int $int) : String{
        if($int===3) return "[x][x][x][ ]";
        if($int===2) return "[x][x][ ][ ]";
        return "[x][ ][ ][ ]";
    }
}