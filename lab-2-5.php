<?php

echo '<title>Мартынов В.Е.</title>';

$var = 5;
$i = 0;
while (++$i <= $var) {
    echo $i . ' ';
}

echo '<br>';

$var = 0;
while (--$i > $var) {
    echo $i . ' ';
};
?>