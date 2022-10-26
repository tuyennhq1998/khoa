@extends('master')
@section('content')
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6" style="width:80%">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Thêm mới sản phẩm</h6>
                            <form action="{{url('post-add-products')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  name="name"
                                    placeholder="Chung cư cao cấp Phú Lạc">
                                <label for="floatingInput">Tên sản phẩm</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault"  name="showHome">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Hiển thị trên trang chủ</label>
                            </div>
                            <br>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  name="tenduan"
                                    placeholder="Vinhome">
                                <label for="floatingInput">Tên dự án</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="loaiduan">
                                    <option selected="">Loai du an</option>
                                    <option value="nhapho">Nha pho</option>
                                    <option value="canho">Can ho</option>
                                    <option value="datnen">Dat nen</option>
                                </select>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control"  name="dientichdat"
                                    placeholder="100m2">
                                <label for="floatingInput">Diện tích đất</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  name="dichtichsudung"
                                    placeholder="90m2">
                                <label for="floatingInput">Diện tích sử dụng</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control"  name="numberroom"
                                    placeholder="2">
                                <label for="floatingInput">Số phòng ngủ</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control"  name="nhawc"
                                    placeholder="3">
                                <label for="floatingInput">Số nhà vệ sinh</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control"  name="year"
                                    placeholder="2019">
                                <label for="floatingInput">Năm xây dựng</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  name="price"
                                    placeholder="12.000.000.000">
                                <label for="floatingInput">Giá bán</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  name="sale_price"
                                    placeholder="10.000.000.000">
                                <label for="floatingInput">Giá khuyến mãi</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  name="tinh"
                                    placeholder="TPHCM">
                                <label for="floatingInput">Tỉnh (Thành Phố)</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  name="quan"
                                    placeholder="Thủ Đức">
                                <label for="floatingInput">Huyện (Quận)</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  name="phuong"
                                    placeholder="Hiệp Bình Chánh">
                                <label for="floatingInput">Phường (Xã)</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  name="duong"
                                    placeholder="23 Lê Lai">
                                <label for="floatingInput">Số nhà + Đường</label>
                            </div>
                            <div class="form-floating mb-3" style="width:30%">

                                <input type="file" class="form-control"  name="imagethumb"  accept="image/*" 
                                    placeholder="Hình thumbnail">
                                <label for="floatingInput">Chọn hình thumbnail</label>
                            </div>
                            <div class="form-floating mb-3" style="width:30%">
                                <input type="file" class="form-control"  name="image1"
                                    placeholder="Hình thumbnail">
                                <label for="floatingInput">Chọn hình ảnh 1</label>
                            </div>
                            <div class="form-floating mb-3" style="width:30%">
                                <input type="file" class="form-control"  name="image2"
                                    placeholder="Hình thumbnail">
                                <label for="floatingInput">Chọn hình ảnh 2</label>
                            </div>
                            <div class="form-floating mb-3" style="width:30%">
                                <input type="file" class="form-control"  name="image3"
                                    placeholder="Hình thumbnail">
                                <label for="floatingInput">Chọn hình ảnh 3</label>
                            </div>
                            <div class="form-floating mb-3" style="width:30%">
                                <input type="file" class="form-control"  name="image4"
                                    placeholder="Hình thumbnail">
                                <label for="floatingInput">Chọn hình ảnh 4</label>
                            </div>
                            <div class="form-floating mb-3" style="width:30%">
                                <input type="file" class="form-control"  name="image5"
                                    placeholder="Hình thumbnail">
                                <label for="floatingInput">Chọn hình ảnh 5</label>
                            </div>
                            <div class="form-floating mb-3" style="width:30%">
                                <input type="file" class="form-control"  name="image6"
                                    placeholder="Hình thumbnail">
                                <label for="floatingInput">Chọn hình ảnh 6</label>
                            </div>
                            <div class="form-floating mb-3" style="width:30%">
                                <input type="file" class="form-control"  name="image7"
                                    placeholder="Hình thumbnail">
                                <label for="floatingInput">Chọn hình ảnh 7</label>
                            </div>
                            <div class="form-floating mb-3" style="width:30%">
                                <input type="file" class="form-control"  name="image8"
                                    placeholder="Hình thumbnail">
                                <label for="floatingInput">Chọn hình ảnh 8</label>
                            </div>
                            <div class="form-floating mb-3" style="width:30%">
                                <input type="file" class="form-control" name="image9"
                                    placeholder="Hình thumbnail">
                                <label for="floatingInput">Chọn hình ảnh 9</label>
                            </div>
                            <div class="form-floating mb-3" style="width:30%">
                                <input type="file" class="form-control" name="image10"
                                    placeholder="Hình thumbnail">
                                <label for="floatingInput">Chọn hình ảnh 10</label>
                            </div>
                            
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Thông tin thêm" name="description"
                                    style="height: 150px;"></textarea>
                                <label for="floatingTextarea">Thông tin thêm</label>
                            </div>
                            <button class="btn btn-success rounded-pill m-2">Save</button>
                        </div>
                        </form>
                    </div>
                
                </div>
            </div>
@endsection