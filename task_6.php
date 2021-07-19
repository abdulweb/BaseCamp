<?php 

function hasArrayTwoCandidates($array, $arraySize,
                                        $sum)
{
    // will be used to return the array
    $holdArray = array();
    $initail; $finial;
 
    /* Using inbuilt Sort method to sort the elements */
    sort($array);

 
    //search for the numbers in the sorted array.
    $initail = 0;
    $finial = $arr_size - 1;
    while ($initail < $finial)
    {
        if($array[$initail] + $array[$finial] == $sum){
            array_push($holdArray, $array[$initail]);
            array_push($holdArray, $array[$finial]);
            return $holdArray;
        }
        else if($array[$initail] + $array[$finial] < $sum)
            $initail++;
        else 
            $finial--;
    }
    return 0;
}
 
?>