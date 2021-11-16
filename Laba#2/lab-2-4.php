 <?php
echo '<title>Мартынов В.Е.</title>';
echo '<p>Вариант №2</p>';
    $Q = array();
    $A = array();
    $N = rand(1, 20);

    for ($i = 0; $i < $N; $i++) {
        $A[] = rand(-20,20);
    }
    echo "</br> Исходный массив:  </br>";
    foreach($A as $value) {
    echo "$value ";
    }
    
    sort($A);
    for ($i = 0; $i < count($A); $i++) {  
        if ($A[$i] < 0 )
        {$Q[] = $A[$i];} 
        elseif  ($A[$i] == 0 )
        {$Q[] = $A[$i];}
         elseif  ($A[$i] > 0 )
        {$Q[] = $A[$i];}
        
    }
     echo "</br> Отсортированный массив: </br>";
    foreach($Q as $value) {
       
    echo "$value ";
    }
    
    echo '<p>Вариант №7</p>';
     $Q = array();
    $A = array();
    $N = rand(1, 20);

    for ($i = 0; $i < $N; $i++) {
        $A[] = rand(1,20);
    }
    echo "</br> Исходный массив:  </br>";
    foreach($A as $value) {
    echo "$value ";
    }
    sort($A);
    for ($i = 0; $i < 2; $i++)
        {$Q[] = $A[$i];}
        $Sum = $Q[0] + $Q[1];
    echo "</br> Полученная минимальная сумма =  $Sum";
?>