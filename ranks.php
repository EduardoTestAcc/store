<?php 
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    foreach ($_POST as $name => $value) {
        if (!empty($value)) {
            array_push($_SESSION['items_id'], $name);
            $_SESSION['items_id'] = array_unique($_SESSION['items_id']);
        }
    }
    print_r($_SESSION['items_id']);
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600">
<link rel="stylesheet" href="css/ranks.css" type="text/css">
<title>NorthRP</title>
</head>
<body>

<header>
    <div class="container">
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="#">Tienda</a></li>
                <li><a href="cart.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="grid">
    <div class="item">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <input type="hidden" name="1" value="correct">
        <input type="submit">
    </form>
    </div>
    <div class="item">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <input type="hidden" name="2" value="correct">
        <input type="submit">
    </form>
    </div>
    <div class="item">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <input type="hidden" name="3" value="correct">
        <input type="submit">
    </form>
    </div>
    <div class="item">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <input type="hidden" name="4" value="correct">
        <input type="submit">
    </form>
    </div>
    <div class="item">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <input type="hidden" name="5" value="correct">
        <input type="submit">
    </form>
    </div>
</div>


</body>
</html>