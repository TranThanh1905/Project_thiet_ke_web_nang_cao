@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0 fs-4">Add New Course</h2>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('course.store') }}" method="post" novalidate>
                    @csrf 
                    <div class="mb-4">
                        <label for="title" class="form-label fw-bold">Course Title <span class="text-danger">*</span></label>
                        <input type="text" name="title" id="title" class="form-control form-control-lg @error('title') is-invalid @enderror" value="{{ old('title') }}" placeholder="Nhập tên khóa học" required autofocus>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text text-muted">Nhập tiêu đề mô tả của khóa học.</div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="instructor" class="form-label fw-bold">Course Instructor <span class="text-danger">*</span></label>
                        <input type="text" name="instructor" id="instructor" class="form-control form-control-lg @error('instructor') is-invalid @enderror" value="{{ old('instructor') }}" placeholder="Nhập tên giảng viên" required>
                        @error('instructor')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text text-muted">Tên giảng viên hướng dẫn kháo học.</div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="courseHead" class="form-label fw-bold">Course Head <span class="text-danger">*</span></label>
                        <input type="text" name="courseHead" id="courseHead" class="form-control form-control-lg @error('courseHead') is-invalid @enderror" value="{{ old('courseHead') }}" placeholder="Nhập thông tin đầu khóa học" required>
                        @error('courseHead')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text text-muted">Nhập mã đầu của khóa học</div>
                    </div>
                    
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5">
                        <a href="{{ route('course.index') }}" class="btn btn-outline-secondary btn-lg me-md-2">
                            <i class="fas fa-arrow-left me-1"></i> Cancel
                        </a>
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fas fa-plus-circle me-1"></i> Create Course
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Additional help section -->
<div class="row justify-content-center mt-4">
    <div class="col-md-8">
        <div class="card bg-light">
            <div class="card-body">
                <h5><i class="fas fa-info-circle text-primary me-2"></i>Lưu ý trong khi điền thông tin</h5>
                <ul class="mb-0">
                    <li>Tất cả được đánh dấu bằng <span class="text-danger">*</span> là bắt buộc</li>
                    <li>Tên khóa học phải ghi rõ ràng</li>
                    <li>Đảm bảo tất cả phải đúng chính tả</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .form-control:focus {
        border-color: #4dabf7;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }
    
    .card {
        border-radius: 10px;
        border: none;
    }
    
    .card-header {
        border-radius: 10px 10px 0 0 !important;
    }
    
    .btn-lg {
        padding: 0.7rem 1.5rem;
    }
</style>
@endsection

@section('scripts')
<script>
    // Form validation enhancement
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        
        form.addEventListener('submit', function(event) {
            let valid = true;
            const inputs = form.querySelectorAll('input[required]');
            
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    input.classList.add('is-invalid');
                    valid = false;
                } else {
                    input.classList.remove('is-invalid');
                    input.classList.add('is-valid');
                }
            });
            
            if (!valid) {
                event.preventDefault();
                alert('Please fill out all required fields.');
            }
        });
        
        // Real-time validation
        const inputs = form.querySelectorAll('input[required]');
        inputs.forEach(input => {
            input.addEventListener('input', function() {
                if (!this.value.trim()) {
                    this.classList.add('is-invalid');
                } else {
                    this.classList.remove('is-invalid');
                    this.classList.add('is-valid');
                }
            });
        });
    });
</script>
@endsection