    <!-- ! Main nav -->
    <nav class="main-nav--bg">
        <div class="container main-nav">
          <div class="main-nav-start">
            <h4 style="font-weight: 600;color:#797979;">Welcome to your dashboard</h4>
          </div>
          <div class="main-nav-end">
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
              <span class="sr-only">Toggle menu</span>
              <span class="icon menu-toggle--gray" aria-hidden="true"></span>
            </button>
            {{-- <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
              <span class="sr-only">Switch theme</span>
              <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
              <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
            </button> --}}
            <div class="nav-user-wrapper" style="float: right;">
              <a href="{{ route('logout') }}" class="nav-user-btn dropdown-btn" title="Logout" type="button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="sr-only">Logout</span>
                <span class="nav-user-img">
                  <picture><source srcset="../../img/avatar/log.png" type="image/webp"><img src="../../img/avatar/log.png" alt="User name"></picture>
                </span>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
              </a>
            </div>
            <div class="nav-user-wrapper" style="float: right;">
              <ul class="users-item-dropdown nav-user-dropdown dropdown">
                <li><a class="danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i data-feather="log-out" aria-hidden="true"></i>
                    <span>{{ __('Logout') }}</span>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </nav>