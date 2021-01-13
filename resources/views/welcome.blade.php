<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://cyberdynetechnologyltd.com/assets/favicon.png">

    <title>Frontend Website Panel</title>
  
    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{('admin_panel_assets/')}}/css/vendors_css.css">
      
    <!-- Style-->  
    <link rel="stylesheet" href="{{('admin_panel_assets/')}}/css/style.css">
    <link rel="stylesheet" href="{{('admin_panel_assets/')}}/css/skin_color.css">   

</head>
<body class="hold-transition bg-img text-center" style="background-image: url({{('admin_panel_assets/images/background.jpg')}})" data-overlay="5">
    
    <div class="container h-p100">
        <div class="row justify-content-md-center align-items-center h-p100">
            <div class="col-md-8 col-12">
                <div class="box box-transparent no-border no-shadow">   
                    <div class="box-body text-center">  
                      <h1 class="mt-20 font-size-60 text-white">We are On the way</h1>

                      <h3 class="mb-20 text-white">Cyberdyne Technology Limited</h3>
                      
                      
                      <!--timer-->
                      <div class="examples my-35">
                        <div id="countdown" class="row justify-content-md-center text-white"></div>
                      </div>
                      <!--//timer-->
                       <div class="flexbox justify-content-center">


              @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                       
                  <a href="{{ url('/home') }}" class="btn btn-danger btn-md mb-5" ><i class="mdi mdi-send"></i> Dashboard </a>

                    @else
                       
                   <a class="btn btn-danger btn-md mb-5" href="{{ route('login') }}"><i class="mdi mdi-send"></i> Login </a> 

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-warning btn-md mb-5">
                           <i class="mdi mdi-search-web"></i> 
                             Register</a> 
                        @endif
                    @endauth
                </div>
            @endif

                        </div>      
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Modal -->
      <div class="modal center-modal fade" id="modal-center" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body text-center">
                <h2>Subscribe Us</h2>
                 <p>Be the first to know when our site is ready</p>
                <form class="mx-auto flexbox w-p75 mb-30" method="post" action="#">
                    <input type="text" class="form-control rounded" name="EMAIL" placeholder="Enter email address">
                    <button class="btn btn-danger" type="submit">Notify me</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      <!-- /.modal -->
  

    <!-- Vendor JS -->
    <script src="{{('admin_panel_assets/')}}/js/vendors.min.js"></script>
    <script src="{{('admin_panel_assets/')}}/js/pages/chat-popup.js"></script>
    <script src="{{('admin_panel_assets/')}}//assets/icons/feather-icons/feather.min.js"></script>    
    
    <!-- Joblly App -->
    <script src="{{('admin_panel_assets/')}}/js/pages/coundown-timer.js"></script>


</body>
</html>
