@extends('layouts.admin')
@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">تعديل المنتج</h1>

    <form action="{{ url('admin/products/update/'.$product->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label>إسم المنتج</label>
            <input type="text" name="name" value="{{ $product->name }}" class="form-control @error('name') is-invalid @enderror">
            @error('name')
            <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label> الكمية </label>
            <input type="number" name="quantity" value="{{ $product->quantity }}" class="form-control @error('quantity') is-invalid @enderror">
            @error('quantity')
            <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label>السعر</label>
            <input type="number" name="price" value="{{ $product->price }}" class="form-control @error('price') is-invalid @enderror">
            @error('price')
            <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label>وصف المنتج</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="4">{{ $product->description }}</textarea>

            @error('description')
            <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label>الصنف</label>
            <select name="category_id" class="form-select @error('category') is-invalid @enderror">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
                @endforeach
            </select>

            @error('category')
            <small class="text-danger">{{ $message }}</small>

            @enderror
        </div>
        <input type="submit" value="حفظ" class="btn btn-success">
    </form>

</div>
@endsection