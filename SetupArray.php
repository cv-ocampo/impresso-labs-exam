<?php

class SetupArray
{

    public $return_array = [];

    public function __construct(array $array, int $input_number)
    {

        /* 
        Push elements to $return_array 
        if the element from the loop is less than the input number
        
        */

        foreach($array as $a){
            if($a < $input_number){
              array_push($this->return_array,$a);
            }
        }


    }

    
        
}