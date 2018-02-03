<!DOCTYPE html>
  <html>
    @include('partials._head')
    <body>
       <!-- Navbar -->
    @include('partials._nav')
       <!-- End Navbar -->

       <!-- Content -->
        @yield('content')
       <!-- End Content -->

       <!-- Footer -->
        @include('partials._footer')
       <!-- End Footer -->
     <!-- Scripts -->
    @include('partials._scripts')
     <!-- End Scripts -->
    </body>
  </html>