# lumen-jwt-api
API Framework Base On Lumen

# 安装

## 初始化

将本项目克隆至你的工作空间

```
git clone https://github.com/wLaLaLa/lumen-jwt-api.git && cd lumen-jwt-api && composer install
```

## 配置

生成配置文件

```
cp .env.example .env
```

## 生成 app key

可以将下面命令生成的的key做为你的`.env`配置文件的`APP_KEY`的值。当然也可自己用其他方式生成

```
php -r "echo md5(uniqid()).PHP_EOL;"
```

## 生成 jwt key

执行以下命令生成jwt密钥

```
php artisan jwt:secret
```

### 至此配置完成