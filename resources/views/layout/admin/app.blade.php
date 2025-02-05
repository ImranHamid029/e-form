<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.admin.head.head')
</head>
<body>
    @include('layout.admin.body.navbar')

    @php
    $role = Auth::user()->role ?? 'guest';

    // Menyimpan role pengguna dalam session
    session(['user_role' => $role]);
@endphp

@if (session('user_role') === 'adminsuper')
    @include('layout.admin.body.sidebar')
@elseif (session('user_role') === 'csbl')
    @include('layout.admin.body.sidebar-cs')
@elseif (session('user_role') === 'helpdeskbl')
    @include('layout.admin.body.sidebar-helpdesk')
@elseif (session('user_role') === 'tellerbl')
    @include('layout.admin.body.sidebar-teller')
@endif


    @yield('content')
</body>
</html>
