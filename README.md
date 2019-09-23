# eot
East-oriented tests

## examples

### simple assertion

```php
(new IsTrue(function () { return true; }))->run(new ConsoleOutput());
```

### exception assertion

```php
(new ExceptionThrown(
    InvalidArgumentException::class,
    function () { throw new InvalidArgumentException('test'); }
))->run(new ConsoleOutput());
```
