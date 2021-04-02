<?php 
function min_space($arr=[]){
  $min=1000;
  sort($arr);
  for($i=0;$i<sizeof($arr);$i++){
    if(abs($arr[$i]-$arr[$i+1])<$min){
      $min=abs($arr[$i]-$arr[$i+1]);
    }
  }
  
  $arrs=[];
  for($i=0;$i<sizeof($arr);$i++){
    if(abs($arr[$i]-$arr[$i+1])==$min){
      array_push($arrs,[$arr[$i],$arr[$i+1]]);
    }
  }
  
  return $arrs;

}
$arr=[1,5,4,7,9,0,-10,13,93,14,15];
echo json_encode(min_space($arr));