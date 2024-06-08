<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Về dự án

Dự án web quản lý hàng tồn kho cơ bản nhằm mục đích tạo ra một hệ thống đơn giản nhưng hiệu quả để quản lý và theo dõi hàng tồn kho cho các doanh nghiệp nhỏ và cửa hàng. Hệ thống này sẽ giúp người dùng dễ dàng kiểm tra số lượng hàng tồn kho, nhập/xuất hàng, và theo dõi lịch sử giao dịch hàng hoá.

## Công nghệ sử dụng
- [Laravel](https://laravel.com/).
- [MySQL](https://www.mysql.com/).
- [TailwindCSS](https://tailwindcss.com/)
- [Composer](https://getcomposer.org/download/)

Laravel có thể truy cập, mạnh mẽ và cung cấp các công cụ cần thiết cho các ứng dụng lớn, mạnh mẽ.

## Yêu Cầu

- PHP >= 8.3
- Composer
- NodeJS 18
- MySQL hoặc một hệ thống cơ sở dữ liệu SQL Khác


## Cài đặt

```bash
# cài đặt vendor của composer
composer install
# cài đặt node_modules (sử dụng tailwindCSS)
npm i
# biên dịch cấu trúc tailwind để sử dụng
npm run build
# tạo 1 APP key mới

Sao chép file `.env.example` thành `.env`: `cp .env.example .env`

Cấu hình cơ sở dữ liệu trong file `.env`

php artisan key:generate
# merge table structure lên cơ sở dữ liệu
php artisan migrate
# chạy server
php artisan serve
# Truy cập ứng dụng trên trình duyệt tại 
http://localhost:8000
```

### LƯU Ý:
```bash
# trong quá trình viết code TailWindCSS bạn cần phải bật viteServer thông qua lệnh
npm run dev

# Sau khi code xong chỉ đơn giản là tắt vite server đi và biên dịch tailwindCSS
npm run build
```

## Cấu trúc dự án
### Thư Mục Gốc

- `app`: Chứa mã nguồn của ứng dụng Laravel, bao gồm các model, controllers, và các logic của ứng dụng.
- `bootstrap`: Chứa các file cần thiết cho quá trình khởi tạo ứng dụng Laravel.
- `config`: Chứa các file cấu hình của ứng dụng Laravel.
- `database`: Chứa các file migration, seeds và các file khác liên quan đến cơ sở dữ liệu.
- `public`: Chứa các file tĩnh như CSS, JavaScript và các tài nguyên hình ảnh.
- `resources`: Chứa các file tài nguyên không tĩnh như các file blade templates, Sass, và JavaScript.
- `routes`: Chứa các file định tuyến của ứng dụng Laravel.
- `storage`: Chứa các file log, file tải lên, và các file khác mà ứng dụng tạo ra.
- `tests`: Chứa các file kiểm thử cho ứng dụng Laravel.
- `vendor`: Chứa các thư viện bên ngoài được cài đặt thông qua Composer.

### Tệp và Thư Mục Quan Trọng

- `app/Http/Controllers`: Chứa các controllers của ứng dụng.
- `app/Models`: Chứa các model của ứng dụng.
- `database/migrations`: Chứa các file migration để tạo và quản lý cấu trúc của cơ sở dữ liệu.
- `routes/web.php`: Chứa các route định tuyến cho ứng dụng web.
- `resources/views`: Chứa các file blade templates cho giao diện người dùng.


## Cần Biết Thêm

- [Laravel Documentation](https://laravel.com/docs): Tài liệu chính thức của Laravel.
- [Laracasts](https://laracasts.com): Video hướng dẫn Laravel từ Jeffrey Way.
- [GitHub Repository](https://github.com/laravel/laravel): GitHub repository của Laravel.

## Đóng Góp

Nếu bạn muốn đóng góp vào dự án, vui lòng làm theo các bước sau:

1. Fork repository
2. Clone repository từ tài khoản của bạn: `git clone https://github.com/YOUR-USERNAME/laravel-project.git`
3. Tạo một branch mới để làm việc: `git checkout -b feature/your-feature`
4. Commit các thay đổi của bạn: `git commit -am 'Add some feature'`
5. Push branch đến repository của bạn: `git push origin feature/your-feature`
6. Tạo một Pull Request trên GitHub


## Người đóng góp

- **[Trí ngẹo](https://vehikl.com/)**
- **[Hitoru](https://tighten.co)**
- **[Miho](https://webreinvent.com/)**

## Liên Hệ

Nếu bạn có bất kỳ câu hỏi hoặc đề xuất nào, vui lòng liên hệ với chúng tôi tại
phần issues của dự án này.

## Bản quyền

Dự án mã nguồn mở theo [MIT license](https://opensource.org/licenses/MIT).
