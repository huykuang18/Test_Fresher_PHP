<?php
function restruct($n=0,$arr=[]){
  $arrs=[];
  $new=array_chunk($arr,$n,false);
  for($i=0;$i<$n;$i++){
      for($j=0;$j<3;$j++){
       array_push($arrs,$new[$j][$i]);
    }
  }
  return $arrs;
}

$arr=[11,2,8,10,5,99,1,8,9];
echo json_encode(restruct(3,$arr));