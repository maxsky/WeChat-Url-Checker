# WeChat Url Checker

[![996.icu](https://img.shields.io/badge/link-996.icu-red.svg)](https://996.icu)

检测 URL 在微信中是否可用



## 要求

PHP >= 7.1



## 原理

通过 Get 请求 `https://mp.weixinbridge.com/mp/wapredirect?url=TARGET_URL` 地址，获取 302 跳转前的响应头 `Location` 并与 `TARGET_URL` 对比，一致为可用，不一致为不可用。



## 安装

```shell
composer required maxsky/wechat-url-checker
```



## 测试

```php
<?php

use MaxSky\WeChat\UrlChecker;

$checker = new UrlChecker();

$this->assertTrue($checker->check('https://github.com'));
```
