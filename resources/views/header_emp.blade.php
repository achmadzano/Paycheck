    <nav class="sidebar close">
      <header>
        <div class="image-text">
          <span class="image">
            <img src="image/paychecklogo.png" alt="" />
          </span>

          <div class="text logo-text">
            <span class="name">Paycheck</span>
            <span class="profession">Employee</span>
          </div>
        </div>

        <i class="bx bx-chevron-right toggle"></i>
      </header>

      <div class="menu-bar">
        <div class="menu">
          <ul class="menu-links">
            <li class="nav-link">
              <a href="{{ route('dashboard_employee') }}">
                <i class="bx bx-home-alt icon"></i>
                <span class="text nav-text">Dashboard</span>
              </a>
            </li>
              
        </div>

        <div class="bottom-content">
          
          <li class="nav-link">
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bx bx-log-out icon"></i>
                <span class="text nav-text">{{ __('Log Out') }}</span>
            </a>
            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                @csrf
            </form>
        </li>
        
        
        
        
		  <li class="">
			<a href="settings.php">
				<i class='bx bx-cog icon' ></i>
				<span class="text nav-text">Settings</span>
			</a>
		  </li>
        </div>
      </div>
    </nav>

