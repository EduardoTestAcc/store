<?php
// Create connection
$mysqli = new mysqli("localhost", "root", "", "shop");
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

for ($i=0; $i < count($_SESSION['items_id']) ; $i++) { 
    $sql = "select item_name, item_price from item where item_id = ". $_SESSION['items_id'][$i];
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<li>';
            echo '<input type="number" name="" id="">';
            echo '<label for="">'. $row['item_name'] .'</label>';
            echo '<label for="">'. $row['item_price'] .'</label>';
            echo '<button>x</button>';
            echo '</li>';
        }
    }
}

$mysqli->close();
?>