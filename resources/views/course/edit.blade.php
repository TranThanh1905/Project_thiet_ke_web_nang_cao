@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header bg-warning">
                <h2 class="mb-0 fs-4"><i class="fas fa-edit me-2"></i>Chỉnh sửa khóa học</h2>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('course.update', $course->id) }}" method="post" novalidate>
                    @csrf 
                    @method('PUT')
                    
                    <div class="mb-4">
                        <label for="title" class="form-label fw-bold">Course Title <span class="text-danger">*</span></label>
                        <input type="text" name="title" id="title" class="form-control form-control-lg @error('title') is-invalid @enderror" value="{{ old('title', $course->title) }}" placeholder="Nhập tên khóa học" required autofocus>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text text-muted">Sửa lại tiêu đề khóa học.</div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="instructor" class="form-label fw-bold">Course Instructor <span class="text-danger">*</span></label>
                        <input type="text" name="instructor" id="instructor" class="form-control form-control-lg @error('instructor') is-invalid @enderror" value="{{ old('instructor', $course->instructor) }}" placeholder="Nhập tên giảng viên" required>
                        @error('instructor')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text text-muted">Sửa lại tên giảng viên.</div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="courseHead" class="form-label fw-bold">Course Head <span class="text-danger">*</span></label>
                        <input type="text" name="courseHead" id="courseHead" class="form-control form-control-lg @error('courseHead') is-invalid @enderror" value="{{ old('courseHead', $course->courseHead) }}" placeholder="Nhập thông tin trưởng khóa học" required>
                        @error('courseHead')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text text-muted">Sửa lại tên trưởng khóa học.</div>
                    </div>
                    
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5">
                        <a href="{{ route('course.index') }}" class="btn btn-outline-secondary btn-lg me-md-2">
                            <i class="fas fa-arrow-left me-1"></i> Cancel
                        </a>
                        <button type="submit" class="btn btn-warning btn-lg">
                            <i class="fas fa-save me-1"></i> Update Course
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Course metadata section -->
        <div class="card mt-4 shadow-sm bg-light">
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-info-circle me-2 text-primary"></i>Thông tin chi tiết khóa học</h5>
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-1"><strong>Course ID:</strong> <span class="text-muted">{{ $course->id }}</span></p>
                        <p class="mb-1"><strong>Created:</strong> <span class="text-muted">{{ $course->created_at->format('F j, Y, g:i a') }}</span></p>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-1"><strong>Last Updated:</strong> <span class="text-muted">{{ $course->updated_at->format('F j, Y, g:i a') }}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Danger zone -->
<div class="row justify-content-center mt-4">
    <div class="col-md-8">
        <div class="card border-danger shadow-sm">
            <div class="card-header bg-danger text-white">
                <h5 class="mb-0"><i class="fas fa-exclamation-triangle me-2"></i>Xóa khóa học</h5>
            </div>
            <div class="card-body">
                <p>Xóa toàn bộ dữ liệu của khóa học này.</p>
                <form action="{{ route('course.destroy', $course->id)}}" method="post" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this course? This action cannot be undone.');">
                    @csrf 
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">
                        <i class="fas fa-trash-alt me-1"></i> Delete Course
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .form-control:focus {
        border-color: #ffc107;
        box-shadow: 0 0 0 0.25rem rgba(255, 193, 7, 0.25);
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
    
    .border-danger {
        border: 1px solid #dc3545 !important;
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