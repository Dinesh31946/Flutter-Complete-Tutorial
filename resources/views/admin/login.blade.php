<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{ asset('admin_theme/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('admin_theme/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('admin_theme/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('admin_theme/vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('admin_theme/build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a href="{{ route('home') }}" class="ml-5 mt-5"><i class="fa fa-3x fa-home"></i></a>
    </div>
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
              @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
            <form action="{{ route('admin.makeLogin') }}" method="post">
              <h1>Login Form</h1>
              @csrf
              <div>
                <input type="text" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required="" />
              </div>
              <div>
                <input type="submit" class="btn btn-block btn-info"name="" value="Login" style="margin-left: 1px;"/>
              </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
