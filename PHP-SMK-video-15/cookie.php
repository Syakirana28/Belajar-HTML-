<?php 

    $cookie_name = 'user';
    $cookie_value = 'Joni';

    setcookie($cookie_name, $cookie_value);

    $cookie_value = 'tejo';
    setcookie($cookie_name, $cookie_value);

    echo $_COOKIE[$cookie_value];

    setcookie("user", "", time() - 3600);
    echo '</br>';

    var_dump($_COOKIE);

?>