@extends('layout.default')

@section('content')


    <!-- Main Content -->
    <div id="mainContent" class="content flex-grow-1">
        <button class="btn btn-outline-dark mb-3" id="sidebarToggle">☰ Menu</button>        
        <a class="btn btn-outline-dark mb-3" href="{{ route('home')}}">BACK TO HOME</a>
        <div class="card shadow p-4 text-center">
            <h1 class="fw-bold">Welcome to Dashboard</h1>
            <p class="text-muted">Ongoing Development 🚀</p>
        </div>
    </div>
</div>

@endsection

