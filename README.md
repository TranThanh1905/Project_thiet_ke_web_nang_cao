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
<img src="https://github.com/user-attachments/assets/b4670152-d857-4c49-9892-7bb98af6c23b" alt="Image" width="600" height="400" />

### Giao diện đăng ký
<img src="https://github.com/user-attachments/assets/a3fd668e-b83c-4796-b135-c5e79ab5adec" width="450" height="600" />

### Giao diện đăng nhập
<img src="https://github.com/user-attachments/assets/eb52297f-3318-4a30-9c7a-fb02862f9431" width="550" height="600" />

### Giao diện chính
<img src="https://github.com/user-attachments/assets/42c6d1a3-143d-4ddc-86bb-04696455954b" width="1000" height="300" />

### Giao diện thông tin chi tiết
<img src="https://github.com/user-attachments/assets/8a020748-0fec-4819-869a-3be48b996dce" width="1400" height="500" />

## Giao diện chỉnh sửa
<img src="https://github.com/user-attachments/assets/74429763-aa75-4c18-a575-f76c8fd160b2" width="550" height="600" />

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
