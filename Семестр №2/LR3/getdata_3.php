<?php

$posts = [];

// Генерируем посты
for ($i = -4; $i < 50; $i++){
    array_push($posts, [ 'title' => 'Невышедший альбом №' .$i  , 'content' => 'Кажется с солистом что-то случилось, что стало причиной невозможности выхода альбома №' . $i ]);
}

if (isset($_GET['tek']) && $_GET['kol']) {
    $tek = $_GET['tek'];
    $kol = $_GET['kol'];
    $posts = array_slice($posts, $tek, $kol);
    echo json_encode($posts);
} else {
    echo json_encode(array('success' => false));
}
