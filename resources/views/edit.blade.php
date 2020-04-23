@extends('layouts/main')

@section('content')

<div class="container">

    @if($errors->any())
    @foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        {{$error}}
    </div>
    @endforeach
    @endif

    <h1>CREATE PAGE</h1>

    <!-- Default form register -->
    <form class="text-center border border-light p-5" action="{{route('update', $student->id)}}" method="POST">

        {{csrf_field()}}

        <p class="h4 mb-4">tambah data</p>

        <div class="form-row mb-4">
            <div class="col">
                <!-- First name -->
                <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="firstname"
                    name="firstname" value="{{$student->first_name}}">
            </div>
            <div class="col">
                <!-- Last name -->
                <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="lastname"
                    name="lastname" value="{{$student->last_name}}">
            </div>
        </div>

        <!-- E-mail -->
        <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="email" name="email"
            value="{{$student->email}}">

        <!-- Phone number -->
        <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="phone" name="phone"
            value="{{$student->phone}}" aria-describedby="defaultRegisterFormPhoneHelpBlock">

        <!-- Sign up button -->
        <button class="btn btn-info my-4 btn-block" type="submit">Add data</button>

        <hr>

        <!-- Terms of service -->
        <p>By clicking
            <em>Sign up</em> you agree to our
            <a href="" target="_blank">terms of service</a>

    </form>
    <!-- Default form register -->
</div>
@endsection