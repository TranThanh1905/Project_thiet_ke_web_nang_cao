# Thiết kế web nâng cao Project
Project: Quản lý lớp và khóa học(Course Management System)
Hệ thống giúp quản lý thông tin các khóa học, bao gồm các chức năng như tạo, chỉnh sửa, xóa, tìm kiếm và phân trang danh sách khóa học.
### Link Repository: https://github.com/TranThanh1905/Project_thiet_ke_web_nang_cao

## Cài đặt ⚙️ 
### Yêu cầu hệ thống
+ PHP 8.2.12 
+ Composer
+ XAMMPP
+ MySQL Environment 
+ Laravel Framework 11.37.0
### Khởi tạo dữ liệu
+ Khởi tạo dependencies (composer install)
+ Khởi tạo Migration (php artisan migrate)
+ Khởi tạo Model (php artisan make:model)
+ Khởi tạo Controller (php artisan make:controller )

## Chức năng chính
- 📌 **Danh sách khóa học**: Hiển thị tất cả các khóa học với phân trang.
- 🔍 **Tìm kiếm khóa học**: Lọc khóa học theo tiêu đề, giảng viên, hoặc trưởng bộ môn.
- 🆕 **Thêm khóa học**: Cho phép tạo khóa học mới với các trường bắt buộc.
- ✏️ **Chỉnh sửa khóa học**: Cập nhật thông tin khóa học.
- 🗑️ **Xóa khóa học**: Xóa khóa học khỏi hệ thống.
- ⚡ **Form validation**: Kiểm tra dữ liệu đầu vào để đảm bảo tính toàn vẹn.

## Cấu trúc thư mục chính
    📂 app/
     ├── 📂 Http/
     │    ├── 📂 Controllers/  
     │    │    ├── AuthController.php
     │    │    ├── CourseController.php
     │    ├── 📂 Middleware/       
     ├── 📂 Models/
     │    ├── User.php
     │    ├── Course.php
    📂 routes/
     ├── web.php       
     ├── api.php       
    📂 resources/
     ├── 📂 views/     
     │    ├── 📂 auth/    # Form đăng ký & đăng nhập
     │    ├── 📂 courses/ # Các trang quản lý khóa học

## Giao diện (UI)
### Giao diên UI
https://private-user-images.githubusercontent.com/124223082/417212565-b4670152-d857-4c49-9892-7bb98af6c23b.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3NDA1ODU1NjgsIm5iZiI6MTc0MDU4NTI2OCwicGF0aCI6Ii8xMjQyMjMwODIvNDE3MjEyNTY1LWI0NjcwMTUyLWQ4NTctNGM0OS05ODkyLTdiYjk4YWY2YzIzYi5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjUwMjI2JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI1MDIyNlQxNTU0MjhaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT1hMTM0MTA2ZmQ1ODcxOTNhZGRjMGViNzdjMmUzNjViMzY5MTNmNGYyMGQ0ODEwZTExZWE3M2JkZThkNTI4NTc4JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCJ9.LSjl1jdgx6L3Uz1Ghsj8XJot_YfuDAW4k-eVbo3dMfE

### Giao diện đăng ký
<img src="https://github.com/user-attachments/assets/28ab762c-d5f8-40c8-9ce7-8ca51d1077fc" width="550" height="600" />

### Giao diện đăng nhập
<img src="https://github.com/user-attachments/assets/480fcc32-e5c8-4dd8-813d-1080e6976045" width="550" height="600" />

### Giao diện chính
<img src="https://github.com/user-attachments/assets/56d9f7f8-b007-4622-9b77-76bb8816147c" width="1200" height="400" />

### Giao diện thông tin chi tiết
<img src="https://github.com/user-attachments/assets/dd62748f-804f-4195-8802-d6c3458b2491" width="1400" height="500" />

## Giao diện chỉnh sửa
<img src="https://github.com/user-attachments/assets/03b761eb-5872-4aee-80fe-d8bdb05e8017" width="550" height="600" />

## API Routes
| Phương thức | Endpoint               | Mô tả                        |
|------------|------------------------|------------------------------|
| GET        | `/register`            | Hiển thị form đăng ký        |
| POST       | `/register`            | Xử lý đăng ký người dùng     |
| GET        | `/login`               | Hiển thị form đăng nhập      |
| POST       | `/login`               | Xử lý đăng nhập              |
| POST       | `/logout`              | Đăng xuất                    |
| GET        | `/courses`             | Danh sách khóa học           |
| GET        | `/courses/create`      | Form tạo khóa học            |
| POST       | `/courses`             | Tạo khóa học mới             |
| GET        | `/courses/{id}/edit`   | Form chỉnh sửa khóa học      |
| PUT        | `/courses/{id}`        | Cập nhật khóa học            |
| DELETE     | `/courses/{id}`        | Xóa khóa học                 |
