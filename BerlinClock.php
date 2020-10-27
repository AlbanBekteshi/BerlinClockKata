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
        if($int===3) return "[x][x][x][ ][ ][ ][ ][ ][ ][ ][ ]"."\n";
        if($int===4) return "[x][x][x][x][ ][ ][ ][ ][ ][ ][ ]"."\n";
        if($int===5) return "[x][x][x][x][x][ ][ ][ ][ ][ ][ ]"."\n";
        if($int===6) return "[x][x][x][x][x][x][ ][ ][ ][ ][ ]"."\n";
        if($int===7) return "[x][x][x][x][x][x][x][ ][ ][ ][ ]"."\n";
        if($int===8) return "[x][x][x][x][x][x][x][x][ ][ ][ ]"."\n";
        if($int===9) return "[x][x][x][x][x][x][x][x][x][ ][ ]"."\n";
        if($int===10) return "[x][x][x][x][x][x][x][x][x][x][ ]"."\n";
        if($int===11) return "[x][x][x][x][x][x][x][x][x][x][x]"."\n";
        return "[x][ ][ ][ ][ ][ ][ ][ ][ ][ ][ ]"."\n";
    }
}