
##お問い合わせフォーム

##環境構築
・
・docker compose up -d --build

##Laravel環境構築
・dokcer compose exec php bash
・composer install
・cp .env.example .env . 環境変数を適宣変更
・php artisan key:generate
・php artisan migrete
・php artisan db:seed

##開発環境
・お問い合わせ画面：http://localhost/
・ユーザー登録：http://localhost/register
・phpMyAdomin：hrrp://localhost:8080/

##使用技術（実行環境）

・PHP 8.2.11 
・Laravel 8.83.8
・jquery 3.7.1min.js
・MySQL 8.0.26
・nginx 1.21.1
・HTML / CSS
・JavaScript

## ER図

本アプリケーションでは、お問い合わせとカテゴリを1対多の関係で管理しています。

![ER図](er.png)

```
┌───────────────┐
│ categories    │
├───────────────┤
│ id (PK)       │
│ content       │
│ created_at    │
│ updated_at    │
└───────┬───────┘
        │ 1
        │
        │
        │ N
┌───────▼────────┐
│ contacts       │
├────────────────┤
│ id (PK)        │
│ category_id(FK)│
│ first_name     │
│ last_name      │
│ gender         │
│ email          │
│ tel            │
│ address        │
│ building       │
│ detail         │
│ created_at     │
│ updated_at     │
└────────────────┘

┌───────────────┐
│ users         │
├───────────────┤
│ id (PK)       │
│ name          │
│ email         │
│ password      │
│ created_at    │
│ updated_at    │
└─────────────