<?php
require "vendor/autoload.php";
require "BerlinClock.php";

use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
    private $berlinClock;

    protected function setUp(): void
    {
        parent::setUp();
        $this->berlinClock= new BerlinClock();
    }

    public function actTime(int $int):String{
        return $this->berlinClock->countTime($int);
    }

    public function test_minute1_shouldReturn1(){

        $actual = $this->actTime(1);

        $this->assertEquals("[x][ ][ ][ ]",$actual);
    }
    public function test_minute2_shouldReturn2(){

        $actual = $this->actTime(2);

        $this->assertEquals("[x][x][ ][ ]",$actual);
    }

    public function test_minute3_shouldReturnOn(){
        $actual = $this->actTime(3);

        $this->assertEquals("[x][x][x][ ]",$actual);
    }

}
