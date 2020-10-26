<?php

class BerlinClock {

    public function countTime(int $int) : String{
        $string="";
        if($int>4){
            $string  = $this->count5Time($int/5);
            $int = $int%5;
        }
        if($int===4) return "[x][x][x][x]";
        if($int===3) return "[x][x][x][ ]";
        if($int===2) return "[x][x][ ][ ]";
        if($int===1) return "[x][ ][ ][ ]";
        return $string . "[ ][ ][ ][ ]";
    }

    public function count5Time(int $int) : String{
        return "[X][ ][ ][ ][ ][ ][ ][ ][ ][ ][ ]"."\n";
    }
}