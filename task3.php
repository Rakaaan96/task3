<?php

function max_min($array){

    $length=count($array);
    if($length ===0)
    {
        return ['max'=>null, 'min'=>null];
    }
    $max = $array[0]; 
    $min=$array[0];

    for($i=0; $i<$length; $i++){
        if($array[$i]>$max){
            $max=$array[$i];

        }elseif($array[$i]<$min){
            $min=$array[$i];
        }
       

    }

   return ['max'=>$max, 'min'=>$min];
    }

    

$array = [55,4,6,45,6,67,87,56,456,67,567];
$MaxAndMin=max_min($array);
if(count($array)===0)
{
    echo "Empty array !";
}
else
{
   echo "The Maximum number of array is : " . $MaxAndMin['max'] . "\n";
    echo "The Minimum number of array is : " . $MaxAndMin['min'] . "\n";
   
}
