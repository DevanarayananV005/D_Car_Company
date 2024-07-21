
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>D CAR COMPANY</title>

    <!-- Icons font CSS-->
    <link href="{{asset('carupdasset/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('carupdasset/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('carupdasset/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('carupdasset/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">
    

    <!-- Main CSS-->
    <link href="{{asset('carupdasset/css/main.css')}}" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Update CAR</h2>  
                    </div>
                    <form method='post'  action="{{route('update',['cars'=>$cars])}}">
                        @csrf
                        @method('put')
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Brand</label>
                                    {{-- value="{{$cars->brand}} --}}
                                    <input class="input--style-4" type="text" name="brand" ">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Name</label>
                                    <input class="input--style-4" type="text" name="name" value="{{$cars->name}}">
                                </div>
                            </div>
                        </div>
                                <div class="input-group">
                                    <label class="label">Model</label>
                                        <input class="input--style-4" type="text" name="model" value="{{$cars->model}}">
                                </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Mileage</label>
                                    <input class="input--style-4" type="number" name="mileage" value="{{$cars->mileage}}">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Price</label>
                                    <input class="input--style-4" type="number" name="price" value="{{$cars->price}}">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Subject</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="type">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option value="Hatchback">Hatchback</option>
                                    <option value="Sedan">Sedan</option>
                                    <option value="SUV">SUV</option>
                                    <option value="HyperCar">HyperCar</option>
                                    <option value="Coupe">Coupe</option>
                                    <option value="SUV 4x4">SUV 4x4</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
            </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{asset('carupdasset/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{asset('carupdasset/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('carupdasset/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('carupdasset/vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('carupdasset/js/global.js')}}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
