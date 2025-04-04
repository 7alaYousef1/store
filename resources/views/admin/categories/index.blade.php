@extends('layouts.admin')
@section('content')
<div class="container my-5">

    <a href="{{ url('admin/categories/create') }}" class=" btn btn-primary mb-2"><i class="fas fa-laptop"></i>اضافة صنف</a>
    <h1 class="text-center mb-4">جميع الأصناف</h1>


    <table class="table table-bordered table-hover table-striped">
        <tr class="table-dark">
            <th>#</th>
            <th>اسم الصنف</th>
            <th>الأحداث</th>


        </tr>
        @foreach ($categories as $key=> $category)
        <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $category->name }}</td>


            <td>
                <a href="{{ url('admin/categories/edit/'.$category->id) }}" class="btn btn-success">تعديل</a>
                <a href="{{ url('admin/categories/delete/'.$category->id) }}" class="btn btn-danger">حذف</a>
            </td>
        </tr>
        @endforeach


    </table>

</div>
@endsection