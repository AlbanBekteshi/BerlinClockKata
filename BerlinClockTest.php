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
}
