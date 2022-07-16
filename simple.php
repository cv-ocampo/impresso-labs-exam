<?php
/*
===
Simple Solution
===
Problem : Given a sorted array, give the next smallest number based on the input.

Solution : Step 1, remove numbers greater than the input then return the new array.
         : Step 2, return the last element of the array.
*/


# initiate the sorted array line below
$a = array(3, 4, 6, 9, 10, 12, 14, 15, 17, 19, 21);

# sort($a); // uncomment this line the array given is unsorted.

/**
 * call the function nextSmallest with parameters of (a,b)
 * where a is the initialized array '$a'
 * and b is the input number (this can be changed)
 */
$result = nextSmallest($a,12); // change the value of integer to check other result

#echo $result;
echo $result;


function nextSmallest($arr, $n){
    /*
    Initiate a temp array '$x' then loop through input array '$arr' as '$a'
    
    Set a condition if '$a' is less than the input number '$n' then value of '$a' 
    will be pushed to the empty array '$x'
    
    */
    $x = [];


    foreach($arr as $a){
        if($a < $n){
          array_push($x,$a);
        }
    }
    


    /** 
     * check if the array '$x' is null
     * if the value of '$x' is not null return the last element of array '$x' 
     * if the value of '$x' is null return -1
    */

    if($x != null) 
        return 'Next smallest number is : '. end($x);
    
    return 'No next smallest number found. Returning -1';
}