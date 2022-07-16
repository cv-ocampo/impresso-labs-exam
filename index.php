<?php
/*
===
CLASS BASED SOLUTION
===
Problem : Given a sorted array, give the next smallest number based on the input.

Solution : Step 1, remove numbers greater than the input then return the new array. --- SetupArray.php
         : Step 2, return the last element of the array, --- NextSmallest.php
*/


# include classes SetupArray.php and NextSmallest.php
include('SetupArray.php');
include('NextSmallest.php');


# initiate the sorted array line below
$a = array(3, 4, 6, 9, 10, 12, 14, 15, 17, 19, 21);

# sort($a); // uncomment this line the array given is unsorted.


# initiate SetupArray to pick numbers less than the input
$setup_array = new SetupArray($a,5); // change the value of integer to check other result
#setup_array = new SetupArray($a,13);

# initiate NextSmallest based from the output of SetupArray
$result = new NextSmallest($setup_array->return_array);


#echo result from next_smallest() from the NextSmallest class.
echo $result->next_smallest();


