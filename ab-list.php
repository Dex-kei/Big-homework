<?php include __DIR__ . '/parts/config.php'; ?>
<?php
$title = '列表';

$sql = 'SELECT * FROM testtext';

$rows = $pdo->query($sql)->fetchAll();
?>


