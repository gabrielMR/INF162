<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>DASHGUM - Bootstrap Admin Template</title>
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style-responsive.css')}}" rel="stylesheet">
    </style>
  </head>
  <body>
      <div id="login-page">
        <div class="container">
              <form method="POST" class="form-login"  action="/auth/login">
                <h2 class="form-login-heading">sign in now</h2>
                <div class="login-wrap">
                    <input name="email" class="form-control" placeholder="Usuario" autofocus name="email">
                    <br>
                    <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                    <label class="checkbox">
                        
                    </label>
                    <button class="btn btn-theme btn-block"  type="submit"><i class="fa fa-lock"></i> ENTRAR</button>
                    <hr>
                </div>
              </form>       
        </div>
      </div>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.backstretch.min.js')}}"></script>
    <script>
        $.backstretch("{{asset('assets/img/login-bg.jpg')}}", {speed: 500});
    </script>
  </body>
</html>
