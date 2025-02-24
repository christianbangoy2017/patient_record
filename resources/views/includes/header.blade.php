<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Record System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        /* Sidebar Styling */
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: -250px;
            /* Hidden initially */
            background: #343a40;
            color: white;
            padding-top: 20px;
            transition: left 0.3s ease-in-out;
            z-index: 1050;
        }

        .sidebar.active {
            left: 0;
            /* Slide in */
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            display: flex;
            align-items: center;
            font-size: 16px;
            transition: background 0.3s;
        }

        .sidebar a:hover {
            background: #495057;
            padding-left: 25px;
            /* Subtle hover animation */
        }

        .sidebar i {
            margin-right: 10px;
            font-size: 18px;
        }

        .sidebar-close {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 20px;
            cursor: pointer;
        }

        /* Sidebar Toggle Button */
        .sidebar-toggle {
            position: fixed;
            left: 15px;
            top: 10px;
            z-index: 1051;
            background: none;
            border: none;
            font-size: 24px;
            color: white;
            cursor: pointer;
        }

        /* Adjust content margin when sidebar is open */
        .content {
            margin-left: 0;
            transition: margin-left 0.3s ease-in-out;
        }

        .content.shift {
            margin-left: 250px;
        }
    </style>
</head>

<body>

    <!-- Top Navigation Bar -->
    <nav class="navbar navbar-expand-lg bg-dark text-light">
        <div class="container-fluid">
            <!-- Sidebar Toggle Button -->
            <button class="sidebar-toggle" id="sidebarToggle">
                <i class="bi bi-list"></i>
            </button>

            <a class="navbar-brand text-light ms-5" href="#">Patient Record System</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light" href="#">Home</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Sidebar Navigation -->
    <div class="sidebar" id="sidebar">
        <span class="sidebar-close text-light" id="closeSidebar">&times;</span>
        <ul class="list-unstyled mt-4">
            <li><a href="{{ route('home.dashboard')}}"><i class="bi bi-house-door"></i> Dashboard</a></li>
            <li><a href="{{ route('home')}}"><i class="bi bi-list-ul"></i> Patient List</a></li>
            <li><a href="#"><i class="bi bi-people"></i> Users</a></li>
            <li><a href="#"><i class="bi bi-gear"></i> Settings</a></li>
            <li><a href="#"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="content" id="mainContent">
        <div class="container mt-3">
            <div class="card">
                <div class="card shadow p-4 text-left">
                    <h4 class="card-title fw-bold">Welcome to the Patient Record System</h4>
                    <p class="text-muted">Manage your patient records efficiently with our system.</p>
                </div>                
            </div>
        </div>
    </div>

    <script>
        // Sidebar toggle functionality
        document.getElementById("sidebarToggle").addEventListener("click", function() {
            document.getElementById("sidebar").classList.toggle("active");
            document.getElementById("mainContent").classList.toggle("shift");
        });

        // Close sidebar when clicking the "X" button
        document.getElementById("closeSidebar").addEventListener("click", function() {
            document.getElementById("sidebar").classList.remove("active");
            document.getElementById("mainContent").classList.remove("shift");
        });

        // Auto-close sidebar on small screens when clicking outside
        document.addEventListener("click", function(event) {
            let sidebar = document.getElementById("sidebar");
            let toggleButton = document.getElementById("sidebarToggle");

            if (!sidebar.contains(event.target) && !toggleButton.contains(event.target)) {
                sidebar.classList.remove("active");
                document.getElementById("mainContent").classList.remove("shift");
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>