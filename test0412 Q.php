<?php

require __DIR__. '/parts/__connect_db.php';

$stmt = $pdo->query('SELECT * FROM testtext');

// $row = $stmt->fetch();
// echo json_encode($row, JSON_UNESCAPED_UNICODE);

while($row = $stmt->fetch()){
    echo "{$row['name']} <br>";
}