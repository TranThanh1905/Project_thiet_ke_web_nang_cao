@extends('layouts.app')

@section('content')
<div class="container-fluid py-5" >
    <div class="container">
        <div class="row align-items-center justify-content-center min-vh-75">
            <div class="col-lg-8">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                    <div class="row g-0">
                        <div class="col-md-5 d-none d-md-block" style="background-color: #003366;">
                            <div class="d-flex flex-column justify-content-center align-items-center h-100 p-4 text-white">
                                <img src="https://cdn.haitrieu.com/wp-content/uploads/2021/11/Logo-DH-Phenikaa-V-Bl.png" alt="Phenikaa Logo" class="img-fluid mb-4" style="max-width: 180px;">
                                <h4 class="text-center fw-light">Nâng cao kiến thức</h4>
                                <h4 class="text-center fw-light">Phát triển kỹ năng</h4>
                                <h4 class="text-center fw-light">Mở rộng tương lai</h4>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="card-body p-5">
                                <div class="text-center mb-5">
                                    <img src="https://cdn.haitrieu.com/wp-content/uploads/2021/11/Logo-DH-Phenikaa-V-Bl.png" alt="Phenikaa Logo" class="img-fluid d-md-none mb-4" style="max-width: 150px;">
                                    <h1 class="display-5 fw-bold text-primary">Hệ thống Quản lý Khóa học</h1>
                                    <p class="lead text-secondary">Khám phá các khóa học chất lượng từ đội ngũ giảng viên hàng đầu của Đại học Phenikaa</p>
                                </div>
                                
                                <div class="d-grid gap-3">
                                    <a href="{{ route('register') }}" class="btn btn-primary btn-lg rounded-pill shadow-sm">
                                        <i class="fas fa-user-plus me-2"></i>Đăng ký ngay
                                    </a>
                                    <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-lg rounded-pill">
                                        <i class="fas fa-sign-in-alt me-2"></i>Đăng nhập
                                    </a>
                                </div>
                                
                                <div class="mt-4 pt-3 text-center">
                                    <p class="text-muted small">Bạn cần hỗ trợ? <a href="#" class="text-decoration-none">Liên hệ với chúng tôi</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .rounded-4 {
        border-radius: 0.75rem;
    }
    
    .min-vh-75 {
        min-height: 75vh;
    }
    
    /* Animation khi hover vào nút */
    .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.3s;
    }
    
    .btn-outline-secondary:hover {
        transform: translateY(-3px);
        transition: all 0.3s;
    }
</style>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
@endsection