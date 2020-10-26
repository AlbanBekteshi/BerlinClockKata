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

    public function test_minute0_shouldReturn0(){

        $actual = $this->actTime(0);

        $this->assertEquals("[ ][ ][ ][ ]",$actual);
    }

    public function test_minute1_shouldReturn1(){

        $actual = $this->actTime(1);

        $this->assertEquals("[x][ ][ ][ ]",$actual);
    }
    public function test_minute2_shouldReturn2(){

        $actual = $this->actTime(2);

        $this->assertEquals("[x][x][ ][ ]",$actual);
    }

    public function test_minute3_shouldReturn3(){
        $actual = $this->actTime(3);

        $this->assertEquals("[x][x][x][ ]",$actual);
    }

    public function test_minute4_shouldReturn4(){
        $actual = $this->actTime(4);

        $this->assertEquals("[x][x][x][x]",$actual);
    }

    public function test_minute5_shouldReturnRow2_1(){
        $actual = $this->actTime(5);

        $this->assertEquals("[x][ ][ ][ ][ ][ ][ ][ ][ ][ ][ ]\n[ ][ ][ ][ ]",$actual);
    }
    public function test_minute6_shouldReturnRow2_1_Row1_1(){
        $actual = $this->actTime(6);

        $this->assertEquals("[x][ ][ ][ ][ ][ ][ ][ ][ ][ ][ ]\n[x][ ][ ][ ]",$actual);
    }

}
