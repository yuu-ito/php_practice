<?php
require "Triangle.php";
class TriangleTest extends PHPUnit_Framework_TestCase
{
  function setUp()
  {
    $this->t = new Triangle();

  }
  function testi正の整数であること()
  {
    $this->assertFalse($this->t->check(-1,1,1));
    $this->assertFalse($this->t->check(1,-1,1));
    $this->assertFalse($this->t->check(1,1,-1));
    $this->assertEquals("equilateral", $this->t->check(1,1,1));
  }

  function test小数点はだめであること(){
    $this->assertFalse($this->t->check(10.1,1,1));
    $this->assertFalse($this->t->check(1,10.1,1));
    $this->assertFalse($this->t->check(1,1,10.1));
  }

  function test１から１００であること(){
    $this->assertEquals("isosceles",$this->t->check(1,10,10));
    $this->assertEquals("isosceles",$this->t->check(10,1,10));
    $this->assertEquals("isosceles",$this->t->check(10,10,1));

    $this->assertEquals("isosceles",$this->t->check(100,70,70));
    $this->assertEquals("isosceles",$this->t->check(70,100,70));
    $this->assertEquals("isosceles",$this->t->check(70,70,100));

    $this->assertFalse($this->t->check(-1,10,10));
    $this->assertFalse($this->t->check(10,-1,10));
    $this->assertFalse($this->t->check(10,10,-1));

    $this->assertFalse($this->t->check(0,10,10));
    $this->assertFalse($this->t->check(10,0,10));
    $this->assertFalse($this->t->check(10,10,0));

    $this->assertFalse($this->t->check(101,70,70));
    $this->assertFalse($this->t->check(70,101,70));
    $this->assertFalse($this->t->check(70,70,101));

  }

  function test２つの引数の合計がのこり１つの引数よりも大きいこと(){
    $this->assertFalse($this->t->check(3,1,1));
    $this->assertFalse($this->t->check(1,3,1));
    $this->assertFalse($this->t->check(1,1,3));

    $this->assertFalse($this->t->check(2,1,1));
    $this->assertFalse($this->t->check(1,2,1));
    $this->assertFalse($this->t->check(1,1,2));

    $this->assertEquals("isosceles",$this->t->check(3,10,10));
    $this->assertEquals("isosceles",$this->t->check(10,3,10));
    $this->assertEquals("isosceles",$this->t->check(10,10,3));
  }

  function test出力メッセージが正しいこと(){
    $this->assertEquals("equilateral",$this->t->check(1,1,1));
    $this->assertEquals("isosceles",$this->t->check(3,2,2));
    $this->assertEquals("scalene",$this->t->check(3,4,5));
    $this->assertEquals(false,$this->t->check(10,1,1));
  }
}

