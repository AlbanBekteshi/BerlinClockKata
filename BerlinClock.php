<?php

class BerlinClock {

    public function countTime(String $string): String{
        $tabTime = explode(":",$string);

        return $this->countMinute($tabTime[1]);
    }

    public function countMinute(int $int) : String{
        $string="";
        if($int>4){
            $string  = $this->count5Minute($int/5);
            $int = $int%5;
        }
        if($int===4) return $string ."[x][x][x][x]";
        if($int===3) return $string ."[x][x][x][ ]";
        if($int===2) return $string ."[x][x][ ][ ]";
        if($int===1) return $string ."[x][ ][ ][ ]";
        return $string . "[ ][ ][ ][ ]";
    }

    public function count5Minute(int $int) : String{
        if($int===2) return "[x][x][ ][ ][ ][ ][ ][ ][ ][ ][ ]"."\n";
        return "[x][ ][ ][ ][ ][ ][ ][ ][ ][ ][ ]"."\n";
    }
}