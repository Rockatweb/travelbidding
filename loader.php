<?php

$view = (isset($_GET['p']) && $_GET['p'] != '' )  ? $_GET['p'] : 'index';

if ( $view === 'index' ) {
    include('views/includes/header_big.phtml');
} else {
    include('views/includes/header_small.phtml');
}


$template = file_exists('views/' . $view . '.phtml') ? $view : '404';

echo '<div class="main">';

include('views/' . $template . '.phtml');

echo '</div>';

include('views/includes/footer.phtml');