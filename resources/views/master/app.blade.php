<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>Technical Exam</title>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
 
  <!-- css template -->
  <link href="{{ asset('bootstrap-5.1.3-dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('bootstrap-5.1.3-dist/css/bootstrap.rtl.min.css') }}" rel="stylesheet">
  <link href="{{ asset('bootstrap-5.1.3-dist/css/bootstrap-grid.min.css') }}" rel="stylesheet">
  <link href="{{ asset('bootstrap-5.1.3-dist/css/bootstrap-utilities.rtl.min.css') }}" rel="stylesheet">

   <!-- end css template -->

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Technical Exam</a>
                <form class="d-flex">
                    <a class="nav-link" href="/">Home</a>
                </form>
                </div>
            </div>
        </nav>

        <!-- Begin Page Content -->
        <div class="container-fluid" id="app">
            @yield('content')
        </div>
        <!-- Content -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Technical Exam 2024</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- js template -->
  <script src="{{ asset('bootstrap-5.1.3-dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/app.js')}}" defer></script>
  <!-- end of js template -->

</body>

</html>
