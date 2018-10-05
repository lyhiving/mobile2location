## 手机号码归属地查询
[![Latest Stable Version](https://img.shields.io/packagist/v/lyhiving/mobile2location.svg)](https://packagist.org/packages/lyhiving/mobile2location)
[![Build Status](https://travis-ci.org/lyhiving/mobile2location.svg?style=flat-square&branch=master)](https://travis-ci.org/lyhiving/mobile2location)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%205.6-8892BF.svg)](https://php.net/)


PHP 实现手机号码归属地查询，数据文件来自 [https://github.com/lovedboy/phone](https://github.com/lovedboy/phone) 

 - 归属地信息库文件大小：3,501,109 字节
 - 归属地信息库最后更新：2018年4月
 - 手机号段记录条数：387695

### Installation
```
composer require "lyhiving/mobile2location:^1.0"
```

### Usage
```php
<?php
use lyhiving\Mobile\Mobile2Location;

// composer 方式安装
// include './vendor/autoload.php';

// 非 composer 方式安装的，引入文件
// include './src/Mobile2Location.php';
	
$pl = new Mobile2Location();
$info = $pl->find(13800138000);
print_r($info);

// Output;
Array
(
    [province] => 北京
    [city] => 北京
    [postcode] => 100000
    [tel_prefix] => 010
    [sp] => 移动
)
```

### Thanks
[https://github.com/lovedboy/phone](https://github.com/lovedboy/phone)

[https://github.com/xluohome/phonedata](https://github.com/xluohome/phonedata)

### License
[MIT license.](https://raw.githubusercontent.com/lyhiving/mobile2location/master/LICENSE)