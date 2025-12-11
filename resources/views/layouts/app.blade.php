<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
  <title>Ryan Mark Portfolio</title>
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/rylogo.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/rylogo.png') }}">
  <link rel="shortcut icon" href="{{ asset('assets/rylogo.png') }}">
  <link rel="stylesheet" href="{{ asset('style.css') }}">
  <link rel="stylesheet" href="{{ asset('responsive.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:700,400&display=swap" rel="stylesheet">
</head>
<body>
  @include('components.header')
  @yield('content')
</body>
</html>
