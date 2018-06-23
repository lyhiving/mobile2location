## 手机号码归属地查询
[![Latest Stable Version](https://img.shields.io/packagist/v/lyhiving/mobile2location.svg)](https://packagist.org/packages/lyhiving/mobile2location)
[![Build Status](https://travis-ci.org/lyhiving/mobile2location.svg?style=flat-square&branch=master)](https://travis-ci.org/lyhiving/mobile2location)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%205.6-8892BF.svg)](https://php.net/)


PHP 实现手机号码归属地查询，数据文件来自 [https://github.com/lovedboy/phone](https://github.com/lovedboy/phone)

### Installation
```
composer require "lyhiving/mobile2location:^0.1"
```

### Usage
```php
<?php
use lyhiving\Phone\Mobile2Location;

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

### License
[MIT license.](https://raw.githubusercontent.com/lyhiving/mobile2location/master/LICENSE)