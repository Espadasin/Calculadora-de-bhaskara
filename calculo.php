<?php

    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    function bhaskara($a,$b,$c){
        $delta = ($b*$b) - (4*$a*$c);

        if( $delta < 0){
            echo "O delta é negativo.";
        } else{
            $x1 = (($b*(-1) + sqrt($delta)) / (2*$a));
            $x2 = (($b*(-1) - sqrt($delta)) / (2*$a));
    
            return "Delta:" . $delta . "<br>" . "X1: ". $x1 . "<br>". "X2: ". $x2;
        };
    };

    echo bhaskara($a,$b,$c);


?>