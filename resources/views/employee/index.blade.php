@extends('welcome')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Company</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
            <tr>
                <th scope="row">{{ $employee->id }}</th>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->company->name }}</td>
                <td><img src="{{ asset('storage/' . $employee->image_path) }}" alt="image"></td>
                <td><a class="btn btn-primary" href="">Edit</a></td>
                <form action="{{ route('employee.destroy', $employee->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td><button type="submit" class="btn btn-primary" href="">Delete</button></td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
