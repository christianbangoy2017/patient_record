<header class="navbar navbar-expand-lg bg-light shadow-sm px-3" id="navbar">
    <button class="btn btn-primary me-3" id="toggleSidebar">☰</button>

    <h5 class="m-0">Patient Record System</h5>

    <div class="ms-auto">
        <!-- Dark Mode Toggle Button -->
        <button class="btn btn-outline-secondary" id="darkModeToggle">
            🌙 Dark Mode
        </button>
    </div>
</header>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const darkModeToggle = document.getElementById("darkModeToggle");
        const body = document.body;
        const sidebar = document.getElementById("sidebar");

        // Check Local Storage for Theme Preference
        if (localStorage.getItem("theme") === "dark") {
            body.classList.add("dark-mode");
            sidebar.classList.add("bg-dark", "text-light");
            darkModeToggle.textContent = "☀ Light Mode";
        }

        // Toggle Dark Mode
        darkModeToggle.addEventListener("click", function () {
            body.classList.toggle("dark-mode");
            sidebar.classList.toggle("bg-dark");
            sidebar.classList.toggle("bg-light");
            sidebar.classList.toggle("text-light");
            sidebar.classList.toggle("text-dark");

            // Update Button Text
            if (body.classList.contains("dark-mode")) {
                localStorage.setItem("theme", "dark");
                darkModeToggle.textContent = "☀ Light Mode";
            } else {
                localStorage.setItem("theme", "light");
                darkModeToggle.textContent = "🌙 Dark Mode";
            }
        });
    });
</script>
