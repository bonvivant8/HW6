<?php

function getData( array $data1, array $keys)

{
    $data=[];
    foreach ($data1 as $key=> $value){
        if (is_array($value)){
            $data=array_merge(getData($value,$keys),$data);
        } elseif (in_array($key,$keys))
        {
            $data[]=$value;
        }
    }
    return $data;
}
$element=[1,2,5,7,[5,8],7];
var_dump(getData($element,[2]));

function finder(string $haystack):bool
{
    return substr_count($haystack,'b');
}
$find_b="apple banana broccoli";
var_dump(finder($find_b));

function multisum(array $arr):float{
    $sum=array_sum($arr);
    foreach ($arr as $element){
        $sum+=is_array($element)?multisum($element):0;
    }
    return $sum;
}
$data3=array(array(2,4,5,),array(7,5,9));
var_dump(multisum($data3));

function square(int $big,int $small):float
{
  return $big/$small;
}
var_dump(square(9,3));

