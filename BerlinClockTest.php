<?php
require "vendor/autoload.php";
require "BerlinClock.php";

use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
    private $berlinClock;

    public function test_minute1_shouldReturn1(){

        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->countTime(1);

        $this->assertEquals("[x][ ][ ][ ]",$actual);
    }

    public function test_minute2_shouldReturn2(){

        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->countTime(2);

        $this->assertEquals("[x][x][ ][ ]",$actual);
    }
}
