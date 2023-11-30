<?php

function generator($n)
{
    for ($i = 1; $i <= $n; $i++) {
        $output = '';

        if ($i % 3 == 0) {
            $output .= 'Hello';
        }

        if ($i % 5 == 0) {
            $output .= 'World';
        }

        echo $output ? $output : $i;
        echo PHP_EOL;
    }
}

generator(15);

?>
