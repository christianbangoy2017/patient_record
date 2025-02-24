@extends('layout.default')

@section('content')
<!-- <div class="container mt-5 text-center" id="mainContent"> -->
<div id="mainContent" class="content transition" style="margin-left: 250px; transition: all 0.3s;">
  
    <h1 class="display-4">🏠 Welcome to the Dashboard</h1>
    <p class="lead">Ongoing Development...</p>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card shadow-sm p-3 bg-primary text-white">
                <h3>Total Patients</h3>
                <p class="fs-4">0</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm p-3 bg-success text-white">
                <h3>Reports Generated</h3>
                <p class="fs-4">0</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm p-3 bg-warning text-dark">
                <h3>Active Users</h3>
                <p class="fs-4">0</p>
            </div>
        </div>
    </div>
</div>
@endsection
