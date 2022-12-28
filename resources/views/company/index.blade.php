@extends('welcome')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Action</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($compaines as $company)
            <tr>
                <th scope="row">{{ $company->id }}</th>
                <td>{{ $company->name }}</td>
                <td>{{ $company->address }}</td>
                <td><a class="btn btn-primary" href="{{ route('company.edit', $company->id) }}">Edit</a></td>
                <form action="{{ route('company.destroy', $company->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td><button type="submit" class="btn btn-primary" href="{{ route('company.destroy', $company->id) }}">Delete</button></td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
