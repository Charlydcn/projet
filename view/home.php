<?php

ob_start();

?>


<div id="main_container">
    <div>
        <h1>Find what's best for you</h1>

        <a href="index.php?action=allProducts">SHOP NOW</a>
    </div>

    <figure>
        <img src="public/img/homepage.jpg" alt="phone saying Hello" id="homepage_img">
    </figure>

</div>

<?php

$content = ob_get_clean();
$title = "Home";
$secondTitle = "Home";
$css = "home.css";
$js = "home.js";
$basketQtt = $qtt;
require 'template.php';

?>