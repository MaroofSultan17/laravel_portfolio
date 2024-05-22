@if (session()->has('email'))
    @include('backend.layouts.header')
    @yield('main-container')
    @include('backend.layouts.footer')
@else
    <script type="text/javascript">
        window.location = "{{ url('/admin') }}"; // Redirect to the login page
    </script>
@endif
