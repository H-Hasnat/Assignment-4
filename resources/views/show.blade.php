@extends('layout')

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <td>{{ $contact->id }}</td>

            </tr>

            <tr>
                <th scope="col">Name</th>
                <td>{{ $contact->name }}</td>

            </tr>

            <tr>
                <th scope="col">Email</th>
                <td>{{ $contact->email }}</td>

            </tr>

            <tr>
                <th scope="col">phone</th>
                <td>{{ $contact->phone }}</td>

            </tr>

            <tr>
                <th scope="col">Address</th>
                <td>{{ $contact->address }}</td>

            </tr>
            <tr>
                <th scope="col">Date</th>
                <td>{{ $contact->created_at }}</td>

            </tr>



        </thead>
        <tbody>
            <tr>
            </tr>

        </tbody>
    </table>
@endsection
