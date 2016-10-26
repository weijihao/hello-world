# Hello World #

This is a hello world package for php composer beginners tutorial.

## Usage ##
```bash
1 composer require weijihao/hello-world
2 touch test.php
```

test.php
```php
<?php
require_once "vendor/autoload.php";

$hello = new Rivsen\Demo\Hello();
echo $hello->hello();
```

```bash
$php test.php
```

It will echo "Hello World!" then exit.
