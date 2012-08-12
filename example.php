<?php

namespace ProxyChecker;

include __DIR__ . '/ProxyChecker.php';

$pingUrl = 'http://yourdomain.com/ProxyChecker/ping.php';
$proxyChecker = new ProxyChecker($pingUrl);

$proxies = array(
    '183.95.132.76:80',
    '195.5.18.41:8118',
);

$results = $proxyChecker->checkProxies($proxies);

echo '<pre>';
var_export($results);
echo '</pre';
