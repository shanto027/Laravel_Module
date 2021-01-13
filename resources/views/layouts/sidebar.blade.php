<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
	  <div class="user-profile px-20 pt-15 pb-10">
		<div class="d-flex align-items-center">			
			<div class="image">
			  <img src="{{('admin_panel_assets/')}}/images/avatar/avatar-13.png" class="avatar avatar-lg bg-primary-light rounded100" alt="User Image">
			</div>
			<div class="info">
				<a class="dropdown-toggle px-20" data-toggle="dropdown" href="#">Shanto Halder</a>
				<div class="dropdown-menu">
				  <a class="dropdown-item" href="#"><i class="ti-user"></i> Profile</a>
				  <div class="dropdown-divider"></div>
				  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
				</div>
			</div>
		</div>
	
	  </div>
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">		

        

		<li>
          <a href="{{ route('projects_index') }}">
            <i class="icon-File"><span class="path1"></span><span class="path2"></span></i>
			<span>Project</span>
          </a>
        </li>
	
		<li>
          <a href="{{route('representative_name')}}">
            <i class="icon-Add-user"><span class="path1"></span><span class="path2"></span></i>
			<span>Representative</span>
          </a>
        </li>

        <li>
          <a href="{{route('clients_index')}}">
            <i class="icon-Add-user"><span class="path1"></span><span class="path2"></span></i>
      <span>Client</span>
          </a>
        </li>

		<li>
          <a href="{{route('staff_index')}}">
            <i class="icon-Add-user"><span class="path1"></span><span class="path2"></span></i>
			<span>Staff</span>
          </a>
        </li>
		<li>

      <li>
          <a href="{{route('zoom_index')}}">
            <i  class="icon-Chat"><span class="path1"></span><span class="path2"></span></i>
      <span>Zoom Meeting</span>
          </a>
        </li>


        <li>
          <a href="{{ route('chat_index') }}">
            <i  class="icon-Chat"><span class="path1"></span><span class="path2"></span></i>
      <span>Chat</span>
          </a>
        </li>



        <li>
          <a href="{{route('report_index')}}">
            <i  class="icon-Chart-pie"><span class="path1"></span><span class="path2"></span></i>
      <span>Report</span>
          </a>
        </li>

       
    
      </ul>
    </section>
  </aside>