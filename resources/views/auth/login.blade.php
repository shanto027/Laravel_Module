<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://cyberdynetechnologyltd.com/assets/favicon.png">

    <title>Log in Page</title>
  
    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{('admin_panel_assets/')}}/css/vendors_css.css">
      
    <!-- Style-->  
    <link rel="stylesheet" href="{{('admin_panel_assets/')}}/css/style.css">
    <link rel="stylesheet" href="{{('admin_panel_assets/')}}/css/skin_color.css">   

</head>
    
<body class="hold-transition theme-primary bg-img" style="background-image: url({{('admin_panel_assets/images/auth-bg/bg-1.jpg')}})">
    <div class="container h-p100">
        <div class="row align-items-center justify-content-md-center h-p100">   
            
            <div class="col-12">
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="bg-white rounded30 shadow-lg">
                            <div class="content-top-agile p-20 pb-0">
                                <h2 class="text-primary">Let's Get Started</h2>
                                <p class="mb-0">Sign in to continue to WebkitX.</p>                         
                            </div>
                            <div class="p-40">
                                <form method="POST" action="{{ route('login') }}">
                                 @csrf
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                            </div>


                                              <input id="email" type="email" placeholder="Email" class="form-control pl-15 bg-transparent @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
                                            </div>
                                           
                                             <input id="password" placeholder="Password" type="password" class="form-control pl-15 bg-transparent @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                                        </div>
                                    </div>
                                      <div class="row">
                                        <div class="col-6">
                                          <div class="checkbox">
                                  

                                               <input class="form-check-input" type="checkbox" name="remember" id="basic_checkbox_1" {{ old('remember') ? 'checked' : '' }}>

                                            <label for="basic_checkbox_1">Remember Me</label>
                                          </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-6">
                                         <div class="fog-pwd text-right">
                                            <a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
                                          </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-12 text-center">
                                          <button  type="submit"  class="btn btn-danger mt-10">SIGN IN</button>
                                        </div>
                                        <!-- /.col -->
                                      </div>
                                </form> 
                                <div class="text-center">
                                    <p class="mt-15 mb-0">Don't have an account? 

                                         @if (Route::has('register'))

                                        <a href="{{ route('register') }}" class="text-warning ml-5">Sign Up</a>

                                        @endif

                                    </p>
                                </div>  
                            </div>                      
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Vendor JS -->
    <script src="{{('admin_panel_assets/')}}/js/vendors.min.js"></script>
    <script src="{{('admin_panel_assets/')}}/js/pages/chat-popup.js"></script>
    <script src="{{('admin_panel_assets/')}}/assets/icons/feather-icons/feather.min.js"></script>    

</body>
</html>
