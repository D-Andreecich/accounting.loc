@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Overview <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Reports</a>
                </li>
            </ul>

            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#">Nav item</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nav item again</a>
                </li>
            </ul>

            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#">Nav item again</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">One more nav</a>
                </li>
            </ul>
        </nav>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
            <h2>Все пользователи</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>name</th>
                        <th>email</th>
                        <th>Role</th>
                        <th>updated_at</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $user)
                    <tr>
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ 'off' }}</td>
                        <td>{{ $user['updated_at'] }}</td>
                    </tr>
                   @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
@endsection