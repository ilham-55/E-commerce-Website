<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.layouts.partials.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.layouts.partials.sidebar')

      <!-- partial -->
      @include('admin.layouts.partials.header')

        <!-- partial -->

      {{-- @include('admin.body') --}}

      @yield('content')
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.layouts.partials.script')

    <!-- End custom js for this page -->
  </body>
</html>
