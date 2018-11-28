<?php
header("content-type:text/html;charset=utf-8");

$a=yanZheng("Have you ever gone shopping and");
echo $a;
function yanZheng($str){
    $res='';
    $arr=array();
    for($i=0,$len=strlen($str);$i<$len;$i++){
        if(isset($arr[$str[$i]])){
            $arr[$str[$i]]++;
        }else{
            $arr[$str[$i]]=1;
        }
        if($arr[$str[$i]] == 3){
            $res=$str[$i];break;
        }
    }
    return $res;
}