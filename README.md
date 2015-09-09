# Proxy Checker
Check if a proxy is working, its type (transparent, anonymous, elite) and other info (time, http code, redirect count, speed etc.)

# Usage
## Proxy format
    {ip}:{port},{password},{type}

type - http, socks4, socks5 <br />
password and type if not required <br /> <br />

Some examples:

    123:456:789:8080
    123:456:789:8080,user:pass
    123:456:789:8080,user:pass,socks5


## Check one proxy

    $pingUrl = 'http://yourdomain.com/ProxyChecker/ping.php';
    $proxy = 'xxx:xxx:xxx:xx';

    $proxyChecker = new ProxyChecker($pingUrl);
    $results = $proxyChecker->checkProxy($proxy);

## Check several proxis

    $pingUrl = 'http://yourdomain.com/ProxyChecker/ping.php';
    $proxies = array('xxx.xxx.xxx.xxx:xx', 'xxx.xxx.xxx.xxx:xx');

    $proxyChecker = new ProxyChecker($pingUrl);
    $results = $proxyChecker->checkProxies($proxies);

# Result
## Allowed/Disallowed
Array allowed/disallowed operations of proxy (get, post, referer, cookie, user_agent), for example:

    'allowed' => array (
        0 => 'get',
        1 => 'post',
        2 => 'referer',
        3 => 'user_agent'
    )

    'disallowed' => array (
        0 => 'cookie'
    )

## Proxy level
elite - connection looks like a regular client <br />
anonymous - no ip is forworded but target site could still tell it's a proxy  <br />
transparent - ip is forworded and target site would be able to tell it's a proxy  <br />

    'proxy_level' => 'elite',

## Other info
Other proxy info - time, http code, redirect count, speed etc:

    'info' => array (
      'content_type' => 'text/html',
      'http_code' => 200,
      'header_size' => 237,
      'request_size' => 351,
      'ssl_verify_result' => 0,
      'redirect_count' => 0,
      'total_time' => 1.212548,
      'connect_time' => 0.058647,
      'size_upload' => 143,
      'size_download' => 485,
      'speed_download' => 399,
      'speed_upload' => 117,
      'download_content_length' => 485,
      'upload_content_length' => 143,
      'starttransfer_time' => 1.059746,
      'redirect_time' => 0,
      'certinfo' => array (),
    ),
