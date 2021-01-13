<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://cyberdynetechnologyltd.com/assets/favicon.png">

    <title>Dashboard Panel</title>
    
    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{('admin_panel_assets/')}}/css/vendors_css.css">
      
    <!-- Style-->  
    <link rel="stylesheet" href="{{('admin_panel_assets/')}}/css/style.css">
    <link rel="stylesheet" href="{{('admin_panel_assets/')}}/css/skin_color.css">   
</head>

<body class="hold-transition light-skin sidebar-mini theme-primary">

    @include('layouts.header')
    @include('layouts.sidebar')
    @yield('content')
    @include('layouts.footer')
    
    <!-- Vendor JS -->
    <script src="{{('admin_panel_assets/')}}/js/vendors.min.js"></script>
    <script src="{{('admin_panel_assets/')}}/js/pages/chat-popup.js"></script>
    <script src="{{('admin_panel_assets/')}}/assets/icons/feather-icons/feather.min.js"></script>    

    <script src="{{('admin_panel_assets/')}}/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
    <script src="{{('admin_panel_assets/')}}/assets/vendor_components/moment/min/moment.min.js"></script>
    <script src="{{('admin_panel_assets/')}}/assets/vendor_components/fullcalendar/fullcalendar.js"></script>
    
    <!-- Joblly App -->
    <script src="{{('admin_panel_assets/')}}/js/template.js"></script>
    <script src="{{('admin_panel_assets/')}}/js/pages/dashboard.js"></script>
    <script src="{{('admin_panel_assets/')}}/js/pages/calendar-dash.js"></script>
    
</body>
</html>