<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="https://cyberdynetechnologyltd.com/assets/favicon.png">

<title>Registration Page</title>
<!-- Vendors Style-->
<link rel="stylesheet" href="{{('admin_panel_assets/')}}/css/vendors_css.css">

<!-- Style-->  
<link rel="stylesheet" href="{{('admin_panel_assets/')}}/css/style.css">
<link rel="stylesheet" href="{{('admin_panel_assets/')}}/css/skin_color.css">   

</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url({{('admin_panel_assets/images/auth-bg/bg-2.jpg')}})">

<div class="container h-p100">
<div class="row align-items-center justify-content-md-center h-p100">

<div class="col-12">
<div class="row justify-content-center no-gutters">
<div class="col-lg-5 col-md-5 col-12">
<div class="bg-white rounded30 shadow-lg">
<div class="content-top-agile p-20 pb-0">
<h2 class="text-primary">Get started with Us</h2>
<p class="mb-0">Register a new membership</p>                           
</div>
<div class="p-40">
<form method="POST" action="{{ route('register') }}">
@csrf
<div class="form-group">
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
</div>


<input id="name" type="text" placeholder="Enter Your Name" class="form-control pl-15 bg-transparent @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

@error('name')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror


</div>
</div>
<div class="form-group">
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
</div>



<input id="email" type="email" placeholder="Email" class="form-control pl-15 bg-transparent @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
</div>



<input id="password" type="password" placeholder="Password" class="form-control pl-15 bg-transparent @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

@error('password')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror


</div>
</div>
<div class="form-group">
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
</div>


<input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control pl-15 bg-transparent" name="password_confirmation" required autocomplete="new-password">

</div>
</div>
<div class="row">
<!--   <div class="col-12">
<div class="checkbox">
<input type="checkbox" id="basic_checkbox_1" >
<label for="basic_checkbox_1">I agree to the <a href="#" class="text-warning"><b>Terms</b></a></label>
</div>
</div> -->
<!-- /.col -->
<div class="col-12 text-center">
<button type="submit" class="btn btn-info margin-top-10">SIGN IN</button>
</div>
<!-- /.col -->
</div>
</form>             
<div class="text-center">
<p class="mt-15 mb-0">Already have an account?<a href="{{ route('login') }}" class="text-danger ml-5"> Sign In</a></p>
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
