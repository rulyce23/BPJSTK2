<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark" id="accordionSidebar">

    <!-- Sidebar - Brand -->
	
    <a class="sidebar-brand d-flex align-items-left justify-content-left" href="#">
        <div class="sidebar-brand-text">
		<img src="{{asset('img/jamsostek.png')}}" width="50" height="50" >&nbsp;CS BPJS</div>
		
    </a>


    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('cs.dashboard')}}">
            <i class="fas fa-fw fa-home"></i>
            <span>Dashboard</span>
        </a>
    </li>

	 <li class="nav-item">
               <a class="nav-link" href="{{route('cs.dashboard.customer')}}">
            <i class="fas fa-fw fa-database"></i>
            <span>Validasi BPJS</span>
        </a>
    </li>
	<li class="nav-item">
        <a class="nav-link" href="{{route('cs.user.users')}}">
            <i class="fas fa-fw fa-tasks"></i>
            <span>Manajemen User</span>
        </a>
    </li>
  


</ul>
<!-- End of Sidebar -->
