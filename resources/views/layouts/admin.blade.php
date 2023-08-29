@extends('layouts.base')

@section('body')
    <div class="flex flex-row">
        <!-- Sidebar -->
        @include('components.admin-sidebar')
        @yield('content')
        
        @isset($slot)
            {{ $slot }}
        @endisset
    </div>
@endsection