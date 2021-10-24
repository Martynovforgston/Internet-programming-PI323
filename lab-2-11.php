<?php
echo '<title>Мартынов В.Е.</title>';
echo 'Вариант №3 ';
$n=rand(1,32500);
echo 'Натуральное число = ' . $n ;
{
    $Sum = array();
    for ($i = 2; $i < $n; $i++)
    {
        if (($n % $i) == 0)
        {
            $Sum[] = $i;
        }
    }
    echo "Total sum: " . array_sum($Sum) . "\n";
}
?>