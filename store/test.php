<?php 
session_start();
$_SESSION['items_id'] = array();
?>
<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

  Name: <input type="text" name="fname">
  <input type="text" name="id">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    foreach ($_POST as $name => $value) {
        if (!empty($value)) {
            array_push($_SESSION['items_id'], $value);
        }
    }
    print_r($_SESSION['items_id']);
}
?>

</body>
</html>