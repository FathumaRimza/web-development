<?php
require_once 'includes/config.php';

session_start();

if (isset($_SESSION['username']) && $_GET && isset($_GET['id'])) {
    $id = trim($_GET['id']);

    $stmt = $pdo->prepare('SELECT * FROM items WHERE id=:id');
    $stmt->execute(['id' => $id]);
    $result = $stmt->fetch();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Edit Item</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
<body>
<table class="interface">
<form method="post" action="edititem.php">
  <tr><td colspan="4"><h1 style="text-align:center;">Edit Item</h1></td></tr>
  <tr>
    <td colspan="4">
    <input type="hidden" name="id" value="<?php echo htmlentities($result['id']); ?>" />
    <input type="text" maxlength="32" name="item" placeholder="Item" value="<?php echo htmlentities($result['item']); ?>" required />
    &nbsp;Rs. <input type="number" min="0.00" max="10000.00" name="price" step="0.01" value="<?php echo htmlentities(number_format($result['price'] / 100, 2)); ?>" required />
    <input class="safe" type="submit" value="Edit" />
    </td>
  </tr>
</form>
</table>
</body>
</html>
<?php   
} else {
    header("Location: index.php");
}
?>