<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.admin.head.head')
</head>
<body>
    @include('layout.admin.body.navbar')

    {{-- Sidebar dinamis berdasarkan role --}}
    @php
        $role = Auth::user()->role ?? 'guest';
    @endphp

    @if ($role === 'adminsuper')
        @include('layout.admin.body.sidebar')
    @elseif ($role === 'csbl')
        @include('layout.admin.body.sidebar-cs')
    @elseif ($role === 'helpdeskbl')
        @include('layout.admin.body.sidebar-helpdesk')
    @elseif ($role === 'tellerbl')
        @include('layout.admin.body.sidebar-teller')
    @endif

    @yield('content')
</body>
</html>
