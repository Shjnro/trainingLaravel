@extends('dashboard')
@section('content')
<main>
    <div class="container">
        <h2>List users</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td><a class="nav-link" href="http://127.0.0.1:8000/user/{{$user->id}}">{{ $user->name }}</a></td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $users->links('pagination::bootstrap-4') !!}
        </div>
    </div>

</main>
@endsection