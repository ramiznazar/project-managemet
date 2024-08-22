<!DOCTYPE html>
<html lang="en">
    @include('dashboard.layouts.head')
<body>
    @include('dashboard.layouts.sidebar')
    @include('dashboard.layouts.header')


    <div class="main">
        @yield('content')
    </div>

    @include('dashboard.layouts.footer')
    @include('dashboard.layouts.script')
    {{-- @yield('additional-script')     --}}

</body>
</html>