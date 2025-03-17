@extends('layouts.admin')
@section('content')
<div class="container my-5">

    <a href="{{ url('admin/products/create') }}" class=" btn btn-primary mb-2"><i class="fas fa-laptop"></i>اضافة منتج جديد</a>
    <h1 class="text-center mb-4">جميع المنتجات</h1>


    <table class="table table-bordered table-hover table-striped">
        <tr class="table-dark">
            <th>#</th>
            <th>اسم المنتج</th>
            <th>الوصف</th>
            <th>السعر</th>
            <th>الكمية</th>
            <th>الأحداث</th>

        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>

            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <th>${{ $product->price }}</th>
            <td>{{ $product->quantity }}</td>

            <td>
                <a href="{{ url('admin/products/edit/'.$product->id) }}" class="btn btn-success">تعديل</a>
                <a href="{{ url('admin/products/delete/'.$product->id) }}" class="btn btn-danger">حذف</a>
            </td>
        </tr>
        @endforeach


    </table>

</div>
@endsection