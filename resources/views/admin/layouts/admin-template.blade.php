<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:type" content="website">
    <meta property="og:description" content="">

    <meta property="og:url" content="{{request()->url()}}">
    @if(auth()->check())
        <meta property="og:image" content="https://t3-book.herokuapp.com/uploads/b.jpeg">
        <meta itemprop="image" content="https://t3-book.herokuapp.com/uploads/b.jpeg">
    @else
        <meta property="og:image" content="https://t3-book.herokuapp.com/uploads/a.jpg">
        <meta itemprop="image" content="https://t3-book.herokuapp.com/uploads/a.jpg">
    @endif
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/admin.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('admin/js/bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/convert-side-bar-mobie.js') }}"></script>

</head>
<body>

    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')
    <div class="contain-main" id="contain-main">
        <div class="contain">
            <div class="contain-header">
                <div class="title">
                    <h5 class="t-1">@yield('name')</h5>
                </div>
                <div class="map">
                    <span class="m-1">Dashboard /</span><span class="m-1">E-commerce /</span><span class="m-1">Product</span>
                </div>
            </div>
            <div class="page-contain col-sm-12">
                @yield('content')
            </div>

        </div>
    </div>

</body>
</html>
