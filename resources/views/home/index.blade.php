@extends('layout.default')

@section('content')

@if (Session::has('success'))
<div id="floatingAlert" class="alert alert-success shadow-lg p-3 text-white fw-bold position-fixed bottom-0 end-0 m-3 rounded fade show" role="alert" style="z-index: 1050; background-color: #28a745;">
    {{ Session::get('success') }}
    @php Session::forget('success'); @endphp
    <button type="button" class="btn-close text-white" onclick="dismissAlert()"></button>
</div>

<script>
    // Auto-hide after 5 seconds
    setTimeout(() => {
        document.getElementById("floatingAlert")?.classList.add("d-none");
    }, 5000);

    function dismissAlert() {
        document.getElementById("floatingAlert").classList.add("d-none");
    }
</script>
@endif


<div class="content" id="mainContent">
    <div class="container mt-3">
        <div class="card shadow p-2 text-left">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <!-- Search Form -->
                <form method="get" action="{{ route('patients.search')}}" class="d-flex" autocomplete="off">
                    @csrf
                    <input type="text" name="search" class="form-control me-2" placeholder="Search Patient..." style="width: 250px;">
                    <button type="submit" class="btn btn-primary" style="width: 100px;"><i class="bi bi-search"></i> Search</button>
                </form>

                <!-- Create Patient Button -->
                <a href="{{ route('patients.create')}}" class="btn btn-success">+ Add Patient</a>
            </div>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-striped table-light shadow">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" style="width: 5%;">#</th>
                            <th scope="col" style="width: 40%;">Name / Address</th>
                            <th scope="col" style="width: 15%;">Contact No</th>
                            <th scope="col" style="width: 15%;">Birthdate</th>
                            <th scope="col" style="width: 15%;">Email</th>
                            <th scope="col" style="width: 10%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($patients as $patient)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <h6 class="fw-semibold mb-1 text-uppercase">{{ $patient->name }}</h6>
                                <span class="text-muted">{{ $patient->address }}</span>
                            </td>
                            <td>{{ $patient->contactno }}</td>
                            <td>{{ \Carbon\Carbon::parse($patient->birthdate)->format('M d, Y') }}</td>
                            <td>{{ $patient->email }}</td>
                            <td>
                                <div class="d-grid gap-1">
                                    <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-outline-warning btn-sm w-100">✏ Edit</a>
                                    <form method="POST" action="{{ route('patients.destroy', $patient->id)}}" class="m-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm w-100">🗑 Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-3">
                {{ $patients->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>



@endsection