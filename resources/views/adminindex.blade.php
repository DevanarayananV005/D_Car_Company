<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="adminasset/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="adminasset/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="adminasset/assets/libs/css/style.css">
    <link rel="stylesheet" href="adminasset/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="adminasset/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="adminasset/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="adminasset/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="adminasset/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="adminasset/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
</head>

<body>

    <div class="dashboard-main-wrapper">
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">D CAR COMPANY</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                </div>
            </nav>
        </div>
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse">Dashboard</a>
                                <form action="/adminlogout" method="POST">
                                <button class="btn btn-danger">LogOut</button></form>
                            </li>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content " style="width: 1781px;position: fixed;">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">D CAR COMPANY</h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">D CAR COMPANY</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                            <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Available Cars</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table" >
                                            <table class="table" style="width:1300px;">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0" style="width:0px;">Id</th>
                                                        <th class="border-0">Image</th>
                                                        <th class="border-0">Car Type</th>
                                                        <th class="border-0">Brand</th>
                                                        <th class="border-0">Name</th>
                                                        <th class="border-0">Mileage</th>
                                                        <th class="border-0">Price</th>
                                                        <th class="border-0" align="center">Edit</th>
                                                        <th class="border-0" align="center">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($car as $cars)
                                                    <tr>
                                                        <td style="width:0px;">{{$cars->id }}</td>
                                                        <td>
                                                            <div class="m-r-10"><img src="{{ asset('storage/' . $cars->file) }}" alt="user" class="rounded" width="45"></div>
                                                        </td>
                                                        <td>{{$cars->type }}</td>
                                                        <td>{{$cars->brand }}</td>
                                                        <td>{{$cars->name }}</td>
                                                        <td>{{$cars->mileage }}</td>
                                                        <td>{{$cars->price }}</td>
                                                        <td style="width: 0px;"><a href="{{ route('edit',['cars'=>$cars]) }}" >Update Car</a></td>
                                                        <td style="width: 0px;"><form method="post" action="{{route('destroy',['cars'=>$cars])}}">
                                                            @csrf
                                                            @method('delete')
                                                        <input type="submit" value="Delete" class="btn btn-outline-light float-right"/>
                                                        </form></td>
                                                    </tr>
                                                   @endforeach
                                                    <tr>
                                                        <td><a colspan="4" href="/addcar" class="btn btn-outline-light float-right">Add Car</a></td>
                                            

                                                    </tr>
                                                </tbody>
                                </div>
                            </div>
                </div></div></div>

    <script src="adminasset/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="adminasset/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="adminasset/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="adminasset/assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="adminasset/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="adminasset/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="adminasset/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="adminasset/assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="adminasset/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="adminasset/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="adminasset/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="adminasset/assets/libs/js/dashboard-ecommerce.js"></script>
</body>
</html>
