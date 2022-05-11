<?php

try {
    $conn = new mysqli('a0668825.xsph.ru', 'a0668825_Lab3', '1234567890', 'a0668825_Lab3', 3306);

    if ($conn->connect_error) {
        die(json_encode($conn->connect_error));
    }

    $sql = "SELECT username, email, subject, created_at FROM reviews";
    $result = $conn->query($sql);

    $rows = array();

    while ($row = $result->fetch_assoc()) {
        array_push($rows, $row);
    }

    echo json_encode($rows);

    $conn->close();
} catch (Exception $e) {
    echo json_encode(array('error' => $e->getMessage()));
}
