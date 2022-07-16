<?php

class NextSmallest
{
    public $array;

    public function __construct(array $array)
    {
        # get the array given from the SetupArray
        $this->array = $array;
    }

    public function next_smallest()
    {
        /* 
        check if the array is null, 
        if it is null there is no number in the array that is less than the input

        return the end of array if the array is not null

        else

        return -1
        */

        if($this->array != null)
            return 'Next smallest number is : '. end($this->array);
        
        return 'No next smallest number found. Returning -1';
    }

}