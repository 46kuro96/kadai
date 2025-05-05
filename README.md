お問合せフォーム

環境構築
Dockderビルド
  1. git clone リンク
  2. docker-compose up -d --build

Laravel環境構築

 1. docker-compose exec php bash
 2. composer install
 3. envexampleファイルから.envを作成し、環境変数を変更
 4. php artisan key:generate
 5. php artisan migrate
 6. php artisan db: seed


使用技術
　・　PHP 7.*
　・　Laravel 8.*
　・　MySQL 8.*

URL
　・開発環境: http://localhost/ 
　・phpMyAdmon： http://localhost:8080/


ER図 

![contact-form-test](https://github.com/user-attachments/assets/989dd0ae-a727-47f9-87cb-f80cbb6c7ccd)

![contact-form-test2](https://github.com/user-attachments/assets/221a267b-75da-43fe-a1cd-e55b856ae41d)
