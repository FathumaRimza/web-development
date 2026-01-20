<?php
if ($_POST && isset($_POST['num'])) {
    $data = ['squaredValue' => $_POST['num'] * $_POST['num']];
    echo json_encode($data);
}
?>