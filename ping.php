check this string in proxy response content

<?php
if (!empty($_GET['q']) && ('query' == $_GET['q'])) {
    echo 'allow_get';
}

if (!empty($_POST['r']) && ('request' == $_POST['r'])) {
    echo 'allow_post';
}

if (!empty($_COOKIE['c']) && ('cookie' == $_COOKIE['c'])) {
    echo 'allow_cookie';
}

if (!empty($_SERVER['HTTP_REFERER']) && ('http://www.google.com' == $_SERVER['HTTP_REFERER'])) {
    echo 'allow_referer';
}

if (!empty($_SERVER['HTTP_USER_AGENT']) && ('Mozila/4.0' == $_SERVER['HTTP_USER_AGENT'])) {
    echo 'allow_user_agent';
}

//proxy levels
//Level 3 Elite Proxy, connection looks like a regular client
//Level 2 Anonymous Proxy, no ip is forworded but target site could still tell it's a proxy
//Level 1 Transparent Proxy, ip is forworded and target site would be able to tell it's a proxy
if(!$_SERVER['HTTP_X_FORWARDED_FOR'] && !$_SERVER['HTTP_VIA'] && !$_SERVER['HTTP_PROXY_CONNECTION']) {
    echo 'proxylevel_elite';
} elseif(!$_SERVER['HTTP_X_FORWARDED_FOR']) {
    echo 'proxylevel_anonymous';
} else {
    echo 'proxylevel_transparent';
}