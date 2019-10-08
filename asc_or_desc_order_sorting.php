<?php

/***
** Description :sorting array in ascending or descending order without using any php built-in method
** Date Added : 8th October,2019
** Added By : Neha Khemchandani
***/

$input_array = array(12,70,85,4,99,150,1);  // given input array

for($i=0;$i<count($input_array);$i++)      
{
    for($j=$i+1;$j<count($input_array);$j++){
    
        if($input_array[$i]>$input_array[$j])    // Sorting Array in Ascending Order
        {
            $temp = $input_array[$i];
            $input_array[$i] = $input_array[$j];
            $input_array[$j] = $temp;
            
        }
    }
}

echo "Sorted Array in Ascending Order:";
echo "<pre>";
print_r($input_array);


for($i=0;$i<count($input_array);$i++)           
{
    for($j=$i+1;$j<count($input_array);$j++){
    
        if($input_array[$i]<$input_array[$j])    // Sorting Array in descending Order
        {
            $temp = $input_array[$i];
            $input_array[$i] = $input_array[$j];
            $input_array[$j] = $temp;
            
        }
    }
}

echo "Sorted Array in Descending Order:";
echo "<pre>";
print_r($input_array);

?>
