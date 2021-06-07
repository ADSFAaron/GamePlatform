# Game Platform
> Project for Software Engineering

# Changelog

## 2021-05-03

- Initial Commit

## 2021-05-04

- Add Laravel JetStream (管理使用者用)
- De 了一些 JetStream 的 css/js bug

## 2021-06-04
- 網頁加入到 Laravel
- 網頁整合登入

## 2021-06-05
- Shop 頁面已經可以正常運行
- Register 已完成

## 2021-06-06
- Shop 頁面可以動態產生
- 可以產生每個產品的細部頁面

## 2021-06-07
- Detail 頁面商品內容和其他資訊、popular product、related product 搞定

## 2021-06-07 (by black)
- 進到Cart頁面
- vendor需更新資料 開CMD在GamePlatform資料夾指令：(1)composer require hardevine/shoppingcart    
(2)php artisan vendor:publish --provider="Gloudeman\ShoppingcartServiceProvider" --tag="config"

- Cart頁面商品數量加減

- Cart商品刪除功能




# 重要檔案
1. GamePlatform\.env：管理整個專案的網頁位置和 DB 的資訊
2. GamePlatform\public\js\app.js：Vue.js 所在地
3. GamePlatform\composer.json：管理專案載入的套件
4. GamePlatform\public\index.php：頁面起始點
5. GamePlatform\resources\views：每個頁面的細部元件寫在這裡，命名方式都是xxx.blade.php
6. GamePlatform\resources\views\livewire：網頁的 Content 寫在這裡
7. GamePlatform\app\Http\Livewire：網頁的啟動、header、footer config 都在這
8. GamePlatform\public\assets：網頁的元件放這
9. GamePlatform\app\Http\Kernel.php：網頁的 Session 處理
10. GamePlatform\app\Http\Middleware\AuthAdmin.php：網頁針對不同管理者，跳出對應的 Dashboard，只是這邊只是認證而已，內容在
11. GamePlatform\vendor\laravel\fortify\src\Actions\AttemptToAuthenticate.php：增加登入時用的 Session
12. GamePlatform\app\Actions\Fortify\CreateNewUser.php：管理註冊時要增加到 mysql 的資料
13. GamePlatform\app\Models\User.php：註冊時增加的欄位，這裡也要加，不然 sql 根本讀不到
14. GamePlatform\database\seeders\DatabaseSeeder.php：產生資料用

## 啟動網頁
```
php artisan serve
```

## 建立新的 php
```
php artisan make:livewire 網頁名(會在重要檔案的6. 7.底下)
```

## 他自己產生的經典語錄
> Care about people's approval and you will be their prisoner.
> The whole world belongs to you.
> If your happiness depends on money, you will never be happy with yourself.
> Stop trying to control.
> Nothing in the world is as soft and yielding as water.
> 


## 密碼加密方式
**128-bit SSL encryption**