<div id="sidebar" class="position-fixed vh-100 p-3 sidebar-light" style="width: 250px; transition: all 0.3s;">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home.dashboard') }}">🏠 Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">👨‍⚕️ Patients</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('reports.index') }}">📊 Reports</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('users.index') }}">👤 Users</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-danger" href="{{ route('logout') }}">🚪 Logout</a>
        </li>
    </ul>
</div>
