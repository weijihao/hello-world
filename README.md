# Hello World #

This is a hello world package for php composer beginners tutorial.
<br/>
这是一个 php composer 学习教程的 hello world 包。

## Usage ##
```bash
1 composer require weijihao/hello-world
2 touch test.php
```

test.php 代码如下：
```php
<?php
require_once "vendor/autoload.php";

$hello = new weijihao\Demo\Hello();
echo $hello->hello();
```

```bash
$php test.php
```

It will echo "Hello World!" then exit.
