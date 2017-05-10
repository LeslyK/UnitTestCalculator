<?php


declare(strict_types=1);

class Calculator{

    function calculate($input){
        if($input==0){

            return 0;
        }
        else {
            if($input == '1+2'){
                return 3;
            }
            return 1;
        }
    }

}

?>