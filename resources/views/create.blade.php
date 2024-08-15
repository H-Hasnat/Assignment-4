@extends('layout')

@section('content')

<div class="w-50 p-5 mx-auto  border bordered-black-2">

    <form action="/contacts/store" method="POST">
        @csrf

        <label class="form-label">Name:</label>
     <input type="text" class="form-control" name="name" value="{{old('name')}}">
     @error('name')
        {{$message}}
     @enderror
     <label class="form-label">Email:</label>
     <input type="email" class="form-control"  value="{{old('email')}}" name="email">

     @error('email')
        {{$message}}
     @enderror

     <label class="form-label">Phone:</label>
     <input type="text" class="form-control"  value="{{old('phone')}}" name="phone">

     @error('phone')
     {{$message}}
    @enderror

     <label class="form-label">Address:</label>
     <input type="text" class="form-control"  value="{{old('address')}}" name="address">

     @error('address')
     {{$message}}
     @enderror

     <input type="submit" value="Add" class="mt-2 btn btn-primary">


   </form>
</div>



@endsection
