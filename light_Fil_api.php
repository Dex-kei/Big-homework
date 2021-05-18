<?php
include __DIR__ . '/parts/config.php';

$sql = "SELECT * FROM f_test o
JOIN friend d ON o.sid= d.f_sid
WHERE o.sid=9 and d.sid= ? ";

$stmt= $pdo->prepare($sql);
$stmt->execute([$_POST['sid']]);
$rows = $stmt->fetch();

echo json_encode($rows, JSON_UNESCAPED_UNICODE);

?>