<?php 

function parenthesis(String $string, Int $charIndex) {
    $len = strlen($string);
    $countParenthesis = 0;
    for($i = 0; $i < $len; $i++) {
        $char = substr($string, $i, 1);
        if ($i >= $charIndex) {
            if ($i == $charIndex) {
                if ($char <> '(') {
                    echo 'Index '.$charIndex.' is not open parenthesis';
                    return false;
                }
            }    
            if ($char == '(') {
                $countParenthesis++;
            }    
            if ($char == ')') {
                $countParenthesis--;
            }
            if ($countParenthesis == 0) {
                echo 'close parenthesis on index '.$i;
                return true;
            }
        }
    }
}