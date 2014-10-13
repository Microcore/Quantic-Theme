Quantic-Theme
=============

A Typecho theme, ported from previous Quantic blog program.

## Requirement ##

Memcache support requires memcache related programs, which is the following on Ubuntu 12.04: 

* `memcached`
* `php5-memcache`
* `php5-memcached`

## Notice ##

Currently `master` branch contains the memcache support. 
Since this feature requires not only external programs, but also some modifications in `config.inc.php`, 
it might be moved to another branch in the future. 

If you want to use memcache support, install the above packages and add the following codes to your `config.inc.php` 
in your Typecho installation directory, right after the `<?php` mark .

```php
    $mc = memcache_pconnect('127.0.0.1');
    $html = memcache_get($mc, 'typecho_'.md5($_SERVER['REQUEST_URI']));
    if($html===FALSE || $_GET['lantian']){
        header('X-Cache-Info:Miss');
    }else{
        header('X-Cache-Info:Hit');
        echo $html;
        exit();
    }
```
