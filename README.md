# 快递单号查询

## 安装

环境要求：laravel verstion > 5.0

1. 使用 [composer](https://getcomposer.org/)

  ```
  composer require widuu/laravel-express
  ```

## 配置

1. 注册 `ServiceProvider`:

  ```
  widuu\Express\ExpressServiceProvider::class,
  ```

2. （可选）添加外观到 `config/app.php` 中的 `aliases` 部分:

  ```php
  'Express' => widuu\Express\Express::class,
  ```

##使用


## License

APACHE-2.0
