
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('backend.includes.style')
</head>

<body class="g-sidenav-show  bg-gray-200">
 @include('backend.includes.sidebar')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
  @include('backend.includes.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
     @yield('konten')
      
     @include('backend.includes.footer')
    </div>
  </main>
 
  <!--   Core JS Files   -->
    @include('backend.includes.script')
</body>

</html>