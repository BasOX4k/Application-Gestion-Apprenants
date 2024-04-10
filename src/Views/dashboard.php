<?php

include_once __DIR__ . "/../../Components/navbar.php";

?>

<div class="content">
    <?php
    switch ($section) {
        case 'utilisateur':
            switch($action) {
                case 'new':
                    include __DIR__ . '/../../connexion.php';
                    break;

                

                default: 
                include __DIR__ . '/../../index.php';
                break;
            }
    } 
?>

</div>