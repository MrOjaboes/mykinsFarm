<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
<i class="nav-icon fas fa-sign-out-alt mr-2"></i>
Logout
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
@csrf
</form>
