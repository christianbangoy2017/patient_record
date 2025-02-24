<!DOCTYPE html>
<html lang="en">


@include('includes.head')


<body>
    @include('includes.header')
    <!-- Main Body Content with Container -->
    <div class="container-fluid d-flex my-5">
        @include('includes.sidebar')
        <main class="flex-grow-1 p-3" id="mainContent">
            @yield('content')
        </main>
    </div>

    @include('includes.footer')


    <script>
        document.getElementById("toggleSidebar").addEventListener("click", function() {
            let sidebar = document.getElementById("sidebar");
            let mainContent = document.getElementById("mainContent");

            if (sidebar.style.marginLeft === "0px" || sidebar.style.marginLeft === "") {
                sidebar.style.marginLeft = "-250px";
                mainContent.style.marginLeft = "0px";
            } else {
                sidebar.style.marginLeft = "0px";
                mainContent.style.marginLeft = "250px";
            }
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const darkModeToggle = document.getElementById("darkModeToggle");
            const body = document.body;
            const sidebar = document.getElementById("sidebar");

            // Check if dark mode is stored in Local Storage
            if (localStorage.getItem("theme") === "dark") {
                body.classList.add("dark-mode");
                darkModeToggle.textContent = "☀ Light Mode";
            }

            // Toggle Dark Mode
            darkModeToggle.addEventListener("click", function() {
                body.classList.toggle("dark-mode");

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


</body>

</html>