@extends('layout')

@section('content')
    <div class="w-50 p-5 mx-auto  border bordered-black-2">

        <form action="/contacts/{{ $contact->id }}/update" method="POST">
            @csrf
            @method('PUT')
            <label class="form-label">Name:</label>
            <input type="text" class="form-control" value="{{ $contact->name }}" name="name">
            <label class="form-label">Email:</label>
            <input type="email" class="form-control" value="{{ $contact->email }}" name="email">
            <label class="form-label">Phone:</label>
            <input type="text" class="form-control" value="{{ $contact->phone }}" name="phone">
            <label class="form-label">Address:</label>
            <input type="text" class="form-control" value="{{ $contact->address }}" name="address">
            <input type="submit" value="Update" class="mt-2 btn btn-primary">


        </form>
    </div>
@endsection
