<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{env('APP_NAME')}}</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('logo.png')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/styles.min.css')}}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="{{route('home')}}" class="text-nowrap logo-img text-center d-block py-3 w-100">   
                  <img src="{{asset('logo.png')}}" width="100" alt="">
                </a>
                <p class="text-center h4"><strong>{{env('APP_NAME')}}</strong></p>
                <form action="{{route('reg')}}" method="post">
                  @csrf
                  <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="name">
                    @error('name')<div class='small text-danger text-left'>{{$message}}</div>@enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email">
                    @error('email')<div class='small text-danger text-left'>{{$message}}</div>@enderror
                  </div>
                  <div class="mb-4">
                    <label  class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                    @error('password')<div class='small text-danger text-left'>{{$message}}</div>@enderror
                  </div>       
                  <div class="d-flex justify-content-between align-items-center ">
                    <button class="btn btn-primary rounded-2">Sign Up</button>
                    <a class="text-primary fw-bold ms-2" href="{{route('login')}}">Login</a>
                  </div>                
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>