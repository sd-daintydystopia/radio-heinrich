<?php

$item_one = 'Start';
$item_two = 'Praxis';
$item_three = 'Leistungen';
$item_four = 'Kontakt';
#item-icon-info = '/path/to/svg';
?>

<nav class="primary-menu">

    <ul class="menu-container">
        <li class="menu-item">
            <a class="menu-link" href="index.html">
                <div><?php echo $item_one; ?></div>
            </a>
        </li>
        <li class="menu-item">
            <a class="menu-link" href="#">
                <div><?php echo $item_two; ?></div>
            </a>
        </li>
        <li class="menu-item">
            <a class="menu-link" href="#">
                <div><?php echo $item_three; ?></div>
            </a>
        </li><li class="menu-item">
            <a class="menu-link" href="#">
                <div><?php echo $item_four; ?></div>
            </a>
        </li>
    </ul>

</nav><!-- #primary-menu end -->