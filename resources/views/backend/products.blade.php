@extends('master')
@section('content')
<div class="container-fluid pt-4 px-4">
<a href="{{url('admin/new-products')}}" class="btn btn-success m-2">Thêm mới</a>
<div class="row g-4">
                    <div class="col-sm-12 col-xl-6" style="width:100%; height:100%">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Danh sách dự án</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Tên dự án</th>
                                        <th scope="col">Loại dự án</th>
                                        <th scope="col">Tên dự án</th>
                                        <th scope="col">Diện tích</th>
                                        <th scope="col">Giá Bán</th>
                                        <th></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $data)
                                    <tr>
                                        <th scope="row">{{$data->id}}</th>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->loaiduan}}</td>
                                        <td>{{$data->tenduan}}</td>
                                        <td>{{$data->dientichsudung}}</td>
                                        <td>{{$data->price}}</td>
                                        <td><a href="{{url('admin/product',$data->id)}}">Edit</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection