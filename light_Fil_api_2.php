<?php
include __DIR__ . '/parts/config.php';

$output = [
    'success' => false,
    'code' => 0,
    'error' => '資料不齊全'
];

if(isset($_POST['name'])) {
    // TODO: 欄位資料檢查

    // 檢查手機號碼格式
    $mobile_re = "/^09\d{2}-?\d{3}-?\d{3}$/";
    if(empty(preg_grep($mobile_re, [ $_POST['mobile']]))){
        $output['error'] = '手機號碼格式不符';
        echo json_encode($output, JSON_UNESCAPED_UNICODE);
        exit;  // 結束, 後面的程式不會執行, die()
    }

    $sql = "INSERT INTO `member_test`(
                           `name`, `mobile`, `adress`, 
                           `email`, `address`, `created_at`
                           ) VALUES (
                                ?, ?, ?,
                                ?, ?, NOW()
                           )";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['name'],
        $_POST['mobile'],
        $_POST['address'],
        $_POST['email'],
        $_POST['address'],
    ]);

    if($stmt->rowCount()){
        $output['success'] = true;
        $output['error'] = '';
    } else {
        $output['error'] = '資料不齊全';
    }
}





echo json_encode($output, JSON_UNESCAPED_UNICODE);