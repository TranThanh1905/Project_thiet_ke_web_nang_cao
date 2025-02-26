@extends('layouts.app')
@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h1 class="mb-0 fs-4">Chi tiết khóa học</h1>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-6">
                    <h4 class="text-primary mb-3">{{ $course->title }}</h4>
                    <p class="text-muted"><i class="bi bi-person-circle me-2"></i>Giảng viên: <strong>{{ $course->instructor }}</strong></p>
                    <p class="text-muted"><i class="bi bi-mortarboard-fill me-2"></i>Trưởng khóa học: <strong>{{ $course->courseHead }}</strong></p>
                </div>
                <div class="col-md-6">
                    <div class="card bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span>ID Khóa học:</span>
                                <span class="badge bg-secondary">{{ $course->id }}</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Ngày tạo:</span>
                                <span>{{ $course->created_at->format('d/m/Y H:i') }}</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span>Cập nhật lần cuối:</span>
                                <span>{{ $course->updated_at->format('d/m/Y H:i') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <h5 class="border-bottom pb-2 mb-3">Thông tin chi tiết</h5>
                    <table class="table table-hover">
                        <tr>
                            <th style="width: 30%" class="bg-light">ID</th>
                            <td>{{ $course->id }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Tiêu đề</th>
                            <td>{{ $course->title }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Giảng viên</th>
                            <td>{{ $course->instructor }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Trưởng khóa học</th>
                            <td>{{ $course->courseHead }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Ngày tạo</th>
                            <td>{{ $course->created_at->format('d/m/Y H:i:s') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Cập nhật lần cuối</th>
                            <td>{{ $course->updated_at->format('d/m/Y H:i:s') }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-footer bg-white border-top pt-3 pb-3">
            <div class="d-flex justify-content-between">
                <a href="{{ route('course.index') }}" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left me-1"></i>Quay lại danh sách
                </a>
                <div>
                    <a href="{{ route('course.edit', $course->id) }}" class="btn btn-warning me-2">
                        <i class="bi bi-pencil me-1"></i>Chỉnh sửa
                    </a>
                    <form action="{{ route('course.destroy', $course->id)}}" method="post" class="d-inline" onsubmit="return confirm('Bạn có chắc chắn muốn xóa khóa học này?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="bi bi-trash me-1"></i>Xóa
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection