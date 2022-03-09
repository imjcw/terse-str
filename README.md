## 简介

为 `terse` 服务的字符串工具类。

## 安装

```bash
composer require "terse/str"
```

## 使用

```php
use Terse\Str;

// terse-str -> TerseStr
Str::camelize('terse-str', '-'); // TerseStr
// TerseStr -> terse-str
Str::uncamelize('TerseStr', '-'); // terse-str
```