<?php

echo '<title>Мартынов В.Е.</title>';

$a = rand(-20, 20);
$c = rand(-20, 20);
$d = rand(-20, 20);
$b = rand(-20, 20);

echo 'Вариант №3' . '<br>';
echo 'Результат:' . '<br>';

# Числитель
$numerator = (2 * $c) + ($d * 51);
# Знаменатель
$denominator = ($d - $a - 1);

if ($denominator === 0) {
    echo 'Деление на ноль! Перезагрузите страницу.';
} else {
    echo '((2 * ', $c, ') + (', $d, ' * 51) \ ';
    echo '(', $d, ' - ', $a, ' - 1))';
    echo ' = ', $numerator / $denominator;
}

echo '<br><br>';

echo 'Вариант №8' . '<br>';
echo 'Результат:' . '<br>';

# Числитель
$numerator = ($b * (2 * $c) + $d - 52);
# Знаменатель
$denominator = $a / 3 + 1;

if ($d === 0 or $denominator === 0) {
    echo 'Деление на ноль! Перезагрузите страницу.';
} else {
    echo '(', $b, ' * (2 * ', $c, ') + ', $d, ' - 52)';
    echo '(', $a, ' / 3 + 1)';
    echo ' = ', $numerator / $denominator;
}