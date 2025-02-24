@extends('layout.default')
@section('content')
    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif


<div class="card">
    <div class="card-body">
                <h5 class="card-title fw-semibold">Create Patient Profile</h4>
                <p class="card-category"></p>
        
        <form method="POST" action="{{route('patients.update',$patient->id)}}" autocomplete="off">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{ old('name', $patient->name) }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="address" value="{{ old('address', $patient->address) }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Contact Number</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="contactno" value="{{ old('contactno', $patient->contactno) }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Birth Date</label>
                <input type="date" class="form-control" id="exampleInputEmail1" name="birthdate" value="{{ old('birthdate', $patient->birthdate) }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="email" value="{{ old('email', $patient->email) }}">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-light" href="{{ route('home')}}">Cancal</a>

        </form>
    </div>
</div>

@endsection