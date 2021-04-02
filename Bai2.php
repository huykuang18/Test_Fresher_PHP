<?php 
function max_sum($arr=[]){
  rsort($arr);
  echo $arr[0]+$arr[1];
}

$arr=[0,100,-4,8,143,5,99,100];
max_sum($arr);