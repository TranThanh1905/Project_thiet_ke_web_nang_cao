@extends('layouts.app')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
<div class="container-fluid py-5" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                    <div class="card-header bg-primary text-white text-center py-3">
                        <h4 class="mb-0 fw-bold">Đăng Nhập</h4>
                    </div>
                    <div class="card-body p-4 p-lg-5">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="email" class="form-label fw-bold text-secondary">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="fas fa-envelope text-primary"></i>
                                    </span>
                                    <input type="email" class="form-control border-start-0" name="email" id="email" placeholder="Nhập địa chỉ email của bạn" required>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <label for="password" class="form-label fw-bold text-secondary">Mật khẩu</label>
                                    <a href="#" class="text-primary text-decoration-none small">Quên mật khẩu?</a>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="fas fa-lock text-primary"></i>
                                    </span>
                                    <input type="password" class="form-control border-start-0" name="password" id="password" placeholder="Nhập mật khẩu của bạn" required>
                                </div>
                            </div>
                            <div class="mb-4 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label small" for="remember">Ghi nhớ đăng nhập</label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 py-3 mb-3 rounded-pill fw-bold">
                                <i class="fas fa-sign-in-alt me-2"></i>Đăng nhập
                            </button>
                        </form>
                        
                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <span class="divider-text">hoặc đăng nhập với</span>
                            </div>
                            <div class="d-flex justify-content-center gap-3 mb-4">
                                <a href="#" class="btn btn-outline-secondary rounded-circle ">
                                    <i class="fab fa-google"></i>
                                </a>
                                <a href="#" class="btn btn-outline-secondary rounded-circle ">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="btn btn-outline-secondary rounded-circle ">
                                    <i class="fab fa-microsoft"></i>
                                </a>
                            </div>
                            <p class="mb-0">Chưa có tài khoản? <a href="{{ route('register') }}" class="text-primary fw-bold text-decoration-none">Đăng ký ngay</a></p>
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
        width: 45px;
        height: 45px;
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
    
    .input-group:focus-within {
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        border-radius: 0.375rem;
    }
</style>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
@endsection