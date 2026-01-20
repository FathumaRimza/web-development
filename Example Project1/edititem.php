<?php
require_once 'includes/config.php';

session_start();

if (isset($_SESSION['username']) && isset($_POST['id']) && isset($_POST['item']) && isset($_POST['price'])) {
  $id  = filter_var($_POST['id'], FILTER_VALIDATE_INT);
  $item  = trim($_POST['item']);
  $price = filter_var($_POST['price'], FILTER_VALIDATE_FLOAT, ['options' => ['min_range' => 0.00, 'max_range' => 10000.00]]);

  if ($id !== FALSE && $price !== FALSE && strlen($item) <= 32) {
    $stmt = $pdo->prepare('UPDATE items SET item=:item, price=:price WHERE id=:id');
    $stmt->execute([
      'id'  => $id,
      'item'  => $item,
      'price' => (int) ($price * 100)
    ]);
  }
}

header('Location: index.php');
?>