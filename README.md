# coachtechフリマ

## 環境構築
Dockerビルド
1. git clone git@github.com:ST0724/flea-market.git
2. docker-compose up -d --build

Laravel環境構築
1. docker-compose exec php bash
2. composer install
3. cp .env.example .env
4. .envファイルの環境変数を適宜変更
5. php artisan key:generate
6. php artisan migrate
7. php artisan db:seed

## 使用技術(実行環境)
+ Laravel 8.83.8

## ER図

## URL
開発環境：[http://localhost/](http://localhost/)