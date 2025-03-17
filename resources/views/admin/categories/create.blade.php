@extends('layouts.admin')
@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">إضافة منتج جديد</h1>

    <form action="{{ url('admin/categories/store') }}" method="POST" >
        @csrf
        <div class="mb-3">
            <label>إسم الصنف</label>
            <input type="text" name="name"  }}" class="form-control @error('name') is-invalid @enderror">
            @error('name')
            <small class="invaled-feedback">{{ $message }}</small>
            @enderror
        </div>
       
        <button class="btn btn-success px-4"><i class="fa fa-save"></i> حفظ </button>
    </form>

</div>
@endsection