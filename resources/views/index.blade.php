@extends('layout')

@section('content')
    <div class="row  d-flex">


        <form action="/contacts/search" method="POST" class="d-flex mx-auto gap-2 col-6 ">
            @csrf
            <input type="text" name="search" placeholder="search" class="form-control">
            <input type="submit" value="Search" class="btn btn-primary">
        </form>

        <form action="/contacts/sorting" method="POST" class="d-flex mx-auto gap-2 col-2 ">
            @csrf

            <select name="select" class="form-select ">
                <option value="0" disabled selected>Sort</option>
                <option value="1">Name</option>
                <option value="2">Date</option>

            </select>
            <input type="submit" value="Sorting" class="btn btn-primary">

        </form>


        <div class="mx-2 mt-3">
            <a href="/contacts/create"><button class="btn btn-success">Create</button></a>


        </div>
    </div>





    <div class="row p-4 ">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date</th>
                    <th scope="col">Show</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $val)
                    <tr>
                        <th scope="row">{{ $val->id }}</th>
                        <td>{{ $val->name }}</td>
                        <td>{{ $val->email }}</td>
                        <td>{{ $val->created_at }}</td>
                        <td><a href="/contacts/{{ $val->id }}"><button class="btn btn-secondary">Show</button></a></td>
                        <td><a href="/contacts/{{ $val->id }}/edit"><button class="btn btn-success">Update</button></a>
                        </td>
                        <td>
                            <form action="/contacts/{{ $val->id }}/delete" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
