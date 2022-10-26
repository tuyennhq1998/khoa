<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../admin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../admin/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Admin</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="../../img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Thay tên</h6>
                        <span></span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Trang chủ</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Banner</a>
                            <a href="typography.html" class="dropdown-item">Tại sao</a>
                        </div>
                    </div>
                    <a href="{{url('admin/products')}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Sản phẩm</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6" style="width:80%">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Chỉnh sửa sản phẩm</h6>
                            <form action="{{url('post-edit-products')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  name="name"
                                    placeholder="Chung cư cao cấp Phú Lạc" value="{{$product->name}}">
                                <label for="floatingInput">Tên sản phẩm</label>
                            </div>
                            <input type="hidden" name="id" value="{{$product->id}}">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault"  name="showHome">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Hiển thị trên trang chủ</label>
                            </div>
                            <br>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  name="tenduan"
                                    placeholder="Vinhome" value="{{$product->tenduan}}">
                                <label for="floatingInput">Tên dự án</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="loaiduan">
                                    <option selected="">Loại sản phẩm</option>
                                    <option value="nhapho">Nhà phố</option>
                                    <option value="canho">Căn hộ</option>
                                    <option value="datnen">Đất nền</option>
                                    <option value="datnen">Căn hộ cho thuê</option>
                                    <option value="datnen">Nhà phố cho thuê</option>
                                </select>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control"  name="dientichdat"  value="{{$product->dientichdat}}"
                                    placeholder="100m2">
                                <label for="floatingInput">Diện tích đất</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  name="dichtichsudung"  value="{{$product->dientichsudung}}"
                                    placeholder="90m2">
                                <label for="floatingInput">Diện tích sử dụng</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control"  name="numberroom"  value="{{$product->numberroom}}"
                                    placeholder="2">
                                <label for="floatingInput">Số phòng ngủ</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control"  name="nhawc"  value="{{$product->nhawc}}"
                                    placeholder="3">
                                <label for="floatingInput">Số nhà vệ sinh</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control"  name="year"  value="{{$product->year}}"
                                    placeholder="2019">
                                <label for="floatingInput">Năm xây dựng</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  name="price"  value="{{$product->price}}"
                                    placeholder="12.000.000.000">
                                <label for="floatingInput">Giá bán</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  name="sale_price" value="{{$product->sale_price}}"
                                    placeholder="10.000.000.000">
                                <label for="floatingInput">Giá khuyến mãi</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  name="tinh"  value="{{$product->tinh}}"
                                    placeholder="TPHCM">
                                <label for="floatingInput">Tỉnh (Thành Phố)</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  name="quan" value="{{$product->quan}}"
                                    placeholder="Thủ Đức">
                                <label for="floatingInput">Huyện (Quận)</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  name="phuong" value="{{$product->phuong}}"
                                    placeholder="Hiệp Bình Chánh">
                                <label for="floatingInput">Phường (Xã)</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  name="duong" value="{{$product->duong}}"
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
                                <textarea class="form-control" placeholder="Thông tin thêm" name="description"  value="{{$product->description}}"
                                    style="height: 150px;"></textarea>
                                <label for="floatingTextarea">Thông tin thêm</label>
                            </div>
                            <button class="btn btn-success rounded-pill m-2">Save</button>
                        </div>
                        </form>
                    </div>
                
                </div>
            </div>
            </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../admin/lib/chart/chart.min.js"></script>
    <script src="../../admin/lib/easing/easing.min.js"></script>
    <script src="../../admin/lib/waypoints/waypoints.min.js"></script>
    <script src="../../admin/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../../admin/lib/tempusdominus/js/moment.min.js"></script>
    <script src="../../admin/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../../admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../../admin/js/main.js"></script>
</body>

</html>