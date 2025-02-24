<!DOCTYPE html>
<html lang="en">


@include('includes.head')


<body>
    @include('includes.header')
    <!-- Main Body Content with Container -->
    <div class="container my-5">
        @yield('content')
    </div>

    @include('includes.footer')

</body>
</html>