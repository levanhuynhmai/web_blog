<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    
    @include('layout.default.layouts.head')
    
</head>

<body id="page-top">
@include('layout.default.layouts.header')

<section>@yield('content')</section>
@include('layout.default.layouts.footer')
</body>
</html>
