<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.admin.head.head')
</head>
<body>
    @include('layout.admin.body.navbar')
    @include('layout.admin.body.sidebar-teller')
    @yield('content')
</body>

</html>