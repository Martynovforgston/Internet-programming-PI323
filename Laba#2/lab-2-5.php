<?php

echo '<title>Мартынов В.Е.</title>';

  echo  "Вариант №2" . '<br>';
  
    function f($u, $t)
    {
        if ($u >= 0 )
            return $u + 2 * $t;
        elseif ($u > -1 && $u < 0)
            return $u + $t;
        elseif ($u <= -1)
            return (pow($u, 2)) - (2 * $t) + 1;
    }

    $a = rand(1, 20);
    $b = rand(1, 20);

    $z = f($a, pow($b, 2) - $a) + f($a, pow($b, 2));

    echo "a = $a" . '<br>';
    echo "b = $b" . '<br>';
    echo "z = $z" . '<br>';
   echo  "Вариант №7" . '<br>';

    function f2($u, $t)
    {
        if ($u >= 0 && $t >= 0)
            return ($u + $t) / $u * $t;
        elseif ($u < 0 && $t >= 0)
            return pow($u, 2) + $t / $u;
        elseif ($u >= 0 && $t < 0)
            return $u  + 2 * $t;
        elseif ($u < 0 && $t < 0)
            return (pow($t, 2) + $u) / (pow($u, 3) * pow($t, 4));
    }

    $a = rand(1, 20);
    $b = rand(1, 20);

    $z = f2($a / $b, (pow($b, 8) - pow($a, 7)) / ($a * $b)) + f2((pow($a, 10) + pow($b,12)) / ($a * pow($b, 2) - $a), $b);

    echo "a = $a" . '<br>';
    echo "b = $b" . '<br>';
    echo "z = $z" . '<br>';
?>