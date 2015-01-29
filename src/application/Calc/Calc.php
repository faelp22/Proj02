<?php

namespace Calc;

/**
 * Description of Calc
 *
 * @author Isael Sousa <faelp22@hotmail.com>
 */
class Calc {

    public function somar($a, $b) {
        return $a + $b;
    }

    public function subtrair($a, $b) {
        return $a - $b;
    }

    public function multiplicar($a, $b) {
        return $a * $b;
    }

    public function dividir($a, $b) {
        if ($a == 0):
            return $a;
        elseif ($b == 0):
            return $a;
        else:
            return $a / $b;
        endif;
    }

}
