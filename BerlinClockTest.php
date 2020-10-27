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

    public function actTime(String $str):String{
        return $this->berlinClock->countTime($str);
    }

    public function test_minute0_shouldReturn0(){

        $actual = $this->actTime("00:00:00");

        $this->assertEquals("[ ][ ][ ][ ]\n[ ][ ][ ][ ][ ][ ][ ][ ][ ][ ][ ]\n[ ][ ][ ][ ]",$actual);
    }

    public function test_minute1_shouldReturn1(){

        $actual = $this->actTime("00:01:00");

        $this->assertEquals("[ ][ ][ ][ ]\n[ ][ ][ ][ ][ ][ ][ ][ ][ ][ ][ ]\n[x][ ][ ][ ]",$actual);
    }
    public function test_minute2_shouldReturn2(){

        $actual = $this->actTime("00:02:00");

        $this->assertEquals("[ ][ ][ ][ ]\n[ ][ ][ ][ ][ ][ ][ ][ ][ ][ ][ ]\n[x][x][ ][ ]",$actual);
    }

    public function test_minute3_shouldReturn3(){
        $actual = $this->actTime("00:03:00");

        $this->assertEquals("[ ][ ][ ][ ]\n[ ][ ][ ][ ][ ][ ][ ][ ][ ][ ][ ]\n[x][x][x][ ]",$actual);
    }

    public function test_minute4_shouldReturn4(){
        $actual = $this->actTime("00:04:00");

        $this->assertEquals("[ ][ ][ ][ ]\n[ ][ ][ ][ ][ ][ ][ ][ ][ ][ ][ ]\n[x][x][x][x]",$actual);
    }

    public function test_minute5_shouldReturnRow2_1(){
        $actual = $this->actTime("00:05:00");

        $this->assertEquals("[ ][ ][ ][ ]\n[x][ ][ ][ ][ ][ ][ ][ ][ ][ ][ ]\n[ ][ ][ ][ ]",$actual);
    }
    public function test_minute6_shouldReturnRow2_1_Row1_1(){
        $actual = $this->actTime("00:06:00");

        $this->assertEquals("[ ][ ][ ][ ]\n[x][ ][ ][ ][ ][ ][ ][ ][ ][ ][ ]\n[x][ ][ ][ ]",$actual);
    }
    public function test_minute10_shouldReturnRow2_2(){
        $actual = $this->actTime("00:10:00");

        $this->assertEquals("[ ][ ][ ][ ]\n[x][x][ ][ ][ ][ ][ ][ ][ ][ ][ ]\n[ ][ ][ ][ ]",$actual);
    }
    public function test_minute26_souldReturnRow2_5_Row1_1(){
        $actual = $this->actTime("00:26:00");

        $this->assertEquals("[ ][ ][ ][ ]\n[x][x][R][x][x][ ][ ][ ][ ][ ][ ]\n[x][ ][ ][ ]",$actual);
    }
    public function test_minute26_souldReturnRow2_11_Row1_4(){
        $actual = $this->actTime("00:59:00");

        $this->assertEquals("[ ][ ][ ][ ]\n[x][x][R][x][x][R][x][x][R][x][x]\n[x][x][x][x]",$actual);
    }

    public function test_hour_1_shouldReturnRow3_1(){
        $actual = $this->actTime("01:00:00");

        $this->assertEquals("[x][ ][ ][ ]\n[ ][ ][ ][ ][ ][ ][ ][ ][ ][ ][ ]\n[ ][ ][ ][ ]",$actual);
    }

    public function test_hour_2_shouldReturnRow3_2(){
        $actual = $this->actTime("02:00:00");

        $this->assertEquals("[x][x][ ][ ]\n[ ][ ][ ][ ][ ][ ][ ][ ][ ][ ][ ]\n[ ][ ][ ][ ]",$actual);
    }


}
