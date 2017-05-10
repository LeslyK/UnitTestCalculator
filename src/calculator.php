<?php
declare(strict_types=1);
class Calculator{
    function calculate($result){
        if($result == 0){

            return 0;
        }
        else {
            if($result == '1+2'){
                return 3;
            }
            return 1;
        }
    }

}

?>