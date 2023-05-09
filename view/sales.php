<?php

ob_start();

$products = $sql->fetchAll();

?>

<h1>Sales</h1>

<div>

    <?php
    foreach ($products as $product) {

        $newPrice = $product['price'] * ((1 - ($product['sale']) / 100));

    ?>

        <ul>
            <a href="">
                <img src="public/img/<?= $product['category'] . "/" . $product['img'] ?>" alt="<?= $product['name'] ?> image">
                <li>
                    <h3><?= $product['name'] ?></h3>
            </a>
            </li>
            <li>
                <h2>$<?= $newPrice . "</h2><span class='old_price'>$" . $product['price'] ?></span>
            </li>
            <p>-<?= $product['sale'] ?>%</p>
        </ul>

    <?php } ?>

</div>


<?php

$content = ob_get_clean();
$title = "Sales";
$secondTitle = "Sales";
$css = "products.css";
$css2 = "sales.css";
$js = "";
require 'template.php';

?>