<?php 
session_start();
?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="css/cart.css" type="text/css">
<title>NorthRP</title>
</head>
<html>
<body>
<header>
    <div class="container">
        <nav>
            <ul>
                <li><a id="nav" href="index.php">Inicio</a></li>
                <li><a id="nav" href="#">Tienda</a></li>
                <li id="svg-line"><a href="cart.php">
                    <svg class="shopping-cart"
                    viewBox="0 0 24 24" width="24" height="24" 
                    fill="none" stroke="#222" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="9" cy="21" r="1"></circle>
                    <circle cx="20" cy="21" r="1"></circle>
                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                    </svg>
                </a></li>
            </ul>
        </nav>
    </div>
</header>

<h2>Carrito de compras</h2>
<hr>
<div class="grid">
    <p># Cantidad</p>
    <p>Ítems</p>
    <p>Precio</p>
</div>
<ul class="items-list">
    <?php include 'php/get_items.php'; ?>
    <li>
        <input type="number" name="" id="">
        <label for="">'. $row['item_name'] .'</label>
        <label for="">'. $row['item_price'] .'</label>
        <button id="">x</button>
    </li>
</ul>
<hr>
<p>Subtotal $...</p>

<form action="<?php echo htmlspecialchars('checkout.php');?>">
<field class="nick-input">
    <label for="username">Nombre de usuario</label>
    <input type="text" name="" id="username" required>
    <br>
    <a href="">go back</a>
    <input type="submit" value="Checkout">
</field>
</form>

<script>
    const buttons_id = new Array();
    const buttons = new Array();
    for (let index = 0; index < <?php echo count($_SESSION['items_id']) ?>; index++) {
        buttons_id.push((index+1) + '-btn');   
    }

    for (let index = 0; index < buttons_id.length; index++) {
        buttons.push(document.getElementById(buttons_id[index]));
        
    }

    for (let index = 0; index < buttons.length; index++) {
        buttons[index].addEventListener("click", async () => {
            buttons[index].parentNode.remove();
            const data = await send_http_request("GET", "php/update_session.php?index="+index);
            
        })
    }

    function send_http_request(method, url) {
        const promise = new Promise((resolve) => {
            const xhr = new XMLHttpRequest();
            xhr.open(method, url);
            xhr.onload = () => {
                resolve(xhr.responseText);
            }
            xhr.send();
        })
        return promise;
    }
</script>

</body>
</html>