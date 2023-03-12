<?php
// Create connection
$mysqli = new mysqli("localhost", "root", "", "shop");
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
$total_price = 0;
for ($i=0; $i < count($_SESSION['items_id']) ; $i++) { 
    $sql = "select item_id, item_name, item_price from item where item_id = ". $_SESSION['items_id'][$i];
    $result = $mysqli->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<li>';
            echo '<input type="number" name="" id="" min="1">';
            echo '<label for="">'. $row['item_name'] .'</label>';
            echo '<label for="">$'. $row['item_price'] .'</label>';
            echo '<button id="'.$row['item_id'].'-btn">x</button>';
            echo '</li>';
            $total_price += floatval($row['item_price']);
        }
    }
}
echo '</ul>';
echo '<hr>';
echo '<div style="display:grid; grid-template-columns: 10% 15% 10% 10%;margin-left:10%">';
echo '<p>Subtotal</p>';
echo '<div></div>';
echo '<p>$'.$total_price.'</p>';
echo '</div>';
$_SESSION['total_price'] = $total_price;
$mysqli->close();
?>