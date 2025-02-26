<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .table-responsive {
            margin-top: 20px;
        }
        .alert {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        @auth
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('course.index') }}">Course Management</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('course.index') }}">All Courses</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('course.create') }}">Add New Course</a>
                            </li>
                        </ul>
                        <!-- Nút Logout nằm bên phải -->
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-link nav-link" style="display: inline; padding: 0;">
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        @endauth

        <!-- Nếu chưa đăng nhập, có thể để trống hoặc hiển thị thông báo -->
        @guest
            <div class="alert alert-info">
                Vui lòng đăng nhập để xem nội dung.
            </div>
        @endguest

        <!-- Flash Messages -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <!-- Nội dung chính sẽ hiển thị khi đã đăng nhập -->
        <div>
            @yield('content')
        </div>
    </div>
    
<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Chờ 3 giây (3000ms) rồi ẩn các thông báo
        setTimeout(function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                // Thêm hiệu ứng mờ dần trước khi ẩn
                alert.style.transition = "opacity 0.5s ease";
                alert.style.opacity = "0";

                // Sau 0.5s, xóa thẻ khỏi DOM (tùy chọn)
                setTimeout(() => alert.remove(), 500);
            });
        }, 3000);
    });
</script>
</body>
</html>
