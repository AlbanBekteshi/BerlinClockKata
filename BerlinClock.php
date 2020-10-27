<?php

class BerlinClock {

    public function countTime(String $string): String{
        $tabTime = explode(":",$string);

        return $this->countHour($tabTime[0]).$this->countMinute($tabTime[1]);
    }

    public function countHour(int $int) : String{
        $string  = $this->count5Hour($int/5);
        $int = $int%5;

        if($int===1) return $string ."[x][ ][ ][ ]\n";
        if($int===2) return $string ."[x][x][ ][ ]\n";
        if($int===3) return $string ."[x][x][x][ ]\n";
        if($int===4) return $string ."[x][x][x][x]\n";
        return $string ."[ ][ ][ ][ ]\n";
    }

    public function count5Hour(int $int) :String{
        if($int===1) return "[x][ ][ ][ ]\n";
        if($int===2) return "[x][x][ ][ ]\n";
        if($int===3) return "[x][x][x][ ]\n";
        if($int===4) return "[x][x][x][x]\n";
        return "[ ][ ][ ][ ]\n";
    }

    public function countMinute(int $int) : String{

        $string  = $this->count5Minute($int/5);
        $int = $int%5;

        if($int===4) return $string ."[x][x][x][x]";
        if($int===3) return $string ."[x][x][x][ ]";
        if($int===2) return $string ."[x][x][ ][ ]";
        if($int===1) return $string ."[x][ ][ ][ ]";
        return $string . "[ ][ ][ ][ ]";
    }

    public function count5Minute(int $int) : String{
        if($int===1) return "[x][ ][ ][ ][ ][ ][ ][ ][ ][ ][ ]"."\n";
        if($int===2) return "[x][x][ ][ ][ ][ ][ ][ ][ ][ ][ ]"."\n";
        if($int===3) return "[x][x][R][ ][ ][ ][ ][ ][ ][ ][ ]"."\n";
        if($int===4) return "[x][x][R][x][ ][ ][ ][ ][ ][ ][ ]"."\n";
        if($int===5) return "[x][x][R][x][x][ ][ ][ ][ ][ ][ ]"."\n";
        if($int===6) return "[x][x][R][x][x][R][ ][ ][ ][ ][ ]"."\n";
        if($int===7) return "[x][x][R][x][x][R][x][ ][ ][ ][ ]"."\n";
        if($int===8) return "[x][x][R][x][x][R][x][x][ ][ ][ ]"."\n";
        if($int===9) return "[x][x][R][x][x][R][x][x][R][ ][ ]"."\n";
        if($int===10) return "[x][x][R][x][x][R][x][x][R][x][ ]"."\n";
        if($int===11) return "[x][x][R][x][x][R][x][x][R][x][x]"."\n";
        return "[ ][ ][ ][ ][ ][ ][ ][ ][ ][ ][ ]\n";
    }
}