@extends('layouts.app')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
<div class="container-fluid py-5" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                    <div class="card-header bg-primary text-white text-center py-3">
                        <h4 class="mb-0 fw-bold">Đăng Ký Tài Khoản</h4>
                    </div>
                    <div class="card-body p-4 p-lg-5">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold text-secondary">Họ và tên</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="fas fa-user text-primary"></i>
                                    </span>
                                    <input type="text" class="form-control border-start-0" name="name" id="name" placeholder="Nhập họ và tên của bạn" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label fw-bold text-secondary">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="fas fa-envelope text-primary"></i>
                                    </span>
                                    <input type="email" class="form-control border-start-0" name="email" id="email" placeholder="Nhập địa chỉ email của bạn" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label fw-bold text-secondary">Mật khẩu</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="fas fa-lock text-primary"></i>
                                    </span>
                                    <input type="password" class="form-control border-start-0" name="password" id="password" placeholder="Tạo mật khẩu" required>
                                </div>
                                <div class="progress mt-1" style="height: 5px;">
                                    <div class="progress-bar bg-danger" style="width: 0%"></div>
                                </div>
                                <small class="text-muted">Mật khẩu phải có ít nhất 8 ký tự</small>
                            </div>
                            <div class="mb-4">
                                <label for="password_confirmation" class="form-label fw-bold text-secondary">Xác nhận mật khẩu</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="fas fa-check-circle text-primary"></i>
                                    </span>
                                    <input type="password" class="form-control border-start-0" name="password_confirmation" id="password_confirmation" placeholder="Nhập lại mật khẩu" required>
                                </div>
                            </div>
                            <div class="mb-4 form-check">
                                <input type="checkbox" class="form-check-input" id="terms" required>
                                <label class="form-check-label small" for="terms">
                                    Tôi đồng ý với <a href="#" class="text-primary">Điều khoản dịch vụ</a> và <a href="#" class="text-primary">Chính sách bảo mật</a>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 py-3 rounded-pill fw-bold">
                                <i class="fas fa-user-plus me-2"></i>Tạo tài khoản
                            </button>
                        </form>
                        
                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <span class="divider-text">hoặc đăng ký với</span>
                            </div>
                            <div class="d-flex justify-content-center gap-3 mb-4">
                                <a href="#" class="btn btn-outline-secondary rounded-circle ">
                                    <i class="fab fa-google"></i>
                                </a>
                                <a href="#" class="btn btn-outline-secondary rounded-circle">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="btn btn-outline-secondary rounded-circle">
                                    <i class="fab fa-microsoft"></i>
                                </a>
                            </div>
                            <p class="mb-0">Đã có tài khoản? <a href="{{ route('login') }}" class="text-primary fw-bold text-decoration-none">Đăng nhập</a></p>
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
    
    .rounded-circle {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .divider-text {
        position: relative;
        display: inline-block;
        text-align: center;
        width: 100%;
        color: #6c757d;
    }
    
    .divider-text::before,
    .divider-text::after {
        content: '';
        position: absolute;
        top: 50%;
        width: 35%;
        height: 1px;
        background-color: #dee2e6;
    }
    
    .divider-text::before {
        left: 0;
    }
    
    .divider-text::after {
        right: 0;
    }
    
    /* Animation */
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s;
    }
</style>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const passwordInput = document.getElementById('password');
    const progressBar = document.querySelector('.progress-bar');
    
    passwordInput.addEventListener('input', function() {
        const length = passwordInput.value.length;
        let strength = 0;
        
        if (length >= 8) strength += 20;
        if (/[A-Z]/.test(passwordInput.value)) strength += 20;
        if (/[a-z]/.test(passwordInput.value)) strength += 20;
        if (/[0-9]/.test(passwordInput.value)) strength += 20;
        if (/[^A-Za-z0-9]/.test(passwordInput.value)) strength += 20;
        
        progressBar.style.width = strength + '%';
        
        if (strength <= 40) {
            progressBar.className = 'progress-bar bg-danger';
        } else if (strength <= 80) {
            progressBar.className = 'progress-bar bg-warning';
        } else {
            progressBar.className = 'progress-bar bg-success';
        }
    });
});
</script>
@endsection