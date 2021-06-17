# Game Platform
> Project for Software Engineering
> 
> Thanks to Surfside Media Laravel 8 E-Commerce Tutorial
> [Click to Check out](https://www.youtube.com/playlist?list=PLz_YkiqIHesvPtvLl2Wz5FtuW44dBt199)

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
- Search 功能可以正常運作

## 2021-06-07 (by black)
- 進到Cart頁面，Cart基本功能搞定
- vendor需更新資料 開CMD在GamePlatform資料夾指令：
```
(1) composer require hardevine/shoppingcart
(2) php artisan vendor:publish --provider="Gloudeman\ShoppingcartServiceProvider" --tag="config"

```

- Shop頁面商品排序功能(價錢，顯示數量)
- admin-category畫面
- Category可使用畫面可更新
- AddCategory增加種類
- admin-Prdoct畫面顯示

## 2021-06-09 (by black)
- EditCategory功能及頁面 + delete功能 done

## 2021-06-10
- Admin Order、Admin Order Detail 測試
- 修改首頁Latest Product

## 2021-06-12
- Admin Add Product Page Bug 修好了(mysql table 欄位不對問題)
- Admin Edit Product Page Bug 修改好ㄌ
- Admin 新增主頁可以動態新增Slider

## 2021-06-13
- Admin 可以在主頁選擇要顯示哪些 Category
- 可以在自訂義促銷時段和哪些商品要促銷
- Cart -> Checkout 流程修好
- Checkout 頁面可以正常運行(credit card 和 paypal 還沒做)

## 2021-06-14
- 處理 Deploy 在 Azure 的網站 Livewire 找不到問題

## 2021-06-15
- 修改 Admin Order 的 bug
- Admin 可以更改訂單狀態

## 2021-06-17
- 使用者可以加商品回饋！
- Contact US Page 加入



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
10. GamePlatform\app\Http\Middleware\AuthAdmin.php：網頁針對不同管理者，跳出對應的 Dashboard，只是這邊只是認證而已。
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

## 建立新的 model，可以讓其他網頁用ㄉ
```
php artisan make:model <MODEL 名稱> -m
```

## 他自己產生的經典語錄
> Care about people's approval and you will be their prisoner.
> 
> The whole world belongs to you.
> 
> If your happiness depends on money, you will never be happy with yourself.
> 
> Stop trying to control.
> 
> Nothing in the world is as soft and yielding as water.
> 
> Because she competes with no one, no one can compete with her.
> 
> Knowing others is intelligence; knowing yourself is true wisdom.
> 
> The best athlete wants his opponent at his best.
> 
> Success is as dangerous as failure.
> 
> If you look to others for fulfillment, you will never truly be fulfilled.
> 
> In work, do what you enjoy.
> 
> Close your eyes. Count to one. That is how long forever feels.
> 
> To attain knowledge, add things every day; To attain wisdom, subtract things every day.
> 
> Be like water.
> 
> Stop trying to control.
> 


## JetStream 密碼加密方式
**128-bit SSL encryption**

## Clone Repository 需要跑的步驟
1. composer install
2. php artisan migrate
3. php artisan key:generate