<?php
require "vendor/autoload.php";
require "BerlinClock.php";

use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
    private $berlinClock;

    public function test_minute1_shouldReturnOn(){

        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->countTime(1);

        $this->assertEquals("[x][ ][ ][ ]",$actual);
    }

    public function test_minute3_shouldReturnOn(){
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->countTime(3);

        $this->assertEquals("[x][x][x][ ]",$actual);
    }
}
