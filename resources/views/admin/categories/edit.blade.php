@extends('layouts.admin')
@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">إضافة منتج جديد</h1>

    <form action="{{ url('admin/categories/update/'.$category->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label>اسم الصنف</label>
            <input type="text" name="name" value="{{ $category->name }}" class="form-control @error('name') is-invalid @enderror">
            @error('name')
            <small class="invaled-feedback">{{ $message }}</small>
            @enderror
        </div>

        <button class="btn btn-success px-4"><i class="fa fa-save"></i> تعديل </button>
    </form>

</div>
@endsection