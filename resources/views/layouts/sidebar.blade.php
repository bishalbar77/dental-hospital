
  <aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <div class="logo-text">
                    <span class="logo-title">NARAYANI</span>
                </div>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="{{ url()->current() == route('home')
                        || url()->current() == route('home') ? 'active' : '' }}" href={{ route('home') }}><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                </li>
                @if (Auth::user()->id == 1)
                <li>
                    <a class="{{ url()->current() == route('all-appointment') ? 'active' : '' }}" href={{ route('all-appointment') }}><span class="icon user-3" aria-hidden="true"></span>All Appointments</a>
                </li>
                @else
                <li>
                    <a class="{{ url()->current() == route('my-appointment') ? 'active' : '' }}" href={{ route('my-appointment') }}><span class="icon folder" aria-hidden="true"></span>Appointment History</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</aside>