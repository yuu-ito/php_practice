<?php
class Triangle
{
  function check($in1,$in2,$in3)
  {
    if(!is_int($in1) || !is_int($in2) || !is_int($in3))
    {
      return false;// 数値でないとき 
    }
    
    if($in1>100 || $in2>100 || $in3>100)
    {
      return false;
    }
    
    if($in1<1 || $in2<1 || $in3<1)
    {
      return false;
    }
    if($in1 + $in2 <= $in3 || $in1 + $in3 <= $in2 || $in3 + $in2 <= $in1 )
    {
      return false;
    }

    if($in1 == $in2 && $in1== $in3)
    {
      return "equilateral";
    }else if($in1 == $in2 || $in1== $in3 || $in2 == $in3)
    {
      return "isosceles";
    }else
    {
      return "scalene";
    }
}

