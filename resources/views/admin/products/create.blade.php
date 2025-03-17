@extends('layouts.admin')
@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">إضافة منتج جديد</h1>

    <form action="{{ url('admin/products/store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>إسم المنتج</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
            @error('name')
            <small class="invaled-feedback">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label> الكمية </label>
            <input type="number" name="quantity" class="form-control @error('quantity') is-invalid @enderror">
            @error('quantity')
            <small class="invaled-feedback">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label>السعر</label>
            <input type="number" name="price" class="form-control @error('price') is-invalid @enderror">
            @error('price')
            <small class="invaled-feedback">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label>وصف المنتج</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="4"></textarea>

            @error('description')
            <small class="invaled-feedback">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label>الصنف</label>
            <select name="category_id" class="form-select @error('category') is-invalid
                    
                @enderror">
                <option value="#"></option>

                @foreach ($categories as $category )
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category')
            <small class="text-danger">{{ $message }}</small>

            @enderror
        </div>
        <button class="btn btn-success px-4"><i class="fa fa-save"></i> حفظ</button>
    </form>

</div>
@endsection