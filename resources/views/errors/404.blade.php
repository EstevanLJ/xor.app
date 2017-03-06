<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Scripts -->
  <script>
      window.Laravel = {!! json_encode([
          'csrfToken' => csrf_token(),
      ]) !!};
  </script>
  
  <link rel="stylesheet" href="{{asset('/css/app.css')}}">
  <link rel="stylesheet" href="{{asset('/css/AdminLTE.min.css')}}">


</head>
<body class="hold-transition login-page">

  <section class="content">
      <div class="error-page">
      
        <h2 class="headline text-yellow"> 404</h2>

        <div class="error-content">
          <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>

          <p class="help-text">
            We could not find the page you were looking for.
            Meanwhile, you may <a href="../../index.html">return to dashboard</a> or try using the search form.
          </p>
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>

<!-- Dependencies -->
<script src="{{asset('/js/app.js')}}"></script>
{{-- <script src="{{asset('/js/plugins/icheck/icheck.js')}}"></script> --}}

</body>
</html>
   

