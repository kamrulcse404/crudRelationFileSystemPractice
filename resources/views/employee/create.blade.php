@extends('welcome')
@section('content')
    <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        <div class="mb-3">
            <label for="company_id" class="form-label">Company</label>
            <select class="form-select" name="company_id">
                <option selected>--Selected--</option>
                @foreach ($companies as $company)
                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="mb-3">
            <label for="image_path" class="form-label">Image</label>
            <input type="file" class="form-control" id="image_path" name="image_path">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
