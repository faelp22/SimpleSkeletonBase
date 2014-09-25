<?php
// Setup autoloading
require 'init_autoloader.php';

function get_css() {
    global $index;
    echo \controller\CoreProcess::get_css($index, 'view/bootstrap/css/bootstrap.min.css');
    echo \controller\CoreProcess::get_css($index, 'view/main.css');
}

function get_js() {
    global $index;
    echo \controller\CoreProcess::get_js($index, 'view/jquery/jquery-2.1.1.min.js');
    echo \controller\CoreProcess::get_js($index, 'view/bootstrap/js/bootstrap.min.js');
    echo \controller\CoreProcess::get_js($index, 'view/main.js');
}

function get_content() {
    
    echo \common_hash\GenIdHash::genIdHash();
    echo '<br />';
    echo $hash = \common_hash\Bcrypt::hash("123456");
    echo '<br />';
    if(\common_hash\Bcrypt::check('123456', $hash) == 1):
        echo "Senha ok";
    else:
        echo "Senha Error";
    endif;
    echo '<br />';
    echo 'função soma simples';
    echo '<br />';
    echo "1 + 2 = ";
    echo \model\mat::soma(1, 2);
    
}

require_once 'view/layout.php';